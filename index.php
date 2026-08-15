<?php
/**
 * Page: Home
 * Status: DESIGN APPROVED — converted from assets/reference/verve-home-approved-reference.html
 */
$page_title = 'Verve Creative Studio — We Create Beyond Vision';
$meta_description = 'Verve Creative Studio is a multidisciplinary creative house in film, photography, artwork, and exhibitions — serving clients across the UK and Nigeria.';
$current_page = 'home';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/image-helpers.php';
?>
<!-- ============ HERO ============ -->
<section class="home-hero">
  <div class="home-hero-content">
    <p class="eyebrow" style="margin-bottom:22px;">Stories. Art. Emotions. Immortalised.</p>
    <h1>We Create<br>Beyond <span class="gold-word">Vision.</span></h1>
    <div class="gold-underline"></div>
    <p class="lead">Verve Creative Studio is a full-service creative house specialising in film, photography, artwork, and exhibitions. We turn ideas into timeless visual experiences.</p>
    <div class="hero-actions">
      <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-solid">Explore Our Work</a>
      <a href="#" class="btn btn-outline">▶ Watch Showreel</a>
    </div>
  </div>
</section>

<!-- ============ PROMO BANNER ============ -->
<div class="promo-banner">
  <div class="wrap promo-banner-inner">
    <div>
      <span class="promo-badge">&#9733; 30% Off — Limited Time</span>
      <h3>Special Birthday Coverage Package</h3>
      <p>Capture the moments. Relive the memories. See our limited-time birthday photography &amp; videography offer.</p>
    </div>
    <a href="<?php echo SITE_URL; ?>/offers/" class="btn btn-solid">View Offer &rarr;</a>
  </div>
</div>

<!-- ============ TRUST BAR ============ -->
<div class="trust-bar">
  <div class="wrap trust-grid">
    <div class="trust-item">
      <div class="trust-icon">◆</div>
      <div><h4>Premium Quality</h4><p>World-class creative production excellence</p></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">◎</div>
      <div><h4>Bespoke Service</h4><p>Tailored solutions for your unique vision</p></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">✦</div>
      <div><h4>Creative Passion</h4><p>Storytelling that connects and inspires</p></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">★</div>
      <div><h4>Award Winning</h4><p>Recognised for creativity and impact worldwide</p></div>
    </div>
  </div>
</div>

<!-- ============ SERVICES PREVIEW ============ -->
<section>
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">What We Do</p>
      <h2>Creative Services</h2>
      <div class="gold-underline"></div>
    </div>
    <div class="services-grid reveal">
      <div class="service-card"><div class="art-panel"><?php render_photo('services/film-production', 'Film Production', 'sm'); ?></div><div class="sc-body"><h4>Film Production</h4><p>Cinematic storytelling</p></div></div>
      <div class="service-card"><div class="art-panel"><?php render_photo('services/wedding', 'Wedding Film & Photography', 'sm'); ?></div><div class="sc-body"><h4>Wedding Film &amp; Photography</h4><p>Beautiful moments</p></div></div>
      <div class="service-card"><div class="art-panel"><?php render_photo('services/photography', 'Photography', 'sm'); ?></div><div class="sc-body"><h4>Photography</h4><p>Capturing life, perfectly</p></div></div>
      <div class="service-card"><div class="art-panel"><?php render_photo('services/music-video', 'Music Video Production', 'sm'); ?></div><div class="sc-body"><h4>Music Video Production</h4><p>Visuals that hit different</p></div></div>
      <div class="service-card"><div class="art-panel"><?php render_photo('services/corporate-content', 'Corporate Content', 'sm'); ?></div><div class="sc-body"><h4>Corporate Content</h4><p>Professional. Powerful.</p></div></div>
      <div class="service-card"><div class="art-panel"><?php render_photo('services/exhibitions', 'Exhibitions', 'sm'); ?></div><div class="sc-body"><h4>Exhibitions</h4><p>Art that speaks</p></div></div>
    </div>
    <div class="center-link"><a href="<?php echo SITE_URL; ?>/services/">View All Services →</a></div>
  </div>
</section>

<!-- ============ ABOUT VERVE ============ -->
<section class="section-alt">
  <div class="wrap about-grid">
    <div class="art-panel reveal"><?php render_photo('about-hero', 'Verve Creative Studio — our craft', 'large'); ?></div>
    <div class="about-copy reveal">
      <p class="eyebrow">Who We Are</p>
      <h2>A Studio Built On Craft, Not Trend.</h2>
      <div class="gold-underline" style="margin-bottom:24px;"></div>
      <p>Verve Creative Studio was founded on a simple belief: that every brand, couple, and artist has a story worth telling with precision and soul. What began as a photography practice has grown into a full creative house — spanning film, artwork, and exhibition curation.</p>
      <p>Every project moves through the same discipline: listen first, design intentionally, deliver without compromise.</p>
      <div class="stat-row">
        <div><div class="num">8+</div><div class="label">Years Active</div></div>
        <div><div class="num">250+</div><div class="label">Projects Delivered</div></div>
        <div><div class="num">12</div><div class="label">Countries Served</div></div>
      </div>
      <a href="<?php echo SITE_URL; ?>/about" class="btn btn-outline">Discover Our Story</a>
    </div>
  </div>
</section>

<!-- ============ FEATURED PROJECTS ============ -->
<section>
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Selected Work</p>
      <h2>Featured Projects</h2>
      <p>A curated look at recent films, campaigns, and artwork commissions.</p>
    </div>
    <div class="proj-grid reveal">
      <div class="proj-card">
        <div style="position:relative;"><span class="proj-tag">Film</span><div class="art-panel"><?php render_photo('services/film-production', 'Midnight Provisions — Film', 'sm'); ?></div></div>
        <div class="proj-body"><h4>Midnight Provisions</h4><p>Brand film for a Lagos hospitality group</p><span class="view">View Project →</span></div>
      </div>
      <div class="proj-card">
        <div style="position:relative;"><span class="proj-tag">Wedding</span><div class="art-panel"><?php render_photo('services/wedding', 'Amara & Dele — Wedding', 'sm'); ?></div></div>
        <div class="proj-body"><h4>Amara &amp; Dele</h4><p>Destination wedding film &amp; photography</p><span class="view">View Project →</span></div>
      </div>
      <div class="proj-card">
        <div style="position:relative;"><span class="proj-tag">Artwork</span><div class="art-panel"><?php render_photo('services/artwork-commission', 'Fragments of Self — Artwork', 'sm'); ?></div></div>
        <div class="proj-body"><h4>Fragments of Self</h4><p>Commissioned portrait series</p><span class="view">View Project →</span></div>
      </div>
      <div class="proj-card">
        <div style="position:relative;"><span class="proj-tag">Exhibition</span><div class="art-panel"><?php render_photo('services/exhibitions', 'Colour As Memory — Exhibition', 'sm'); ?></div></div>
        <div class="proj-body"><h4>Colour As Memory</h4><p>Group exhibition, curated &amp; produced</p><span class="view">View Project →</span></div>
      </div>
    </div>
    <div class="center-link"><a href="<?php echo SITE_URL; ?>/portfolio/">View Full Portfolio →</a></div>
  </div>
</section>

<!-- ============ WHY CHOOSE VERVE ============ -->
<section class="section-alt">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">The Verve Difference</p>
      <h2>Why Choose Verve</h2>
    </div>
    <div class="why-grid reveal">
      <div class="why-item"><div class="why-icon">◎</div><div><h4>Bespoke Creative Direction</h4><p>No templates — every brief gets a concept built specifically for it.</p></div></div>
      <div class="why-item"><div class="why-icon">✦</div><div><h4>Cinematic Craftsmanship</h4><p>Editorial-grade visual standards across every medium we work in.</p></div></div>
      <div class="why-item"><div class="why-icon">◆</div><div><h4>End-to-End Production</h4><p>From concept and shoot day to final delivery, handled in-house.</p></div></div>
      <div class="why-item"><div class="why-icon">✧</div><div><h4>International Reach</h4><p>Trusted by clients across Nigeria, the UK, and the diaspora.</p></div></div>
      <div class="why-item"><div class="why-icon">★</div><div><h4>Dedicated Client Experience</h4><p>A single point of contact from first enquiry to final handover.</p></div></div>
      <div class="why-item"><div class="why-icon">◈</div><div><h4>Recognised Craft</h4><p>Award-acknowledged work across film, photography, and art.</p></div></div>
    </div>
  </div>
</section>

<!-- ============ MEET THE FOUNDER ============ -->
<section>
  <div class="wrap founder-grid">
    <div class="reveal">
      <div class="founder-frame"><span>Founder<br>Portrait</span></div>
    </div>
    <div class="founder-copy reveal">
      <p class="role">The Vision Behind Verve</p>
      <h3>Meet Tosin Iwayemi</h3>
      <p>Founder &amp; Creative Director of Verve Creative Studio, Tosin's practice spans film, photography, and fine art — built on a belief that craft and commercial work are not opposites.</p>
      <blockquote>"We don't just document moments — we compose them."</blockquote>
      <p>Under Tosin's direction, Verve has grown from a single-discipline studio into a multidisciplinary creative house serving clients across the UK and Nigeria.</p>
      <a href="/about#founder" class="btn btn-outline">Read Full Bio</a>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section-alt">
  <div class="wrap">
    <div class="section-head center reveal" style="max-width:600px;">
      <p class="eyebrow">What Our Clients Say</p>
      <h2>Client Testimonials</h2>
    </div>
    <div class="test-grid reveal">
      <div class="test-card">
        <div class="quote-mark">"</div>
        <p class="text">Verve captured our wedding day exactly as it felt, not just how it looked. Every frame is something we'll treasure.</p>
        <div class="test-person"><div class="test-avatar"></div><div><div class="n">Amara O.</div><div class="r">Client, Wedding Film</div></div></div>
      </div>
      <div class="test-card">
        <div class="quote-mark">"</div>
        <p class="text">Professional from the first call to final delivery. Our brand film has genuinely changed how clients perceive us.</p>
        <div class="test-person"><div class="test-avatar"></div><div><div class="n">David K.</div><div class="r">Marketing Director</div></div></div>
      </div>
      <div class="test-card">
        <div class="quote-mark">"</div>
        <p class="text">The exhibition they curated for us sold out its opening night. Verve understands art as much as they understand production.</p>
        <div class="test-person"><div class="test-avatar"></div><div><div class="n">Ifeoma A.</div><div class="r">Gallery Owner</div></div></div>
      </div>
    </div>
    <p style="text-align:center;margin-top:22px;font-size:11.5px;color:var(--muted-dim);letter-spacing:.08em;">Sample quotes shown for design review — to be replaced with real client testimonials.</p>
  </div>
</section>

<!-- ============ BRANDS ============ -->
<section>
  <div class="wrap">
    <div class="section-head center reveal" style="max-width:600px;">
      <p class="eyebrow">Trusted By</p>
      <h2>Brands We've Worked With</h2>
    </div>
    <div class="brand-strip reveal">
      <div class="brand-box">Brand 01</div>
      <div class="brand-box">Brand 02</div>
      <div class="brand-box">Brand 03</div>
      <div class="brand-box">Brand 04</div>
      <div class="brand-box">Brand 05</div>
      <div class="brand-box">Brand 06</div>
    </div>
  </div>
</section>

<!-- ============ JOURNAL ============ -->
<section class="section-alt">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">From The Journal</p>
      <h2>Latest Insights &amp; Stories</h2>
    </div>
    <div class="journal-grid reveal">
      <div class="journal-card">
        <div class="art-panel"><?php render_photo('services/wedding', 'Journal article image', 'sm'); ?></div>
        <div class="journal-meta"><span>Wedding</span><span class="date">June 2026</span></div>
        <h4>Planning Your Wedding Film Timeline</h4>
        <p>What to schedule, and when, for coverage you'll actually love.</p>
      </div>
      <div class="journal-card">
        <div class="art-panel"><?php render_photo('services/exhibitions', 'Journal article image', 'sm'); ?></div>
        <div class="journal-meta"><span>Art</span><span class="date">May 2026</span></div>
        <h4>Inside Our Latest Exhibition Build</h4>
        <p>A behind-the-scenes look at curating "Colour As Memory."</p>
      </div>
      <div class="journal-card">
        <div class="art-panel"><?php render_photo('services/brand-content', 'Journal article image', 'sm'); ?></div>
        <div class="journal-meta"><span>Corporate</span><span class="date">May 2026</span></div>
        <h4>Why Brand Films Outperform Ads</h4>
        <p>Lessons from three recent corporate content projects.</p>
      </div>
    </div>
    <div class="center-link"><a href="<?php echo SITE_URL; ?>/journal/">Visit the Journal →</a></div>
  </div>
</section>

<!-- ============ BOOK A PROJECT CTA ============ -->
<section class="cta-band">
  <div class="wrap">
    <p class="eyebrow" style="justify-content:center;"><span style="display:none;"></span>Ready To Create Something Timeless?</p>
    <h2>Let's Bring Your Vision to Life.</h2>
    <p>Whether it's a wedding, a brand film, or a gallery exhibition — tell us what you're building, and we'll shape it with you.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project →</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>


<?php require __DIR__ . '/includes/footer.php'; ?>
