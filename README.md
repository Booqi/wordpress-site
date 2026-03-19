# Booqi Classic WordPress Theme Foundation

This repository now includes a fresh classic WordPress theme scaffold in `booqi-classic/`.

The first pass intentionally focuses on **theme structure and reusable design-system primitives**, not on full page/content migration.

## What was used as design input

Primary reference materials inspected in this repository:

- `sitedesign/Rocketsales+–+SaaS+Landing+Page.fig`
- `sitedesign/Screencaptures/screencapture-booqi-me-2026-03-19-08_30_51.png`

Implementation intentionally did **not** use old removed themes and did **not** use the mirrored HTML pages as build input for this first scaffold.

## Theme structure

The uploadable theme lives in:

- `booqi-classic/`

Core files included:

- `booqi-classic/style.css`
- `booqi-classic/functions.php`
- `booqi-classic/index.php`
- `booqi-classic/front-page.php`
- `booqi-classic/page.php`
- `booqi-classic/header.php`
- `booqi-classic/footer.php`
- `booqi-classic/assets/css/main.css`
- `booqi-classic/assets/js/main.js`
- `booqi-classic/assets/images/`

## What is implemented

### WordPress foundation

- classic theme scaffold with the required template files
- proper asset enqueueing in `functions.php`
- registered `primary` and `footer` menus
- theme supports for:
  - title tag
  - post thumbnails
  - HTML5 markup
  - custom logo
  - selective refresh
  - align-wide
  - editor styles
- semantic `header`, `main`, and `footer` structure
- lightweight mobile navigation toggle

### Design system in `assets/css/main.css`

The reusable design system includes:

- **colors**: dark base surfaces, bright mint/teal accent, soft neutral light sections
- **typography scale**: tokenized type sizes from small labels to large hero headlines
- **spacing system**: consistent spacing tokens for sections, cards, and layout gaps
- **radius system**: small, medium, large, extra-large, and pill radii
- **shadows**: soft elevated shadows for panels/cards
- **buttons**: primary mint CTA and ghost secondary button
- **cards/panels**: reusable surfaced containers for feature blocks and dashboard-like modules
- **layout widths**: page container and reading-width tokens
- **responsive behavior**: tablet/mobile adjustments for nav, hero, cards, and footer

## Assumptions taken from the design files

The bundled screenshot and Figma metadata clearly suggested:

- a **dark overall visual foundation**
- a **bright mint/teal accent color** used for CTAs and highlights
- **rounded interface panels/cards**
- **high contrast typography**
- **alternating dark/light sections**
- a modern SaaS landing-page layout language

Because the repository did not include easily extractable design-token exports or packaged local font files, the scaffold makes the smallest reasonable assumptions:

- it uses a system/Inter-style sans-serif stack instead of bundling a custom font
- it defines the palette and spacing from the visual references rather than from explicit token JSON
- it keeps the homepage intentionally minimal so future page implementation can stay clean and component-based

## Front page status

`front-page.php` is only a **starter proof** that the theme is working. It includes:

- a hero placeholder section
- one sample content/features section
- one CTA section

This is intentional and matches the requested scope.

## What should be built next

Recommended next steps:

1. implement the real homepage section-by-section against the Figma and screenshot references
2. replace placeholder header/footer content with Booqi-specific navigation and structured footer content
3. add reusable template parts for repeated homepage sections
4. build the Features page using the same tokenized card and section system
5. add localization-ready handling for user-facing strings where content becomes more final
6. introduce real Booqi imagery/logos once approved assets are selected from the repository references

## Installation

1. Copy `booqi-classic/` into `wp-content/themes/`
2. Activate **Booqi Classic** in WordPress admin
3. Assign menus to:
   - **Primary Menu**
   - **Footer Menu**
4. Set a static homepage in **Settings → Reading** so WordPress uses `front-page.php`
