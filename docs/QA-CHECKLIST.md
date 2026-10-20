# QA checklist — current light-site delivery

Reviewed 2026-10-18 after the full-width hero and menu-category refinement. This current checklist replaces earlier dark-preview and first-slice gates.

## Completed

- [x] Applied the user's white/red, native system-sans, simpler direction across Home, Menu, Our Story, Catering and Visit Us.
- [x] Used the Tandoori Junction dine-in PDF's food imagery and logo; no competitor or stock imagery is active.
- [x] Kept all 12 original menu groups, 18 leaf headings, 169 entries, descriptions, price variants and source review notes.
- [x] Removed menu search. Verified all 12 category URLs preserve the 169 source entries across 18 leaves; each response shows only its selected group and matching PDF image.
- [x] At mobile width 390px, checked category disclosure and followed a category link; document root measured 375px due the browser's scrollbar gutter, with no horizontal content overflow.
- [x] Reviewed desktop homepage at 1440×900 and mobile homepage/menu at 390×844; captures are in `docs/reviews/refinement-*.jpg`.
- [x] Checked browser console error/warning output on the homepage; none was reported.
- [x] `npm run build` passed.
- [x] `php artisan view:cache` passed.
- [x] `php artisan test` passed: 10 tests, 501 assertions.
- [x] Impeccable deterministic design detector reported no issues.

## Before public production

- [ ] Owner confirms the current menu, prices, options, contact details and opening hours.
- [ ] Owner confirms photo rights and current restaurant authenticity for supplied food imagery.
- [ ] Complete accessibility and cross-browser review; reduced motion/no-JS behavior is implemented but was not separately emulated here.
- [ ] Measure performance under stated conditions; no field metrics are claimed.
- [ ] Confirm hosting, publication and operational support separately; no deployment was performed.

Printed proof values remain explicitly labeled as such on the local menu page. The proof has category banners, not a verified photograph for every item, so images appear with their corresponding menu groups.
