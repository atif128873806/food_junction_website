# Design — Tandoori Junction

## Current direction (2026-10-20)

The user requested a complete professional redesign because the previous light site felt dated and AI-generated. Keep the accepted product facts and brand boundaries: original Tandoori Junction logo, white/red identity, familiar system sans-serif, supplied PDF food photos, five pages, one menu category at a time, all printed entries, and no invented operating claims or integrations.

The new visual direction takes cues from a printed restaurant menu: warm off-white paper, broad red fields at key actions, large direct headlines, fine dividers, and food photographs used at meaningful scale. The hierarchy is intentionally more expressive than the superseded 2026-10-18 site. Home opens with a strong typographic welcome followed by the full-width Tandoori category photo, then an introduction, three linked food studies, service rows, and a visit invitation. The information pages use shared large page titles, photo bands, and a focused action. Menu retains the complete source-backed category and item structure, with a clearer opening and category control.

Motion supports this composition: a home hero sequence reveals the headline and food photograph; scroll entrances guide attention through major sections; image movement is restrained; links and service rows give immediate feedback. GSAP loads only on these pages and is skipped for reduced-motion preference. Content remains visible if JavaScript fails. Avoid loops, animation that delays browsing, gradients, stock food, decorative icons, fabricated reviews or restaurant history.

### Visual tokens

| Token | Value | Use |
| --- | --- | --- |
| paper | `#FAF8F5` | Main canvas |
| text | `#201B18` | Headings and body text |
| red | `#A52D25` | Primary actions, links, endcap |
| pale surfaces | `#EEE7DF`, `#E8DFD5` | Visit information |
| border | `#DDD5CD` | Section and menu rules |
| muted text | `#625A54` | Secondary explanatory text |

Use fluid spacing and a maximum 1340px content width with 40px desktop and 18px mobile page gutters. Food photos retain source association; category banners remain uncropped in the Menu. Headings are prominent, while dish text and prices stay readable. The user-approved system sans-serif remains the interface and display family. Keep focus styles visible, controls keyboard usable, and content available before motion runs.

## Evidence and limitations

The King Tandoori reference was studied on 2026-10-18 at https://kingtandoori.ca/ and https://kingtandoori.ca/menu/. Its red-on-white header, food-first hero, category shortcuts, and photographed menu entries informed hierarchy only. Its logo, copy, photos, locations, ordering and other features are excluded. See `docs/research/CLIENT-REFERENCES.md`.

Use the original user-supplied PDF and its verified embedded food photos. Asset sources and crops are recorded in `docs/content/PAGE-ASSETS.json`. No Unsplash, competitor photographs, or generated food are used. Print prices and public details remain source-proof content and require owner verification before public production. No hours, bookings, online ordering, reviews, awards, staff biographies, or unsupported dietary labels are implied.

## Implementation status

Homepage and all four inner pages now follow this direction. Current state and checks are in `memory/HANDOFF.md` and `docs/reviews/COMPLETION-REVIEW.md`.
