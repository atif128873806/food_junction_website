# Handoff — 2026-10-20 redesign

The active project remains Tandoori Junction at this root; Laravel is in `website/`. On 2026-10-20 the user requested an in-depth analysis and a full professional, animated redesign using Impeccable because the previous site felt dated and AI-generated. The redesign was implemented across Home, Menu, Our Story, Catering and Visit. It keeps the accepted white/red system-sans identity, original TJ logo and PDF food photography, menu taxonomy and 169 printed entries/18 leaves/12 groups, source prices and ambiguities, and pages-only scope. No external assets, booking, ordering, admin, database work or deployment were added.

## Implementation

- Home has a large typographic welcome, a full-width PDF tandoori photo, three linked menu photos, service links and a red visit invitation.
- Inner pages use broad headline/photo/action compositions; Visit has a clear address/call layout. Menu keeps native category navigation and one complete source-backed group at a time.
- `website/resources/css/app.css` adds the shared new visual system; `website/resources/js/home-motion.js` adds a focal hero photograph reveal and modest scroll entrances. `app.js` loads motion on pages with `data-motion-page`, skipping reduced-motion users. Content is visible without JS.
- `DESIGN.md`, `DECISIONS.md`, and `TASKS.md` record this revision. Old screenshots and review documents are historical evidence of the prior design.

## Checks and limits

`npm run build` passed. `php artisan test` passed: 10 tests, 501 assertions, including menu completeness and page routes. The local Laravel server could start, but the provided computer-use browser inventory had no browsers or apps, so fresh visual screenshots, responsive layout inspection, keyboard checks and console checks could not be performed in this session. Do not label the historical `refinement-*` images as screenshots of this redesign. No Git repository is available here.

Before production, the owner must verify current printed prices, portions/options, contact, hours and photo rights. The proof route remains local/testing-only; all pages remain noindex pending launch. Next useful action is a bounded desktop/mobile browser review of the new design, then fix any material layout issues found.
