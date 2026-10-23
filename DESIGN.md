# Design — Tandoori Junction

## Current direction (2026-10-20)

The user requested a complete professional redesign because the previous light site felt dated and AI-generated. Keep the accepted product facts and brand boundaries: original Tandoori Junction logo, white/red identity, familiar system sans-serif, supplied PDF food photos, five pages, one menu category at a time, all printed entries, and no invented operating claims or integrations.

The new visual direction takes cues from a printed restaurant menu: warm off-white paper, broad red fields at key actions, large direct headlines, fine dividers, and food photographs used at meaningful scale. The hierarchy is intentionally more expressive than the superseded 2026-10-18 site. Home opens with a strong typographic welcome followed by the full-width Tandoori category photo, then an introduction, three linked food studies, service rows, and a visit invitation. The information pages use shared large page titles, photo bands, and a focused action. Menu retains the complete source-backed category and item structure, with a clearer opening and category control.

The 2026-10-23 homepage pass removes decorative eyebrow labels, including the opening line, and uses the headline itself as the entry point. The menu action is named, display sizes are more restrained, preview categories read as secondary context below their titles, and mobile service rows retain their descriptions. Inner-page styling remains as implemented.

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

## Homepage menu window — 2026-10-22

The homepage uses the three supplied wide food photographs as a navigable menu preview. At desktop widths, a panoramic image window sits above three direct menu-category links; pointer hover and keyboard focus reveal the corresponding category image with a left-to-right image wipe. At phone widths the links become stacked editorial photo rows, so every category has its own visible image without requiring hover. All links work as normal URLs without JavaScript, with the first image shown by default. The stage images are decorative because the linked category text provides the action name.

The hero is the single authored entrance: its food image is uncovered with a short clip reveal while the copy settles into place. Later motion follows content structure more quietly. Reduced-motion users see immediate images and working previews without spatial transitions. The wide photo window avoids the former square-card crops of category banners and uses no new imagery or restaurant claim.

## Menu reading concept — 2026-10-21

The menu is a digital table of contents beside a reading page. On desktop, all 12 original groups stay visible in a restrained sticky index with source-entry counts and a clear current state. On phones, the same links become a sticky horizontal rail that keeps the selected group in view. Selecting a group uses its shareable `?category=` URL; browser back and forward remain native. Multi-heading groups expose short jump links. The selected group retains its original full-ratio PDF photo and source-backed dishes, displayed in one reading column with prices aligned separately. Previous and next links close the category, so people can continue browsing without returning to the top. This replaces the hidden category disclosure.

Menu copy should be easier to scan than the photographic marketing pages: the title is shorter, the category control appears sooner, and motion is limited to immediate interaction feedback. No search, dish-level photo claims, cart, invented badges, or inferred dietary information.

## Evidence and limitations

The King Tandoori reference was studied on 2026-10-18 at https://kingtandoori.ca/ and https://kingtandoori.ca/menu/. Its red-on-white header, food-first hero, category shortcuts, and photographed menu entries informed hierarchy only. Its logo, copy, photos, locations, ordering and other features are excluded. See `docs/research/CLIENT-REFERENCES.md`.

Use the original user-supplied PDF and its verified embedded food photos. Asset sources and crops are recorded in `docs/content/PAGE-ASSETS.json`. No Unsplash, competitor photographs, or generated food are used. Print prices and public details remain source-proof content and require owner verification before public production. No hours, bookings, online ordering, reviews, awards, staff biographies, or unsupported dietary labels are implied.

## Implementation status

Homepage and all four inner pages now follow this direction. Current state and checks are in `memory/HANDOFF.md` and `docs/reviews/COMPLETION-REVIEW.md`.
