<?php
/**
 * Page: Service — Photography
 * Status: BUILT by Claude per client authorization — no dedicated design was sent for this
 * page; built following the established Services Hub visual pattern. Copy is CONFIRMED
 * (client-provided). Sub-category presentation uses TABS, per the decision already confirmed
 * earlier in this project (Personal / Event / Commercial / Business).
 */
$page_title = 'Photography | Verve Creative Studio';
$meta_description = 'Capturing moments, creating timeless images — personal, event, commercial, and business photography from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$tabs = [
    'personal' => [
        'label' => 'Personal',
        'items' => ['Portrait Photography', 'Family Photography', 'Birthday Photography', 'Baby Shower Photography', 'Naming Ceremony Photography', 'Graduation Photography', 'Maternity Photography', 'Newborn Photography', 'Anniversary Photography', 'Couple & Engagement Photography', 'Lifestyle Photography', 'Fashion Photography', 'Beauty Photography'],
    ],
    'event' => [
        'label' => 'Event',
        'items' => ['Birthday Parties', 'Corporate Events', 'Conferences', 'Seminars', 'Awards Ceremonies', 'Festivals', 'Church Events', 'Community Events', 'Charity Events', 'Product Launches'],
    ],
    'commercial' => [
        'label' => 'Commercial',
        'items' => ['Product Photography', 'Food Photography', 'Restaurant Photography', 'Hotel Photography', 'Real Estate Photography', 'Property Photography', 'Interior Photography', 'Architecture Photography', 'Construction Progress Photography', 'Industrial Photography'],
    ],
    'business' => [
        'label' => 'Business',
        'items' => ['Staff Headshots', 'Executive Portraits', 'Team Photography', 'Office Photography', 'Corporate Branding', 'Social Media Content', 'Marketing Photography', 'E-commerce Photography'],
    ],
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Photography</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Photography</p>
      <h1>Capturing Moments.<br>Creating <span class="gold-word">Timeless Images.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Photography is more than taking pictures&mdash;it's preserving memories, showcasing brands, and telling stories through visual artistry. Whether you're celebrating a personal milestone or promoting your business, we provide professional photography tailored to your unique needs.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book This Service</a>
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-outline">View Our Work</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/photography', 'Photography', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">What We Offer</p>
    <div class="service-tabs" role="tablist">
      <?php foreach ($tabs as $key => $tab): ?>
      <button type="button" class="tab-btn <?php echo $key === 'personal' ? 'active' : ''; ?>" data-tab="<?php echo $key; ?>"><?php echo htmlspecialchars($tab['label']); ?></button>
      <?php endforeach; ?>
    </div>
    <?php foreach ($tabs as $key => $tab): ?>
    <div class="tab-panel <?php echo $key === 'personal' ? 'active' : ''; ?>" id="tab-<?php echo $key; ?>">
      <?php render_service_checklist($tab['items']); ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Let's Create Something Timeless.</h2>
    <p>Whatever the occasion, we'll bring the right eye and the right equipment.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById('tab-' + btn.dataset.tab).classList.add('active');
    });
  });
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
