# Tandoori Junction — page architecture

Current2026-10-18. Five local pages only. Laravel12/Blade/Tailwind/Alpine. No React, database, admin, booking, ordering or external service integration. The user replaced the dark editorial direction with the simple light/red design in DESIGN.md.

## Routes and rendering

- `/` short, photo-led homepage.
- `/menu` server-renders one complete source group at a time. `?category=<slug>` selects a group; native GET links provide shareable/back-button category navigation. An invalid/missing slug falls back to the first original group. All source menu data stays in JSON and remains available across the twelve selected states.
- `/our-story`, `/catering`, `/visit-us` concise factual pages.
- `/preview/client-study` redirects to `/`; `/menu-proof` serves the original private proof only in local/testing; `/booking` and `/order-online` are not implemented.
- Pages remain noindex pending production verification. No hours are invented; Visit says to call to confirm current hours.

`App\\Support\\MenuRepository` reads `website/resources/data/menu.json`. It preserves source IDs, names, descriptions, original category headings, printed price strings, variants and review notes. All169 printed records, 18 leaf headings and 12 navigation groups remain present. Likely repeated biryani listings are retained. Photos open each matching category section; no individual dish photo is implied unless the source supports that mapping.

`config/restaurant.php` holds the printed phone/address and an address-based Google directions URL. Public details are shown as menu-proof values with a call-to-confirm note; the map link is not a verified location pin. No personal data is collected.

## Assets and frontend

The site uses a familiar local system sans-serif stack, white canvas, red accents, the original TJ logo and sRGB/WebP images. Responsive photo variants are lazy-loaded below the fold; the hero is eager. Every category image is extracted from the original menu PDF, with exact page/hash/crop provenance in `docs/content/PAGE-ASSETS.json` and source JPEGs retained under `context/originals/`. The existing spread photo retains its separate user authorization in `docs/content/USED-ASSETS.json`. No Unsplash, generated food or King Tandoori image is used in the active menu.

Alpine is used only for the small-screen site navigation disclosure and Escape handling. A dynamically imported GSAP/ScrollTrigger module runs only on the homepage, animating the hero and food photography when reduced motion is not requested. The initial HTML remains visible; the module is progressive enhancement. Menu category choices are ordinary server-rendered links and work without JavaScript.

## Verification boundary

Feature coverage should confirm all five routes, all169 source entries, photos for all12 groups, no search UI, printed variants/ambiguity handling, absent booking/order routes and local-only PDF proof. Browser review covers current requested desktop/mobile sizes and category navigation. See `docs/reviews/COMPLETION-REVIEW.md` for the exact checks performed and limitations.

Future Filament/database work requires a separate scope request and operational workflow. Production requires current menu price/contact verification, image rights confirmation, hosting/security review, and an explicit publication request.
