# Decisions

| ID | Status | Decision | Evidence |
| --- | --- | --- | --- |
| D01 | approved | This root is the active Tandoori Junction project; preserve unrelated workspace/examples | SRC-BRIEF-001, user-selected cwd and restaurant brief, 2026-10-17 |
| D02 | approved | User-selected Laravel 12/Blade/Tailwind/Alpine/GSAP/Filament with MySQL or PostgreSQL; no React/Next | SRC-BRIEF-001 Technical Stack |
| D03 | approved | Creative approval precedes app code; navigation/hero only first, then 1440/390 screenshots and incremental sections | SRC-BRIEF-001 Development Workflow |
| D04 | approved | Print-proof facts require confirmation before production; no fabricated integrations/claims | SRC-BRIEF-001 Source of Truth and restrictions |
| D05 | superseded | Earlier recommendation: Ember & Heritage direction A; user selected B | docs/design/ART-DIRECTION.md; evidence SRC-MENU-001 pp1,5,6; research synthesis |
| D06 | superseded | Earlier Cormorant/Manrope recommendation; B uses Fraunces/Manrope | User selected B |
| D07 | proposed | Working line Tradition, served with fire. | User creative proposal explicitly not approved slogan |
| D08 | proposed | Seven browsing families / twelve direct groups / eighteen source leaves | docs/content/MENU-DATA.md |
| D09 | proposed | Database choice and compatible package versions | Hosting/runtime confirmation pending |
| D10 | proposed | Owner-confirmed catering contact/form workflow | Catering printed p1; operational details absent |

| D11 | superseded | Select Option B — The Junction Table; supersedes D05 recommendation/D06 primary font candidate | SRC-APPROVAL-002, explicit user reply 2026-10-17 |
| D12 | partially superseded | Keep Tandoori Junction; King Tandoori folders are references only, no brand/photo reuse | SRC-APPROVAL-003, explicit clarification reply 2026-10-17 |
| D13 | approved | Continue first implementation slice: navigation and hero only, local review | Original workflow + D11 approval |
| D14 | proposed | Faithful existing logo crop from menu for preview; obtain original vector for production | Menu logo authority; source rights still need final owner confirmation |

Working headlines, prices, operational details and production asset rights remain unconfirmed. Research observations are not business approvals.

| D15 | approved | Switch to Option A — Ember & Heritage; reject B implementation; supersedes D11 | SRC-REVISION-004, latest explicit user reply 2026-10-17 |
| D16 | approved | Use supplied real food images; no Unsplash. Supersedes D12 photo-use restriction only; retain Tandoori Junction name/logo and exclusion of competitor claims | SRC-REVISION-004 |
| D17 | approved | Continue revision within navigation/hero slice only | Original phased workflow + SRC-REVISION-004 |

## D14 — Client reference study and separate exploration (2026-10-17)

Source SRC-CLIENT-REF-005: user likes current A, provides King Tandoori/Malai websites and requests a new approval preview. Study completed; new immersive A proposal at /preview/client-study. Original A at / retained. Status: research requested/fulfilled; revised visual proposal PENDING approval. No change to business truth, supplied-photo restriction or incremental scope.

## D15 — Approved revision and completion scope (2026-10-17)

User: “yes approved and finish it please.” Immersive client-study A is approved and becomes homepage. Continue chapter-by-chapter implementation/review without repeated approval questions. Follow-up explicitly narrows delivery to professionally designed pages and complete PDF menu: “put whatever has in the pdf ... dont need ... booking policy ... pages only”. Build Home/Menu/Our Story/Catering/Visit; omit booking/ordering integrations and admin/database work in this delivery. Filament/database remain future scope, not a completion blocker. Printed details may be displayed as source values, with a concise proof-price note. No hours fabricated. No public deployment requested.

## Current design and menu revision — 2026-10-18

| D18 | approved | Replace dark Option A with a simple white page, red accents, familiar system sans-serif, and restrained restaurant presentation | SRC-LIGHT-008; direct user implementation request; supersedes D15's visual style |
| D19 | approved | Remove menu search; lead with matching original PDF category images, preserving source dishes/prices/variants below | SRC-LIGHT-008; PDF has category-page images, not an individual verified photograph for every dish |
| D20 | approved | Use King Tandoori as a hierarchy/UX reference for light red-and-white presentation, food-first opening and visual menu discovery | SRC-KING-WEB-010; no copied identity, assets, claims, ordering or other features |
| D21 | approved | Expand the home hero to a full-width original PDF food background; use modest homepage-only GSAP/ScrollTrigger motion and honor reduced motion. For the menu, render one complete selected category at a time via simple shareable links, with the matching full PDF image above the readable list. | SRC-UX-011; user's direct 2026-10-18 implementation request; preserves D18/D19 light style and source integrity |

## Redesign revision — 2026-10-20

| D22 | approved | Replace the previous dated page compositions across all five routes with a more professional, animated restaurant design while retaining the confirmed white/red identity, original logo, system type, supplied PDF images, source menu data, and pages-only scope | Direct user request 2026-10-20; Impeccable skill requested |
| D23 | implementation | Use a printed-menu-inspired layout, large typographic hierarchy, full-width food moments, a home hero sequence, and reduced-motion-aware entrance and interaction feedback. Keep all content visible without JavaScript. | Redesign implementation in `website/resources/views`, `resources/css/app.css`, and `resources/js/home-motion.js` |
