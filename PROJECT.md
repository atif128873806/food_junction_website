# Tandoori Junction — project brief

Active project: this root, `/home/atif/junction_food_resturant_website`. User selection established 2026-10-17 (Asia/Karachi). The existing AI Workspace kit is supporting infrastructure; `projects/ai-workspace` and `projects/example-project` are unrelated examples and must not supply restaurant facts. Existing root workspace architecture preserved at `docs/workspace/AI-WORKSPACE-ARCHITECTURE.md`.

## Current phase

The five-page light white/red website is implemented in Laravel 12/Blade. It received a full visual redesign on 2026-10-20, a menu-focused polish pass on 2026-10-21, a homepage photo-preview refinement on 2026-10-22, and an eyebrow-free homepage simplification on 2026-10-23. The menu preserves all 169 printed entries and the original source taxonomy with a visible category index and mobile rail. The site is live at `https://tandoorijunctionmarkham.ca/` on the shared Hostinger VPS using isolated PHP 8.5.12 FPM and HTTPS. Fresh visual browser review is outstanding because no browser surface was available. Admin/database, booking and ordering remain outside the pages-only scope. The site stays noindex while printed prices, contact and image rights await owner verification. See `DESIGN.md` and `memory/HANDOFF.md`.

## Business evidence

SRC-MENU-001, cover: Tandoori Junction; dine-in, take-out, catering. Printed address: 160 New Delhi Drive, Markham ON L3S 0B5; phone 905-554-1819. Instagram/TikTok icons accompany `Tandoorijunctionmarkham`; exact URLs unverified. Proof is authoritative evidence of printed content, not current operating facts or image ownership.

## Intent and audience

Create a straightforward, light Indian restaurant website that helps local diners see food, browse the printed menu, plan a visit, and understand dine-in, takeout and catering. Audience/jobs inferred from user brief and menu, not customer research. Quality must come from the restaurant's own food photos, clear navigation and readable typography. Never imply awards, a documented family lineage or exclusive positioning absent evidence.

## Documentation map

- `REQUIREMENTS.md`: accepted user scope and deferred features.
- `ARCHITECTURE.md`: proposed engineering boundary and content model.
- `DESIGN.md`: current light/red direction. `docs/design/ART-DIRECTION.md` retains historical options and supersession evidence.
- `docs/design/HOMEPAGE.md`, `INNER-PAGES.md`, `DESIGN-SYSTEM.md`, `MOTION.md`, `RESPONSIVE.md`: detailed design contract proposals.
- `docs/research/REFERENCES.md`, `MENU-AUDIT.md`: dated evidence and uncertainty.
- `docs/content/MENU-DATA.md`: all 169 printed entries, 18 leaf headings; likely duplicates retained.
- `docs/content/ASSET-MANIFEST.md`: asset rights and procurement.
- `docs/QA-CHECKLIST.md`, `TASKS.md`, `DECISIONS.md`, `memory/HANDOFF.md`: verification, decisions, progress.

## Success criteria

Recognizable logo; short image-led home page; photo-led menu without search; clear visit/catering access; complete source-linked dish list with printed prices and variants; responsive keyboard-accessible navigation; owner-confirmed business data before publication. No fake social proof or invented integrations.
