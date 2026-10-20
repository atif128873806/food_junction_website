# Historical Option A review — superseded 2026-10-18

This review describes the earlier dark design. It is retained as project history and is not the current direction. See `COMPLETION-REVIEW.md` for the live light-site result.

Historical direction at the time: A — Ember & Heritage, supplied food images. The user later replaced it with a light, simple white/red site. Navigation/hero implementation notes below are historical; see `COMPLETION-REVIEW.md` for current state.

## Images

- option-a-desktop-1440.jpg: final desktop review, viewport1440×900, photograph loaded.
- option-a-mobile-390.jpg: mobile review, viewport390×844, photograph loaded; screenshot ends partway through naturally scrolling image.
- Earlier hero-*.jpg files depict rejected B and are superseded. Late transient blank captures were caused by stopped local servers; use only files above.

## Review findings addressed

Removed B service sidebar/walnut card, stock food and attribution. Applied Cormorant display, source vector logo, supplied food crop, clearer menu/visit hierarchy and 16px body copy. Native disclosure/dialog focus return works. Photo retains real colour/texture. No invented features/claims. Three local responsive source sizes plus1920px derivative available; 960px image about183KB,1440 about375KB. Larger images trade payload for food texture; field performance not measured.

## Limits

Reduced-motion/no-JS fallbacks code-reviewed, not browser-emulated. Full accessibility and performance auditing deferred. Preview server may need restart from website/; not deployed. Proof prices/operating facts still unconfirmed.
