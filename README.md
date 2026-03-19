# Booqi Classic WordPress Theme Foundation

This repository now includes a refined classic WordPress theme scaffold in `booqi-classic/`.

The current pass focuses on the **global shell and reusable layout system**, not on full page/content migration.

## What was used as design input

Primary reference materials inspected in this repository:

- `sitedesign/Rocketsales+–+SaaS+Landing+Page.fig`
- `sitedesign/Screencaptures/screencapture-booqi-me-2026-03-19-08_30_51.png`

For this iteration, those design files were treated as the source of truth for the overall visual direction and shell behavior. The mirrored HTML pages were intentionally not used.

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

## What is improved in this pass

### Global theme shell

The reusable shell is now more polished and closer to the bundled design direction:

- stronger dark-page foundation with cool dark-blue surfaces instead of flatter dark green blocks
- brighter mint accent treatment for CTAs, tags, and highlights
- a more deliberate spacing scale for sections, cards, and footer layout
- larger radii and softer panel shadows to better match the premium SaaS look in the references
- clearer container widths and reading widths for future page sections

### Header

The header was refined to feel more like a deliberate product-marketing shell:

- improved logo/wordmark placement with a dedicated brand mark area
- a more compact floating navigation container
- better nav-item spacing and hover/active treatment
- stronger header CTA grouping with both secondary and primary actions
- cleaner responsive behavior using the existing lightweight mobile toggle

### Footer

The footer now has a more structured multi-column layout:

- a brand/intro column
- a WordPress menu column for reusable footer navigation
- a product-links column for likely global destinations
- a meta/foundation column for implementation notes and reusable structure
- a separated legal/meta row at the bottom

### Front page proof section

`front-page.php` still remains intentionally limited in scope, but it now demonstrates the shell more effectively through:

- one stronger hero section
- one reusable content/card section
- one CTA section
- the updated header and footer wrapped around those sections

## Assumptions taken from the design files

The bundled screenshot and Figma metadata clearly indicated:

- a dark, premium overall shell
- bright mint CTA emphasis
- rounded cards/panels with soft glow and shadow
- generous vertical spacing
- strong contrast between dark hero/footer areas and light informational sections

The repository does **not** currently provide a clean exported token file or easy-to-query semantic Figma component documentation, so the implementation makes the smallest reasonable assumptions:

- it uses a system/Inter-style sans-serif stack instead of packaging custom fonts
- it infers exact spacing, radius, and shadow values from the screenshot/Figma preview rather than from exported variables
- it uses representative global navigation/footer structure for shell quality, not final Booqi information architecture
- it keeps homepage content intentionally generic so the next pass can map real Booqi sections cleanly

## What should be built next

Recommended next steps:

1. build the actual homepage section-by-section from the design references using reusable template patterns
2. replace the provisional demo copy in the starter hero/cards/CTA with final Booqi content
3. refine the final information architecture for header and footer menus once approved
4. extract repeated homepage patterns into template parts as sections become real
5. continue with Features and industry pages using the same tokenized section/card system
6. prepare user-facing strings for easier future localization

## Installation

1. Copy `booqi-classic/` into `wp-content/themes/`
2. Activate **Booqi Classic** in WordPress admin
3. Assign menus to:
   - **Primary Menu**
   - **Footer Menu**
4. Set a static homepage in **Settings → Reading** so WordPress uses `front-page.php`
