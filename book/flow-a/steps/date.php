<?php
/**
 * Page: Flow A Step 3 — Select Date
 * Status: BUILT by Claude per client authorization. Spec from Section 8: "interactive calendar,
 * available dates only, unavailable dates greyed out."
 * NOTE: "unavailable" dates below are a small hardcoded demo set — real availability needs to
 * come from the bookings table once it exists (see database/schema.sql), so a date already
 * booked by another client is actually blocked. Flag this before relying on it in production.
 */
$page_title = 'Wedding Film & Photography — Select Date | Verve Creative Studio';
$noindex = true;
require_once __DIR__ . '/../../../includes/booking-session.php';
require __DIR__ . '/../../../includes/header.php';

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 3;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
// Placeholder "already booked" dates for demo purposes only — replace with a real query
// against the bookings table once it exists.
$unavailable_demo = [
    date('Y-m-d', strtotime('+9 days')),
    date('Y-m-d', strtotime('+16 days')),
    date('Y-m-d', strtotime('+23 days')),
];
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 3 of 10</p>
    <h2>Select Your Date</h2>
    <p class="wizard-step-sub">Choose your preferred wedding date. Greyed-out dates are already booked or unavailable.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/save-date" id="dateForm">
      <input type="hidden" name="selected_date" id="selectedDateInput" value="<?php echo htmlspecialchars($fa['date'] ?? ''); ?>">

      <div class="calendar-wrap">
        <div class="calendar-nav">
          <button type="button" id="prevMonth">&larr;</button>
          <div class="calendar-month-label" id="monthLabel"></div>
          <button type="button" id="nextMonth">&rarr;</button>
        </div>
        <div class="calendar-grid" id="calendarDow"></div>
        <div class="calendar-grid" id="calendarGrid"></div>
      </div>
      <p class="form-hint" id="selectedDateDisplay" style="margin-top:14px;"></p>

      <div class="wizard-nav-buttons" style="margin-top:26px;">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/duration" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid" id="continueBtn" disabled>Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>

<script>
(function(){
  const unavailable = <?php echo json_encode($unavailable_demo); ?>;
  const preSelected = <?php echo json_encode($fa['date'] ?? null); ?>;
  const todayStr = new Date().toISOString().slice(0,10);

  let viewDate = new Date();
  let selected = preSelected ? new Date(preSelected + 'T00:00:00') : null;

  const monthLabel = document.getElementById('monthLabel');
  const grid = document.getElementById('calendarGrid');
  const dow = document.getElementById('calendarDow');
  const dowNames = ['Su','Mo','Tu','We','Th','Fr','Sa'];
  const monthNames = ['January','February','March','April','May','June','July','August','September','October','November','December'];

  dow.innerHTML = dowNames.map(d => `<div class="calendar-dow">${d}</div>`).join('');

  function toDateStr(y,m,d){
    return `${y}-${String(m+1).padStart(2,'0')}-${String(d).padStart(2,'0')}`;
  }

  function render(){
    const y = viewDate.getFullYear();
    const m = viewDate.getMonth();
    monthLabel.textContent = `${monthNames[m]} ${y}`;

    const firstDay = new Date(y, m, 1).getDay();
    const daysInMonth = new Date(y, m+1, 0).getDate();

    let html = '';
    for (let i=0; i<firstDay; i++) html += `<div class="calendar-day empty"></div>`;

    for (let d=1; d<=daysInMonth; d++){
      const dateStr = toDateStr(y,m,d);
      const isPast = dateStr < todayStr;
      const isUnavailable = unavailable.includes(dateStr);
      const isSelected = selected && toDateStr(selected.getFullYear(),selected.getMonth(),selected.getDate()) === dateStr;
      const classes = ['calendar-day'];
      if (isPast || isUnavailable) classes.push('unavailable');
      if (isSelected) classes.push('selected');
      html += `<div class="${classes.join(' ')}" data-date="${dateStr}" ${(isPast||isUnavailable) ? '' : 'onclick="selectDate(this)"'}>${d}</div>`;
    }
    grid.innerHTML = html;
  }

  window.selectDate = function(el){
    document.querySelectorAll('.calendar-day.selected').forEach(d => d.classList.remove('selected'));
    el.classList.add('selected');
    const dateStr = el.getAttribute('data-date');
    document.getElementById('selectedDateInput').value = dateStr;
    const d = new Date(dateStr + 'T00:00:00');
    document.getElementById('selectedDateDisplay').textContent = 'Selected: ' + d.toLocaleDateString('en-GB', {weekday:'long', year:'numeric', month:'long', day:'numeric'});
    document.getElementById('continueBtn').disabled = false;
  };

  document.getElementById('prevMonth').addEventListener('click', () => { viewDate.setMonth(viewDate.getMonth()-1); render(); });
  document.getElementById('nextMonth').addEventListener('click', () => { viewDate.setMonth(viewDate.getMonth()+1); render(); });

  render();
  if (preSelected) {
    document.getElementById('continueBtn').disabled = false;
    document.getElementById('selectedDateDisplay').textContent = 'Selected: ' + selected.toLocaleDateString('en-GB', {weekday:'long', year:'numeric', month:'long', day:'numeric'});
  }
})();
</script>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
