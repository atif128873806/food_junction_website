# Tasks — current through 2026-10-23

Latest authority: the light white/red five-page site remains pages only, with a photo-led PDF menu without search and no booking, admin or ordering feature. The user subsequently authorized deployment to the shared Hostinger VPS; see the 2026-10-23 section below. Content verification remains open before search indexing.

- [x] Inspect all12 source PDF pages and supplied two-folder assets; retain originals/provenance.
- [x] Manually audit169 printed entries and18 original leaf headings; preserve ambiguities/duplicates.
- [x] Study original references and client-selected King Tandoori/Malai; document original adaptation.
- [x] Replace dark immersive A with the user's light white/red/system-sans direction; shorten homepage to food, menu, services and visit.
- [x] Remove search and render one complete selected category at a time with its matching original PDF banner; retain all 169 records, 12 groups, 18 leaves, prices, variants and review notes.
- [x] Expand the homepage with a full-width PDF food hero, a white text panel and restrained reduced-motion-aware GSAP food imagery motion.
- [x] Simplify category switching with a compact expandable menu index and shareable category URLs; verify switching at 390px.
- [x] Apply the simple light direction across Homepage, Menu, Our Story, Catering and Visit Us.
- [x] Review desktop home at 1440×900 and mobile home/menu at 390×844; current screenshot evidence saved.
- [x] Build and 10 PHP tests/501 assertions pass. PDF photo hashes/crops recorded.
- [x] Record scope/decisions/handoff/setup instructions.
- [ ] Before production: verify prices/options/contact/photo ownership; confirm hosting and publication request; broader accessibility/performance/browser validation.
- [ ] Future separately requested work: Filament/admin editing and MySQL/PostgreSQL; integrations only after requirements confirmed. Explicitly outside latest pages-only delivery.

## 2026-10-20 redesign

- [x] Analyze the existing five-page site, source menu, supplied assets, design history, and prior screenshots.
- [x] Rebuild Home, Menu, Our Story, Catering, and Visit compositions within the approved brand and content boundaries.
- [x] Add page motion with a focal home image reveal, section entrances, interaction feedback, and reduced-motion fallback.
- [x] Run `npm run build` and `php artisan test` from `website/` (10 tests, 501 assertions).
- [ ] Capture and inspect fresh 1440px and 390px screenshots and check keyboard/menu interactions when a browser surface is available. The current tool session reports no browser surfaces.
- [ ] Before public launch, obtain owner verification of printed prices, portions, contact, hours, and photo rights.

## 2026-10-21 menu polish

- [x] Replace the hidden category disclosure with a visible 12-section index on desktop and a horizontal, sticky category rail on mobile.
- [x] Add current-category state, source-entry counts, in-category jump links, and previous/next category links.
- [x] Restyle dish rows into a single reading column with aligned printed prices and clearer source notes; keep all 169 printed entries, 18 leaves and 12 groups.
- [x] Polish the shared menu CTA in the site header and remove unnecessary menu-page motion loading.
- [x] Run Impeccable mechanical detector, fix its two layout-transition warnings, build assets, and pass 11 tests/512 assertions.
- [ ] Review the new menu at wide, medium and narrow browser viewports and check keyboard/horizontal rail behavior when a browser surface is available. None was exposed by the current computer-use inventory.

## 2026-10-22 homepage polish

- [x] Review homepage layout, existing GSAP sequence and original food image proportions.
- [x] Replace cropped photo cards with a panoramic, keyboard-responsive menu window and mobile image rows.
- [x] Refine the hero to one coordinated photo/copy entrance and limit later reveals to meaningful content groups.
- [x] Keep menu links and default photography usable without JavaScript; honor reduced motion.
- [x] Run Impeccable detector, `npm run build` and `php artisan test`.
- [ ] Capture fresh desktop/mobile homepage screenshots and inspect hover/focus/touch in a browser when a browser surface is available.

## 2026-10-23 Hostinger deployment

- [x] Inventory the shared VPS, existing Nginx hosts and PHP handlers; record representative site health before changes.
- [x] Build the current worktree and run Laravel tests locally (11 tests, 516 assertions).
- [x] Install isolated PHP 8.5.12 FPM/CLI and required extensions; preserve the PHP 8.4 system CLI selection and existing 8.3/8.4 FPM services.
- [x] Deploy a secret-free release under a dedicated system user; generate a private production key and install locked Composer packages.
- [x] Activate only a loopback-bound staging host; verify all five pages, compiled assets, production 404 for `/menu-proof`, and noindex/robots behavior. Confirm representative other sites remain HTTP 200.
- [x] Audit the deployed production Composer lockfile (no advisories reported).
- [x] Verify DNS for `tandoorijunctionmarkham.ca` and `www`, issue a TLS certificate, enable only the new HTTPS virtual host, and redirect HTTP/`www` to the canonical domain.
- [x] Check all five public routes, menu category, assets, noindex, proof 404, TLS, and representative existing-site health after cutover.
- [ ] Owner verification of printed prices/options/contact and supplied photo/logo rights before lifting noindex and announcing public launch.
- [ ] Browser visual and interaction review at desktop and mobile sizes when a browser surface is available.

## 2026-10-23 homepage simplification and release

- [x] Remove homepage eyebrow labels and the decorative opening line; replace the unlabeled round hero action with a clear menu action.
- [x] Refine headline scale/spacing, move preview category context below titles, and keep service descriptions visible on mobile.
- [x] Run `npm run build`, `php artisan test` (11 tests, 516 assertions), and `git diff --check` from the current worktree.
- [x] Deploy isolated release `20261023-home-polish-1`, verify the homepage, all five page routes, new CSS asset, proof 404, noindex, and four representative neighboring sites.
- [ ] Inspect live desktop and mobile presentation and keyboard/touch behavior when a browser surface is available; computer-use reported no browser or app surface this turn.
