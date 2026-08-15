<?php
/**
 * Single source of truth for sitemap.xml.
 *
 * Add a row here for every page as it moves through the Master Checklist. Keep 'live' => false
 * until a page is actually DESIGN APPROVED and built — sitemap.xml only outputs live => true
 * routes, so a blocked/stub page never gets submitted to search engines by accident.
 *
 * priority: 1.0 highest (home) down to 0.1. changefreq: how often the page's content changes.
 */
return [
    ['path' => '/',                         'priority' => '1.0', 'changefreq' => 'weekly',  'live' => true],
    ['path' => '/about',                    'priority' => '0.9', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/',                'priority' => '0.9', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/film-production',              'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/wedding-film-photography',      'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/photography',                   'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/corporate-content',              'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/music-video-production',         'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/artwork-commission',              'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/creative-direction',              'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/brand-content-creation',           'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/services/training-consultation',            'priority' => '0.7', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/portfolio/',               'priority' => '0.8', 'changefreq' => 'weekly',  'live' => false],
    ['path' => '/exhibitions/',             'priority' => '0.8', 'changefreq' => 'weekly',  'live' => false],
    ['path' => '/exhibitions/current',      'priority' => '0.7', 'changefreq' => 'weekly',  'live' => false],
    ['path' => '/exhibitions/past',         'priority' => '0.5', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/exhibitions/upcoming',     'priority' => '0.7', 'changefreq' => 'weekly',  'live' => false],
    ['path' => '/gallery/',                 'priority' => '0.7', 'changefreq' => 'weekly',  'live' => false],
    ['path' => '/shop/',                    'priority' => '0.7', 'changefreq' => 'weekly',  'live' => false],
    ['path' => '/installations/',           'priority' => '0.6', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/journal/',                 'priority' => '0.6', 'changefreq' => 'weekly',  'live' => false],
    ['path' => '/book/',                    'priority' => '0.8', 'changefreq' => 'monthly', 'live' => false],
    ['path' => '/contact',                  'priority' => '0.6', 'changefreq' => 'yearly',  'live' => false],

    // NOTE: dynamic pages (individual portfolio projects, exhibitions, artworks, journal
    // articles) aren't listed here as static rows — once those DB tables exist, extend
    // sitemap.php to loop through them and append <url> entries the same way.
];
