# Responsive design — current light restaurant site

The current pages reflow naturally for phones and laptops. Keep the familiar system type, red action color, real PDF food images and usable content order at each width. Do not introduce a dark theme or a separate mobile design system.

## Desktop

At 1440px, inner pages use a 1200px content width with centered gutters. The homepage hero uses the full viewport width and height, with the dish visible on the left and a solid white information panel on the right. Header links remain explicit. The menu displays one selected category: full-width uncropped source banner followed by the readable dish list.

## Tablet and mobile

Below 680px, the header keeps the logo, visible Menu action and a native disclosure for remaining links. The homepage retains its full-width image; the white copy panel sits near the bottom, leaving the food visible above. The food gallery becomes a two-column layout with one wider lead image. Services and visit details stack in the reading order.

Menu category navigation is a compact disclosure above the selected category. When expanded, its 12 normal links use two columns at phone widths. Selecting a link loads a shareable `?category=` URL and resets to the top. Images retain their full printed category banner ratio; the list becomes one column, with names, prices and variants allowed to wrap. No search field, horizontal scrolling or JavaScript is required to change category.

## Resilience and verification

Keep source details readable at 320–390px, targets at least 44px high, visible focus, descriptive image alt text, and no fixed overlays. All content begins visible in normal HTML; GSAP only adds small transforms and is skipped when reduced motion is requested. Check keyboard navigation, category switching, image loading, long item names and document overflow.

Browser review for the current refinement: 1440×900 desktop and 390×844 mobile. At 390 CSS pixels the document root measured 375px because the browser reserves a 15px scrollbar gutter; content had no horizontal overflow. The app browser returned the 1440 CSS-pixel desktop viewport for the final capture.
