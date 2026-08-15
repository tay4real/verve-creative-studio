<?php
/**
 * Page: About
 * Status: BUILT by Claude per client authorization — no design was sent for this page;
 * built following the established Home/Services visual pattern. Copy is CONFIRMED
 * (client-provided, all 9 sections: Hero, Our Story, Founder Profile, Mission, Vision,
 * Core Values, Creative Philosophy, Our Process, Studio Culture).
 * Flagged inference: hero CTA buttons ("View Our Work" / "Book a Project") are not from the
 * supplied copy — added for pattern consistency with Home/Services hero sections.
 */
$page_title = 'About Us | Verve Creative Studio';
$meta_description = 'We create stories that live beyond the screen. Learn about Verve Creative Studio, our founder, mission, and creative philosophy.';
$current_page = 'about';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/image-helpers.php';

$core_values = [
    ['icon' => '&#10024;', 'title' => 'Creativity', 'desc' => 'We believe creativity has the power to change perspectives, inspire action and tell stories that matter.'],
    ['icon' => '&#9670;',  'title' => 'Excellence', 'desc' => 'Every project receives meticulous attention to detail, ensuring exceptional quality from concept to completion.'],
    ['icon' => '&#9825;',  'title' => 'Authenticity', 'desc' => 'We value genuine storytelling that reflects real emotions, cultures and experiences.'],
    ['icon' => '&#9889;',  'title' => 'Innovation', 'desc' => 'We embrace emerging technologies, creative techniques and fresh ideas to deliver meaningful visual experiences.'],
    ['icon' => '&#128274;', 'title' => 'Integrity', 'desc' => 'Trust, professionalism and transparency are at the heart of every client relationship.'],
    ['icon' => '&#129309;', 'title' => 'Collaboration', 'desc' => 'Great creative work is built through partnership. We work closely with every client to bring their vision to life.'],
];

$process_steps = [
    ['num' => '01', 'title' => 'Discover', 'desc' => 'We begin by understanding your story, goals and creative vision. Every successful project starts with listening.'],
    ['num' => '02', 'title' => 'Develop', 'desc' => 'Our creative team transforms ideas into a clear strategy, developing concepts, mood boards, storyboards and production plans.'],
    ['num' => '03', 'title' => 'Create', 'desc' => 'Using industry-standard equipment, artistic expertise and cinematic techniques, we bring your vision to life with precision and creativity.'],
    ['num' => '04', 'title' => 'Refine', 'desc' => 'Every detail is carefully edited, colour graded and refined to ensure exceptional quality and consistency.'],
    ['num' => '05', 'title' => 'Deliver', 'desc' => 'The final work is delivered with professionalism, ready to inspire audiences, preserve memories and achieve your creative objectives.'],
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <span>About</span></div>
</div>

<!-- ============ HERO ============ -->
<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">About Verve Creative Studio</p>
      <h1>We Create Stories That<br>Live <span class="gold-word">Beyond the Screen.</span></h1>
      <div class="gold-underline"></div>
      <p class="wizard-tagline" style="margin:18px 0 14px;">Where Art Meets Motion.</p>
      <p class="lead">At Verve Creative Studio, creativity is more than a profession, it's our language. We believe every project deserves to be crafted with purpose, emotion, and excellence. Whether producing cinematic films, capturing unforgettable moments through photography, creating original artworks, or curating immersive exhibitions, our goal is simple: to transform ideas into timeless visual experiences.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-solid">View Our Work</a>
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-outline">Book a Project</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('about-hero', 'Verve Creative Studio', 'large', true); ?></div>
  </div>
</section>

<!-- ============ OUR STORY ============ -->
<section>
  <div class="wrap" style="max-width:800px;">
    <p class="eyebrow">Our Story</p>
    <p style="color:var(--muted);font-size:15.5px;margin-bottom:18px;">Verve Creative Studio was founded with a vision to redefine creative storytelling by bringing together the worlds of cinema, photography, visual art, and creative direction under one creative house.</p>
    <p style="color:var(--muted);font-size:15.5px;margin-bottom:18px;">What began as a passion for filmmaking and artistic expression has evolved into a multidisciplinary studio serving individuals, brands, businesses, organisations, and cultural institutions.</p>
    <p style="color:var(--muted);font-size:15.5px;">Our philosophy is rooted in the belief that every story matters. Whether documenting a wedding, producing a commercial campaign, directing a music video, creating a gallery exhibition, or developing a visual identity for a brand, every project is approached with the same level of craftsmanship, creativity, and attention to detail.</p>
    <p class="service-quote">We don't simply produce visuals.<br>We create experiences.<br>We create emotion.<br>We create memories that endure.</p>
  </div>
</section>

<!-- ============ FOUNDER PROFILE ============ -->
<section class="section-alt">
  <div class="wrap founder-grid">
    <div><div class="founder-frame"><span>Founder<br>Portrait</span></div></div>
    <div class="founder-copy">
      <p class="role">Founder Profile</p>
      <h3>Tosin Iwayemi</h3>
      <p style="color:var(--gold-light);font-size:13.5px;letter-spacing:.04em;margin-bottom:16px;">Founder | Creative Director | Cinematographer | Visual Artist</p>
      <p>Verve Creative Studio is led by Tosin Iwayemi, a filmmaker, cinematographer, creative director, event organiser, and internationally exhibiting visual artist whose career spans film production, commercial cinematography, music videos, cultural exhibitions, and artistic creation.</p>
      <p>Tosin holds a Master's degree in Filmmaking from the London Film Academy, where he developed advanced skills in cinematography, directing, visual storytelling, and film production. His creative journey is supported by a background in English Studies, providing a strong foundation in narrative, communication, and storytelling.</p>
      <p>Throughout his career, he has worked across the United Kingdom, Nigeria, and South Africa, directing and photographing films, documentaries, music videos, commercials, cultural events, and art exhibitions. His work reflects a distinctive blend of cinematic storytelling and artistic expression.</p>
      <p>Beyond filmmaking, Tosin is an active visual artist whose work has been exhibited internationally, including exhibitions in the United Kingdom, France, and the United States. He has also organised cultural programmes, art exhibitions, and community creative events, demonstrating his commitment to using art as a tool for education, cultural preservation, and social connection.</p>
      <p>As Creative Director of Verve Creative Studio, he oversees every project from concept development through final delivery, ensuring each production meets the studio's commitment to excellence, originality, and lasting impact.</p>
    </div>
  </div>
</section>

<!-- ============ MISSION & VISION ============ -->
<section>
  <div class="wrap mission-vision-grid">
    <div class="mv-card">
      <p class="eyebrow">Our Mission</p>
      <p>To inspire, connect and transform through exceptional visual storytelling by producing cinematic films, compelling photography, original artworks, and immersive creative experiences that leave a lasting impression.</p>
    </div>
    <div class="mv-card">
      <p class="eyebrow">Our Vision</p>
      <p>To become one of the world's leading multidisciplinary creative studios, recognised for producing award-winning films, internationally acclaimed artwork, and innovative visual experiences that influence culture, inspire creativity, and connect people across borders.</p>
    </div>
  </div>
</section>

<!-- ============ CORE VALUES ============ -->
<section class="section-alt">
  <div class="wrap">
    <div class="section-head">
      <p class="eyebrow">What Drives Us</p>
      <h2>Our Core Values</h2>
    </div>
    <div class="why-grid">
      <?php foreach ($core_values as $v): ?>
      <div class="why-item">
        <div class="why-icon"><?php echo $v['icon']; ?></div>
        <div><h4><?php echo htmlspecialchars($v['title']); ?></h4><p><?php echo htmlspecialchars($v['desc']); ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CREATIVE PHILOSOPHY ============ -->
<section>
  <div class="wrap" style="max-width:800px;">
    <p class="eyebrow">Our Creative Philosophy</p>
    <p style="color:var(--muted);font-size:15.5px;margin-bottom:20px;">At Verve Creative Studio, we believe every frame should have purpose.</p>
    <div class="philosophy-lines">
      <p>Every photograph should tell a story.</p>
      <p>Every artwork should evoke emotion.</p>
      <p>Every film should leave a lasting memory.</p>
    </div>
    <p style="color:var(--muted);font-size:15.5px;margin-bottom:18px;">Our creative process combines artistic imagination with technical precision to produce work that is visually striking, emotionally engaging and professionally executed.</p>
    <p style="color:var(--muted);font-size:15.5px;margin-bottom:18px;">Rather than following trends, we focus on creating timeless work that remains relevant for years to come.</p>
    <p style="color:var(--muted);font-size:15.5px;">This philosophy guides everything we produce from wedding films and commercial campaigns to gallery exhibitions and creative installations.</p>
  </div>
</section>

<!-- ============ OUR PROCESS ============ -->
<section class="section-alt">
  <div class="wrap">
    <div class="section-head">
      <p class="eyebrow">How We Work</p>
      <h2>Our Process</h2>
    </div>
    <div class="process-steps">
      <?php foreach ($process_steps as $step): ?>
      <div class="process-step">
        <div class="process-num"><?php echo $step['num']; ?></div>
        <h4><?php echo htmlspecialchars($step['title']); ?></h4>
        <p><?php echo htmlspecialchars($step['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ STUDIO CULTURE ============ -->
<section>
  <div class="wrap about-grid">
    <div class="about-copy">
      <p class="eyebrow">Studio Culture</p>
      <p style="color:var(--muted);font-size:15.5px;margin-bottom:18px;">Verve Creative Studio is built on curiosity, collaboration and continuous growth. We believe creativity flourishes when artists, filmmakers, photographers, designers and clients work together with mutual respect and shared purpose.</p>
      <p style="color:var(--muted);font-size:15.5px;margin-bottom:18px;">Our studio encourages experimentation, embraces diverse perspectives and celebrates originality. Every project is an opportunity to push creative boundaries while maintaining the highest standards of professionalism and craftsmanship.</p>
      <p style="color:var(--muted);font-size:15.5px;">Whether we're filming a wedding, directing a commercial, creating a gallery exhibition or producing a documentary, we approach every assignment with the same passion, dedication and commitment to excellence.</p>
    </div>
    <div class="art-panel" style="aspect-ratio:4/5;"><span>Studio Culture &mdash; Placeholder</span></div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="cta-band">
  <div class="wrap">
    <h2>Let's Create Something Timeless Together.</h2>
    <p>Whatever your story is, we're ready to help you tell it.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
