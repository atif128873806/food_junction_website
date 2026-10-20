> CURRENT (SRC-LIGHT-008, 2026-10-18): simple white/red site. Active food imagery comes from the user-supplied Tandoori Junction printed menu only; no Unsplash or competitor-brand photography. Twelve category image derivatives are documented in PAGE-ASSETS.json with exact source page, hash and crop. Older dark/Option A notes below are historical.

# Asset manifest and procurement

The matrix below records historical procurement planning. Active local website images and provenance are documented under the 2026-10-18 update below and in the manifests.

| ID | Asset / provenance | Current status | Intended role | Required action |
| --- | --- | --- | --- | --- |
| SRC-MENU-001 | User PDF; context/originals/Proof_Dine-In_Menu_TJ.pdf | Retained original; internal reference only | Content/brand evidence | Owner approves current text/prices and any public PDF version |
| BRAND-001 | Existing red/yellow flame/cutlery logo, PDF p1 | Visually inspected, not extracted for web | Header/footer | Obtain original SVG/EPS/AI or transparent high-resolution asset, rights and clear-space rules; preserve colors |
| REF-PHOTO-001–012 | Food photography in each PDF page | Reference only; authorship/client identity/license UNKNOWN | Art-direction evidence | Confirm whether actual restaurant food and obtain original rights-cleared files; do not reuse automatically |
| HERO-001 | Actual client tandoor/cooking or tandoori dish | MISSING | Hero; dominant food image | Shoot landscape with dark left negative space plus mobile crop; release rights/person consent as relevant |
| FOOD-001 | Paneer Tikka | MISSING | Vegetarian tandoor study | Actual dish, 3:4 and landscape crops, owner verifies identity |
| FOOD-002 | Chicken Tikka | MISSING | Tandoor study | Actual dish; controlled highlights |
| FOOD-003 | Lamb Chops | MISSING | Tandoor study | Verify actual serving/portion if visible |
| FOOD-004 | Gol Gappe/Dahi Puri | MISSING | Street-food primary image | Actual menu dish; 4:5 / close detail |
| FOOD-005 | Samosa/chaat | MISSING | Street-food companion | Actual food; optional mobile omission |
| FOOD-006 | Breads / lassi detail | MISSING | Menu-index support | Actual item; no decorative floating cutout |
| SERVICE-001 | Real interior/hospitality | MISSING | Intro/dine-in | Actual premises only; no stock interior |
| CATER-001 | Actual catering/table spread | MISSING | Catering invitation | Rights and depiction verified; avoid implying package portions |
| VISIT-001 | Restaurant exterior/entrance | MISSING | Visit recognition | Current premises, daylight and readable signage |
| FONT-001 | Cormorant Garamond candidate | Not downloaded/tested | Display A | Verify source/license, self-host subset, render tests |
| FONT-002 | Manrope candidate | Not downloaded/tested | Body/interface | Verify source/license and numeric legibility |
| FONT-003 | Fraunces candidate | Not downloaded/tested | Display B comparison | Comparison only unless selected |

## Capture guidance

Dark scene with directional warm key light, true food color, crisp char and texture, visible highlights and usable shadows. Do not use heavy desaturation to manufacture luxury. Real utensils/tandoor hands/process if consent obtained; avoid invented staff identity. Retain image backgrounds for editorial photographic crops, no unnecessary cutouts. No fake fire added and represented as actual cooking. Hero image is visual focal layer; captions/UI remain a separate legible layer. Decorative depth layers are not required.

Obtain high-resolution originals; derive AVIF/WebP sizes after layout approval (rough targets 640/960/1440/1920px, plus portrait crops), appropriate compression and color profile; retain width/height, alt text, focal point and provenance. Hero desktop compressed image target around 250KB and mobile around 150KB, subject to quality testing; budgets are targets, not measurements.

## Temporary assets policy

If exploration uses licensed stock, add an entry with exact source URL, creator, license evidence/date, local path, temporary=true, depicted subject and replacement owner/status. Mark stock explicitly in private reviews. Never describe it as Tandoori Junction's dish or premises. No borrowed reference-site images. AI food imagery would require explicit exploration labelling and cannot verify real dishes. No temporary image may reach production without an explicit rights/authenticity disposition.

## Historical assets — dark A and client-study proposal

- FOOD-USER-001: exact 6244×4163 embedded JPEG from left-window 001, PDF page 1 object 9 0. Retained unchanged at context/originals/food-spread-source.jpg. User expressly directed its use during the earlier dark A proposal. Responsive WebP derivatives remain in website/public/images/tandoori-spread-*.webp but are not used by the current UI.
- BRAND-001: website/public/images/tandoori-junction-logo.svg contains original menu logo vector paths, isolated by viewport; original colours and forms retained, no redesign.
- FONT-A: self-hosted Cormorant Garamond Variable normal/italic; Manrope interface. Fontsource package licenses retained in installed packages.
- Old Unsplash photograph removed from public/ and active views; moved to tmp/assets/retired-stock for historical provenance only. B screenshots are superseded and must not be used as current review.
- Photo authorization is user-confirmed provenance, not independent ownership investigation. Competitor logo/claims remain excluded. No production publication performed.

The earlier client-reference preview /preview/client-study reused FOOD-USER-001 derivatives and the original TJ vector logo. That direction is historical. No media from King Tandoori/Malai websites was imported.

## Complete pages —2026-10-18

Three additional original menu food banners extracted from pages4/5/6 (street food, paneer tikka, tandoori chicken). All inspected visually before use. JPEG profiles converted to sRGB; print border and1–2px edge seams cropped, WebP640/1274 variants. No generative edit or stock. Exact evidence/derivatives docs/content/PAGE-ASSETS.json. User directs use of real supplied imagery/PDF contents. User-asserted authenticity retained; ownership/current-business verification remains before production.

The current homepage and menu use the original Tandoori Junction menu-proof photos. Twelve category image derivatives are extracted from PDF pages 2–12, with source JPEGs retained unchanged as `context/originals/menu-page-XX-banner-source.jpg`; responsive WebPs and source pages are tracked by `docs/content/PAGE-ASSETS.json`. Page 4 supplies both Street Food and Quick Meals. The proof has category banners, not a verified photograph for every individual item, so each photo is shown with its matching group. The homepage hero uses the tandoori non-vegetarian banner as a full-width background, with a solid white copy panel to maintain the current light direction. No generated food, stock or competitor imagery is used. The separate window-wrap spread is not active. Interface typography uses the visitor's system sans-serif. A homepage-only GSAP module adds a small image settle and low-distance food-photo reveals; reduced-motion preference skips it.
