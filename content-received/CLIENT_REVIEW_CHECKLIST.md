# VERVE CREATIVE STUDIO — CLIENT REVIEW CHECKLIST

Live preview: **https://oblong-viselike-password.ngrok-free.dev/verve-creative-studio**

Walk through each page below in order. For each, there's a "What to confirm" list — these are the specific things I need a yes/no or an answer on, not just a general "does this look good."

---

## 1. Home — `/`
- Does the hero photography/lens graphic placeholder need replacing with real studio photography now, or later?
- Are the trust stats (Premium Quality / Bespoke Service / Creative Passion / Award Winning) accurate as worded?
- **Founder section** uses Tosin Iwayemi's name and a placeholder quote ("We don't just document moments — we compose them.") — confirm this quote is real or should be replaced/removed.
- Testimonials, brand logos, and journal articles shown are all **placeholder/sample content** — flag that these need real client testimonials, real brand names, and real journal posts before launch.

## 2. About — `/about`
- All copy is exactly what you sent — confirm nothing was misread or mis-transcribed.
- Hero has two buttons ("View Our Work" / "Book a Project") that weren't in your original copy — confirm these are wanted, or should be removed/changed.
- Founder portrait and Studio Culture photo are placeholders — need real images.

## 3. Services Hub — `/services/`
- Confirm the hero text (headline + subheading) as shown, vs. the longer intro paragraph that was originally sent (currently only used for SEO, not shown on-page) — should the longer paragraph appear somewhere visible instead?
- "Art Exhibitions" card currently links to the Exhibitions section rather than its own dedicated service page — confirm that's correct.
- Icons on each service card are simple placeholders, not client-supplied — flag if a specific icon set/brand style exists.

## 4. Individual Service Pages
**Confirmed-copy pages** (just visually verify these read correctly):
- `/services/film-production`
- `/services/wedding-film-photography`
- `/services/photography` (check the 4 tabs: Personal / Event / Commercial / Business)

**Draft-copy pages — these need real review, not just a glance** (headline, intro paragraph, and full service list on each were written by Claude, not supplied by the client):
- `/services/corporate-content`
- `/services/music-video-production`
- `/services/artwork-commission`
- `/services/creative-direction`
- `/services/brand-content-creation`
- `/services/training-consultation` — **also missing:** the real course catalogue referenced in the original brief was never sent; the list shown is generic placeholder categories only.

## 5. Booking Wizard — Wedding Film & Photography (`/book/flow-a/steps/coverage` onward)
- **Step 1 (Coverage)** was already approved — but see the open question below about whether the newly-received "Wedding & Photography booking page" design should replace it.
- **Steps 2–10 were built by Claude with no design supplied**, following the established pattern. Walk through each and confirm or flag issues:
  - Step 2 Duration — are the 5 duration options and their framing right?
  - Step 3 Date — calendar behaviour; note the "unavailable" dates shown are hardcoded demo data, not real availability yet.
  - Step 4 Time — are hourly slots 08:00–18:00 the right range?
  - Step 5 Location — are the venue fields complete? Map is a placeholder (needs a Google Maps API key to go live).
  - Step 6 Add-ons — **confirm or correct these 7 add-ons and their prices** (Drone £150, Livestream £200, Extra Crew £300, Photo Booth £250, Album £180, Same-Day Edit £220, Prints £120 — all placeholder figures).
  - Step 7 About Event — are guest count / schedule / special requests sufficient?
  - Step 8 Upload — confirm the 7 upload categories match what's actually needed.
  - Step 9 Review — **confirm the 30% deposit assumption** — is that the real policy?
  - Step 10 Payment — Stripe isn't connected yet (shows an honest placeholder message) — this needs real Stripe keys before it can charge anyone.
- The booking flow's Terms & Conditions checkbox links to a page that doesn't exist yet — real Terms & Conditions content is needed.

### 🔴 Direct question to ask the client
> "We already built and approved a 'Choose Your Coverage' Step 1 design for Wedding Film & Photography booking. A new design labeled 'Wedding & Photography booking page' has since arrived — **does this replace/redesign the already-approved Step 1, or is it a different page (e.g. a landing page shown before the step-by-step wizard starts)?**"

## 6. New pages about to be built from the designs you just sent
These will be built next, using the newly supplied designs — flagging here so you know what's coming and can sanity-check the mapping:
- `Bookings Home Page` → the "Book a Project" service selector page (currently blocked, 10 service cards)
- `Films booking page` → **confirmed** as the Creative Project Brief form (Flow B) for Film Production and the other non-payment services
- `Trainning & Con. booking page` → the Training & Consultation booking form
- `Exhibition Page` → the Exhibitions landing page
- `Contact page` → the Contact page
- `Film sub portfolio`, `wedding sub portfolio`, `Artworks sub portfolio`, `Portfolio music video page` → 4 of the 9 Portfolio category pages
- `Portfolio Main Page` → the Portfolio Hub — **confirm:** is this the same design shown earlier in this project (which was never saved and never built), or a new/updated version?
- `Company logo` → **confirm:** is this a re-send of the existing logo already live on the site, or a different/updated logo?
- `form.jpg`, `phone.jpg` → appear to be small supporting graphics, likely for the Contact page — confirm their intended use.

---

## How to use this with your client
For each numbered section above, the "What to confirm" bullets are written so you can basically read them out or forward them directly. Anything with 🔴 is a decision point I'm explicitly blocked on — everything else is a nice-to-have confirmation but won't stop forward progress if it takes a while to hear back.
