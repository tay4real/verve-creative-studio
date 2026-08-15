// Mobile drawer + overlay: open/close, body scroll lock, close on link click or overlay click
const burger = document.getElementById('burgerBtn');
const drawer = document.getElementById('mobileDrawer');
const overlay = document.getElementById('drawerOverlay');

function openDrawer(){
  drawer.classList.add('show');
  overlay.classList.add('show');
  drawer.setAttribute('aria-hidden', 'false');
  burger.classList.add('open');
  burger.setAttribute('aria-expanded', 'true');
  document.body.style.overflow = 'hidden';
}
function closeDrawer(){
  drawer.classList.remove('show');
  overlay.classList.remove('show');
  drawer.setAttribute('aria-hidden', 'true');
  burger.classList.remove('open');
  burger.setAttribute('aria-expanded', 'false');
  document.body.style.overflow = '';
}

burger?.addEventListener('click', () => {
  drawer.classList.contains('show') ? closeDrawer() : openDrawer();
});
overlay?.addEventListener('click', closeDrawer);

// Close the drawer after choosing a real link (not the Bookings toggle button, which just expands a sub-panel)
drawer?.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', closeDrawer);
});

// Bookings sub-panel inside the mobile drawer
const mobileBookingsDropdown = document.getElementById('bookingsDropdownMobile');
mobileBookingsDropdown?.querySelector('.drawer-dropdown-toggle')?.addEventListener('click', () => {
  mobileBookingsDropdown.classList.toggle('open');
});

// Desktop Bookings dropdown: hover-driven via CSS, this is just a safety net for keyboard/touch-on-desktop-width
const desktopBookingsDropdown = document.getElementById('bookingsDropdown');
desktopBookingsDropdown?.querySelector('.dropdown-toggle')?.addEventListener('click', (e) => {
  e.preventDefault();
});

// Scroll reveal
const io = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.15 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));
