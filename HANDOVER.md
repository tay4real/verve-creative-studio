# VERVE CREATIVE STUDIO — HANDOVER PROMPT

**How to use this document:** Upload this file alongside the latest `verve-creative-studio.zip` at the start of a new session. This document is the authoritative record of *decisions, status, and context*. The zip is the authoritative record of *current local file contents* — but note Section 8 below: **the site is now live in production**, so the zip may occasionally lag behind small hotfixes uploaded directly. If the two ever appear to conflict, flag it to the client rather than silently trusting one over the other.

---

## 0. STANDING OPERATING RULES (do not deviate without explicit client instruction)

1. **Design-first, one page at a time.** No page/flow is built until BOTH a confirmed visual design and confirmed written copy exist for that specific item — UNLESS the client has explicitly authorized building without one (see Section 4, "Client-Authorized Exceptions"). If a design is missing and no such authorization exists, stop and ask; do not invent layout or guess.
2. **Report inferences.** Any assumption made when building (currency, pricing, placeholder copy, icon choice, routing decisions, image assignment, etc.) must be explicitly flagged to the client, not buried.
3. **Code changes as snippets + instructions.** When editing existing files in response to a specific request, show the exact snippet and file path/find/replace instructions so the client can understand and apply changes themselves. Exception: large coordinated structural changes spanning multiple files are delivered as a full project zip instead, with a plain-language explanation of what changed and why.
4. **No unprompted decisions.** Do not change established architecture, conventions, pricing, copy, or scope beyond what the client has approved or explicitly authorized, even if it seems like an improvement. If something seems wrong or worth revisiting, flag it as a question, don't just change it. (A real near-miss: an agent once almost repurposed the shared `.hero`/`.hero-grid` classes for a Home-page-only redesign, which would have broken every other page's hero. Caught before shipping — always check whether a class/include is shared before changing it.)
5. **After every build, ask whether to produce a handover prompt.** Do not build one unprompted — ask first. If approved, update this document to reflect the new state and produce a fresh copy. This is a standing instruction and must be preserved in every future version of this document.
6. **Packaging has two modes now that the site is live** — see Section 8. Small fixes get uploaded directly via FTP to the small number of changed files; large/structural changes still get a full project zip. Always tell the client explicitly which mode applies.

---

## 1. PROJECT CONTEXT

- **Agency:** OAS Solutions Ltd, building this site for **Verve Creative Studio**, a multidisciplinary creative house (Film, Photography, Art, Exhibitions), founder **Tosin Iwayemi**, UK-based.
- **🟢 THE SITE IS LIVE IN PRODUCTION** at **https://vervecreativestudio.co.uk/** — hosted on IONOS Web Hosting Plus, domain connected, SSL active, production database connected and confirmed working (verified by successfully advancing through the live booking wizard). This is no longer a local-only or ngrok-preview project.
- **Stack:** Plain PHP, MySQL, JS, CSS — no framework.
- **Local dev environment:** XAMPP, project sits at `htdocs/verve-creative-studio/`, accessed at `http://localhost/verve-creative-studio/`. Local MySQL database name: `verve_local`, user `root`, no password. **`AllowOverride All`** must be set in XAMPP's `httpd.conf` for `.htaccess` to work locally.
- **Remote preview via ngrok** was used *before* production launch — `.htaccess`'s HTTPS-force rule still includes the `X-Forwarded-Proto` bypass for this. Harmless to leave in place even now that production is live; do not remove it as "cleanup."
- **IONOS Web Hosting Plus specs (confirmed from the live account):** PHP is set to **8.4** (higher than the 8.1–8.3 range originally planned around — no issues observed yet across full site testing, but keep this in mind if anything PHP-version-specific ever misbehaves). SSH/SFTP access confirmed via port 22. 2GB DB storage on the current tier (0GB used so far).
- **Production credentials** (also see `includes/config.php`, values already filled in except the DB password which was deliberately never pasted into chat):
  - SFTP: host `access-5019337584.webspace-host.com`, port `22`, protocol SFTP, user `su1261669`
  - Web root on the server: `/public/` — uploads go here, not to the account root
  - Database: host `db5020992554.hosting-data.io`, name `dbs15932815`, user `dbu5654050`, MySQL 8.0
  - Password for both: held by the client only, never shared in chat — if `config.php`'s `DB_PASS` still shows the placeholder `PASTE_IONOS_DB_PASSWORD_HERE`, that's expected; the client fills it in directly on their own copy.

---

## 2. ARCHITECTURE & CONVENTIONS ESTABLISHED SO FAR

**Folder structure:** full site scaffold (100+ files) mirroring the Master Checklist — every planned page has a stub file with a status comment at the top (`BLOCKED`, `TODO`, or `BUILT`). See `README.md` at the project root for the full map.

**`includes/config.php`** — now environment-aware with no manual toggling required:
- `APP_ENV` — **auto-detected** from `$_SERVER['HTTP_HOST']` (`'local'` only when host is literally `localhost`, `'production'` otherwise). This was changed specifically to remove the risk of uploading to production with a stale manual `'local'` setting.
- `SITE_URL`, `SITE_DOMAIN`, and the DB constants all key off `APP_ENV` automatically — local XAMPP and production IONOS values are both defined in the file, switching automatically.
- Stripe keys, SMTP credentials — still `TODO` placeholders, not yet provisioned (see Section 5).

**`includes/header.php` / `includes/footer.php`** — shared site chrome, SEO meta/OG/schema output, mobile drawer nav (deliberately a sibling of `<header>`, not a descendant — `<header>`'s `backdrop-filter` breaks `position:fixed` children if nested inside it).

**Clean URLs** via `.htaccess` — confirmed working in production. `/sitemap.xml` and `/robots.txt` both confirmed live and loading correctly on the real domain.

**⚠️ Session ordering gotcha (still applies):** any page needing `session_start()` (via `includes/booking-session.php`) must require that file **before** `includes/header.php` — `header.php` prints HTML immediately, and PHP can't start a session after output begins.

**Image pipeline:** the client supplied real photography. All images are processed into `assets/images/` as **WebP (primary) + JPEG (fallback), at two sizes each** (`name.webp`/`.jpg` for large/hero use, `name-sm.webp`/`.jpg` for cards/thumbnails). Rendered via a shared helper, `render_photo($basePath, $alt, $size, $eager)` in `includes/image-helpers.php`, which outputs a `<picture>` tag. **Exception:** the Home page hero specifically does NOT use this helper — see below.

**Home hero — CSS background-image technique (client-specified, not the site's general image pattern):** unlike every other image on the site, the Home hero photo is a literal CSS `background-image` on the `.home-hero` section (not a foreground `<img>`), layered with two gradient overlays for text legibility, per the client's own worked example (`example-home-page.zip`, saved for reference). It's currently sized to cover only the right 8/12 (66.67%) of the section width via per-layer `background-size`, with the left third solid dark. All rules are scoped under `.home-hero`/`.home-hero-content` specifically — **do not confuse with the shared `.hero`/`.hero-grid`/`.hero-visual` classes** used by every other page's hero (About, Services, Contact, all 9 service pages) which use the normal boxed/card `render_photo()` treatment. These are two intentionally different systems on the same site.

**Full-screen layout:** `.wrap` (the shared content-width container used sitewide) was widened from a fixed 1320px centered box to `max-width:1900px` with 56px side padding, at the client's explicit request to match a "full screen with margins" reference design rather than a centered layout. This is a **site-wide** change, not scoped to one page.

**Fixed-column option grids:** `.option-grid` normally uses `auto-fill` (column count depends on available width). Where a fixed layout is needed regardless of screen width (e.g. Flow A's Duration step, which needs exactly 2 rows of 3), a modifier class `.option-grid-3col` is added alongside the base class, scoped per-page — do not change the base `.option-grid` globally, since it's shared across many wizard steps with different option counts.

**Flow B — Creative Project Brief:** parameterized single wizard (`book/flow-b/`) serving 6 different services via `?service=slug` (film-production, music-video-production, corporate-content, artwork-commission, creative-direction, brand-content-creation) rather than 6 separate copies. Catalog lives in `flow_b_service_catalog()` inside `includes/booking-session.php`, including each service's matching image slug. 8 steps, vertical left-side step nav (visually distinct from Flow A's horizontal top progress bar — this was intentional, matching the client's own design for Flow B).

**Payment method logos** remain plain text badges, not reproduced brand marks — swap only if the client supplies licensed assets.

**`content-received/` folder** — holds source material so nothing gets lost between sessions again (a real Portfolio Hub design was lost earlier in the project by not saving it; this folder exists specifically to prevent a repeat):
- `content-received/services-copy.md` — confirmed Services copy
- `content-received/designs/` — **all 14 client design reference images** (compressed to ~3.7MB total), covering Portfolio Main, Bookings Home, Films booking (= Flow B spec), Wedding & Photography booking, Training & Consultation booking, Exhibition Page, Contact page, 4 Portfolio sub-category pages (Films/Weddings/Artworks/Music Videos), company logo, plus two small supporting graphics
- `content-received/CLIENT_REVIEW_CHECKLIST.md` — the page-by-page review list built for the client to walk their own client through

---

## 3. MASTER CHECKLIST STATUS (as of last update)

### ✅ Built, Approved, AND LIVE IN PRODUCTION
- **Home** — hero (client's own background-image technique, confined to right 8/12), About Verve section, service cards, Featured Projects, Founder portrait, Journal previews — all now use real client photography.
- **About** — all 9 sections, confirmed copy. **⚠️ Known issue, not yet fixed:** the Founder Portrait and Studio Culture sections are currently showing the wrong images (a painted-artwork asset and a paintbrush asset respectively) — these 3 "ChatGPT Image..." files were later clarified to be components of the Home hero composite, not standalone photos, so these two placements are confirmed wrong and still need real replacement images. Flagged to the client, not yet resolved.
- **Services Hub** — all 10 cards with real photography.
- **All 9 individual Service Detail Pages** — 3 with confirmed copy (Film Production, Wedding Film & Photography, Photography), 6 provisionally-approved draft copy (Corporate Content, Music Video Production, Artwork Commission, Creative Direction, Brand Content Creation, Training & Consultation) — client confirming the draft copy with their own client, treat as stable but not fully final. All 9 have real hero photography.
- **Contact page** — built to the client's supplied design (`content-received/designs/Contact page.jpg`). Form submits to `contact-submit.php`, which honestly confirms receipt without actually emailing anyone (SMTP not yet configured).
- **Booking Wizard — Flow A (Wedding Film & Photography), Steps 1–10 + Confirmation** — fully built and **confirmed working against the live production database**. Step 1 fully approved (5 flags confirmed: 10-step flow, GBP, pricing, phone number, text payment badges). Steps 2–10 built by Claude per client authorization (Section 8's spec), not yet formally reviewed by the client page-by-page, but functionally verified live. Duration step (Step 2) now has 6 options (added "2 Hours") in a fixed 2-row-of-3 layout at the client's request — **this was the first live hotfix deployed directly to production, confirmed working.**
- **Booking Wizard — Flow B (Creative Project Brief)** — fully built, all 8 steps, serving all 6 non-payment services. Step 1 matches the client's supplied design exactly; Steps 2–8 built by Claude using the design's own step-name/description list (client confirmed this design as the Flow B spec).
- **Site-wide infrastructure** — folder structure, header/footer, mobile drawer nav, clean URLs, SEO (sitemap/robots/OG/schema), full-screen layout, image optimization pipeline (WebP+JPEG).
- **Production deployment itself** — domain connected, SSL active, SFTP working, database connected and write-verified.

### 🟡 Built by Claude, not yet formally reviewed
- Flow A Steps 2–10 are functionally verified (advance correctly, write to the DB) but haven't had a formal client walk-through/approval the way Step 1 did.

### ⬜ Still BLOCKED — designs now in hand (`content-received/designs/`), just not yet built
- **Portfolio Hub** — design received and saved (`Portfolio Main Page.jpg`) — client had not yet confirmed proceeding as of last check.
- **Bookings Home** (`/book/` service selector, 10 cards) — design received (`Bookings Home Page.jpg`).
- **Training & Consultation booking form** (`/book/training/`) — design received (`Trainning & Con. booking page.jpg`) — note this is a different, more elaborate design (11 steps, AI-training-course selector) than a simple enrolment form; needs a fresh look before building.
- **Exhibition Page** (`/exhibitions/`) — design received (`Exhibition Page.jpg`).
- **4 Portfolio category pages** (Films, Weddings, Artworks, Music Videos) — designs received.

### ⬜ Still BLOCKED — no design received at all
- Gallery, Shop (listing/product/cart/checkout)
- Installations
- Journal (listing + article template)
- Individual Portfolio project/case-study pages
- Client Dashboard (full account system, confirmed in scope, not yet built or schemed)
- Admin Dashboard (all modules)
- Remaining 5 Portfolio category pages (Corporate, Exhibitions, Creative Campaigns, Photography, Training & Consultation — only 4 of 9 were sent)

---

## 4. CLIENT-AUTHORIZED EXCEPTIONS TO THE DESIGN-FIRST RULE

Standing exceptions to Section 0, Rule 1 — do not extend to other unbuilt pages without the client explicitly saying so again:

1. **Booking Wizard Flow A, Steps 2–10 + Confirmation** — client authorized designing these following the established pattern, using Section 8 of the original brief to determine fields.
2. **Individual Service Detail Pages** — client authorized the visual design for all 9, plus explicitly authorized Claude to draft expanded copy for the 6 services that only had short blurbs available ("use them to draft expanded copy flagged for my review").
3. **About Page** — client authorized the visual design only; all copy was fully supplied by the client.
4. **Booking Wizard Flow B, Steps 2–8** — client confirmed the "Films booking page" design as the answer to Flow B's field spec, and by extension authorized Claude to build the remaining steps (2–8) using that design's own listed step names/descriptions, same pattern as Flow A.

**Note:** Contact page and Flow B Step 1 are NOT exceptions — both were built directly to real client-supplied designs, not inferred.

---

## 5. OPEN ITEMS REQUIRING CLIENT INPUT

1. **Fix the Founder Portrait / Studio Culture images on the About page** — currently showing wrong assets (see Section 3). Needs either real photos, or explicit instruction to revert to placeholder panels.
2. Formally review Flow A Steps 2–10 against expectations (functionally verified working, but not yet walked through page-by-page for approval the way Step 1 was).
3. Supply the real Training & Consultation course catalogue (a more detailed design for this booking flow has since arrived — see Section 3 — may supersede the "just need a catalogue" framing entirely).
4. Confirm or correct placeholder pricing across the booking wizard (Flow A duration/add-on prices, the 30% deposit assumption, Flow B budget bracket amounts).
5. Decide whether/when to build: Portfolio Hub, Bookings Home selector, Exhibition Page, Training & Consultation booking form, and the 4 received Portfolio category pages — designs are ready and waiting in `content-received/designs/`.
6. Provide a Google Maps API key if a real embedded map is wanted on Flow A's Location step (currently a placeholder).
7. **Stripe** — run `composer require stripe/stripe-php` over SSH on the IONOS server, then add real API keys to `includes/config.php`. Code is already written and will activate automatically once both are done — Step 10 currently shows an honest "not connected yet" message.
8. **Email/SMTP** — provide IONOS mailbox SMTP credentials so `includes/mailer.php` can be built out. Booking confirmations and the Contact form currently don't send anything.
9. Provide Terms & Conditions content — several pages link to `/terms`, which doesn't exist yet.
10. Confirm whether real payment-method logo assets exist, or if text badges are fine long-term.
11. Any remaining real photography to replace placeholder panels not yet covered by the images batch already integrated.

---

## 6. TOOLS/SKILLS NOTES FOR THE NEXT AGENT

- No PHP CLI in the sandbox — verify PHP files via `<?php`/`?>` tag balance and brace/parenthesis balance with a quick Python script before packaging.
- `packagist.org` is not in the sandbox's allowed network domains, so `composer require` cannot be run in this environment — the client must run it themselves over SSH on IONOS.
- Image processing (resize/WebP conversion) uses Pillow — confirmed working in-sandbox for both standard formats and alpha-transparent PNGs.
- **The sandbox environment does not persist project files between sessions on its own** — if a new session starts without the working directory present, restore it by extracting the most recently delivered zip from `/mnt/user-data/outputs/` (check there before assuming anything is lost).

---

## 7. DEPLOYMENT — HOW THE CLIENT ACTUALLY PUSHES CHANGES LIVE

The client uploads via **FileZilla** (SFTP), credentials in Section 1. Key facts learned during the actual first deployment:

- The web root is **`/public/`** on the server — not the account root. Confirm this before any future upload; it's easy to upload one level too high.
- FileZilla hides dotfiles by default — **`.htaccess` will silently fail to upload** unless "Force showing hidden files" is enabled first (Server menu, or View menu depending on version). This was caught and confirmed working on the first deploy, but worth re-checking if clean URLs or HTTPS handling ever mysteriously break after an update.
- `/public/uploads/bookings/{session-id}/` folders get created automatically by PHP (`mkdir()` in the upload-handling code) whenever someone reaches a file-upload step in either booking wizard — seeing unfamiliar folders here during a re-sync is expected, not a sign of a problem. FileZilla may report these as "failed" transfers when re-uploading the folder structure, purely because they already exist — this is a harmless, expected message, not a real failure.
- For small, targeted fixes (a few files), the fastest path is telling the client exactly which files changed and having them re-upload just those via FileZilla, overwriting in place — no need to re-upload the whole site. This was done successfully for the Duration-step fix.

## 8. HOW TO PACKAGE AND DELIVER AN UPDATE (updated for live production)

1. Balance-check every touched/new PHP file (tag count, brace count, paren count).
2. **Decide the delivery mode:**
   - **Small/targeted change (a handful of files):** tell the client exactly which files changed and what to do — they re-upload just those via FileZilla directly to `/public/` on the live server, overwriting in place. No zip needed.
   - **Large/structural change (many files, new features):** package the full project zip as before (`zip -r verve-creative-studio.zip verve-creative-studio -x "*.DS_Store"`, copy to `/mnt/user-data/outputs/`, present it) — the client re-syncs their local working copy AND re-uploads the changed files to production via FileZilla.
3. Either way, be explicit about which files need to actually go live via FTP — don't assume the client will infer this from a zip alone now that there's a real production server in the loop.
4. **Ask whether to build/update this handover prompt** — do not do it automatically. If approved, update every section above to reflect the new state.

---

*Last updated: covers full production deployment to IONOS (live at vervecreativestudio.co.uk), Flow B build (all 8 steps), Contact page build, real client photography integrated sitewide, the Home hero's CSS background-image technique, the site-wide full-screen layout change, and the Duration step's "2 Hours" option + fixed 3-column fix (first live hotfix, deployed and confirmed working).*
