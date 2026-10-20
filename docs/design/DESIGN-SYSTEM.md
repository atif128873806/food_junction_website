# Design system — light restaurant site

Status: current per user request, SRC-LIGHT-008. Replaces the dark palette and decorative serif typography.

| Role | Token | Usage |
| --- | --- | --- |
| Canvas | `#FFFFFF` | Main site background |
| Text | `#262321` | Headings and body |
| Brand action | `#A33125` | Links, buttons, small rules |
| Quiet surface | `#F7F4F1` | Optional alternating section |
| Divider | `#E6E0DB` | Menu rows and boundaries |
| Secondary text | `#625D59` | Captions and notes |

Typography uses the browser's familiar system sans-serif stack: `system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif`. No remote font request, display serif or script. Heading sizes stay close to ordinary restaurant sites; paragraph text is 16px or larger where practical. Price strings use tabular numerals.

Use a modest 8px spacing scale. Content max-width 1200px; gutters 20px mobile, 32px tablet, 64px desktop. Borders are thin and low contrast. Buttons are simple red rectangles with white type; links are underlined on hover/focus. Use no gradients or decorative icons. Food photos provide visual richness.

## 2026-10-18 refinement

The home hero uses the tandoori category banner as a full-bleed PDF food image, balanced by a solid white content panel; keep the rest of the page light. Motion is limited to a subtle hero image settle, a small panel translation and restrained homepage photo reveals, with no motion under reduced-motion preference. The menu uses an expandable category selector and renders only the chosen group, retaining the full source list across shareable categories.

Keyboard focus is a clear 2px red outline with offset. Body copy and buttons must meet WCAG AA contrast in the rendered UI. Reduced-motion users receive no nonessential motion; core content remains visible before JS.
