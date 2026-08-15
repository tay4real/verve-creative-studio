<?php
/**
 * Page: Contact
 * Status: BUILT to supplied design ("Contact page" in content-received/designs/).
 * Flagged: form submits to contact-submit.php, which currently just confirms receipt — real
 * email delivery needs includes/mailer.php (still TODO, pending IONOS SMTP credentials).
 * Map is a placeholder — needs a Google Maps API key to embed the real Birmingham location.
 */
$page_title = 'Contact | Verve Creative Studio';
$meta_description = 'Get in touch with Verve Creative Studio — Birmingham, UK. Send us a message or reach out via phone, email, or WhatsApp.';
$current_page = 'contact';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/image-helpers.php';
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <span>Contact</span></div>
</div>

<section class="hero" style="padding-bottom:50px;">
  <div class="wrap hero-grid">
    <div>
      <h1>Let's Create Something<br><span class="gold-word">Extraordinary Together.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Have a project in mind, need more information, or want to collaborate? We'd love to hear from you.</p>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('studio-culture', 'Verve Creative Studio', 'large', true); ?></div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap contact-grid">
    <div class="contact-card">
      <h3>&#9993; Send Us a Message</h3>
      <form method="post" action="<?php echo SITE_URL; ?>/contact-submit">
        <div class="form-row">
          <div class="form-group"><label class="form-label">Your Name *</label><input type="text" name="name" class="form-input" required></div>
          <div class="form-group"><label class="form-label">Your Email *</label><input type="email" name="email" class="form-input" required></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label class="form-label">Phone Number</label><input type="tel" name="phone" class="form-input"></div>
          <div class="form-group"><label class="form-label">Subject</label><input type="text" name="subject" class="form-input"></div>
        </div>
        <div class="form-group">
          <label class="form-label">Select an Option *</label>
          <select name="enquiry_type" class="form-select" required>
            <option value="">Select an option</option>
            <option value="booking">Booking Enquiry</option>
            <option value="general">General Enquiry</option>
            <option value="collaboration">Collaboration</option>
            <option value="press">Press / Media</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Your Message *</label>
          <textarea name="message" class="form-textarea" required></textarea>
        </div>
        <label class="terms-check">
          <input type="checkbox" required>
          <span>I agree to the <a href="<?php echo SITE_URL; ?>/privacy" target="_blank">Privacy Policy</a> and <a href="<?php echo SITE_URL; ?>/terms" target="_blank">Terms of Service</a> (pages pending).</span>
        </label>
        <button type="submit" class="btn btn-solid">Send Message &rarr;</button>
      </form>
    </div>

    <div>
      <div class="contact-card" style="margin-bottom:20px;">
        <h3>&#128205; Find Us</h3>
        <p style="color:var(--cream);font-size:14px;margin-bottom:4px;">Verve Creative Studio</p>
        <p style="color:var(--muted);font-size:13.5px;margin-bottom:16px;">Birmingham, West Midlands<br>United Kingdom</p>
        <div class="art-panel" style="aspect-ratio:16/10;"><span>Map &mdash; Placeholder (needs Google Maps API key)</span></div>
      </div>

      <div class="contact-info-grid">
        <div class="contact-info-card">
          <h5>&#9993; Business Emails</h5>
          <p><a href="mailto:info@vervecreativestudio.co.uk">info@vervecreativestudio.co.uk</a><br>
          <a href="mailto:tosin@vervecreativestudio.co.uk">tosin@vervecreativestudio.co.uk</a><br>
          <a href="mailto:bookings@vervecreativestudio.co.uk">bookings@vervecreativestudio.co.uk</a></p>
        </div>
        <div class="contact-info-card">
          <h5>&#9742; Phone Number</h5>
          <p><a href="tel:+447493808739">+44 7493 808739</a></p>
        </div>
        <div class="contact-info-card">
          <h5>&#128172; WhatsApp</h5>
          <p><a href="https://wa.me/447493808739" target="_blank">+44 7493 808739</a><br>Click to chat on WhatsApp</p>
        </div>
        <div class="contact-info-card">
          <h5>&#128337; Business Hours</h5>
          <p>Monday &ndash; Sunday<br>9:00 AM &ndash; 6:00 PM</p>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap">
    <div class="social-connect">
      <div>
        <h4 style="font-size:15px;color:var(--cream);margin-bottom:4px;">Connect With Us</h4>
        <p style="font-size:13px;color:var(--muted);">Follow us on social media for the latest updates, projects and behind-the-scenes.</p>
      </div>
      <div class="social-connect-row">
        <div class="social-connect-item"><span class="social-connect-icon">f</span> Facebook</div>
        <div class="social-connect-item"><span class="social-connect-icon">IG</span> Instagram</div>
        <div class="social-connect-item"><span class="social-connect-icon">TT</span> TikTok</div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
