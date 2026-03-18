# Booqi Classic WordPress Theme

This repository contains:

- the HTTrack mirror at the repository root as a visual/content reference
- the production WordPress theme inside `booqi-classic/`

## Theme folder

The entire uploadable WordPress theme now lives in:

- `booqi-classic/`

That folder contains:

- `style.css`
- `functions.php`
- `index.php`
- `front-page.php`
- `page.php`
- `header.php`
- `footer.php`
- `assets/css/main.css`
- `assets/js/main.js`
- `assets/images/`

## Installation

1. Download or zip the `booqi-classic/` folder.
2. Upload it into your WordPress install at:
   - `wp-content/themes/booqi-classic`
3. In WordPress admin, go to **Appearance → Themes**.
4. Activate **Booqi Classic**.
5. Go to **Settings → Reading** and set:
   - **Your homepage displays** → **A static page**.
   - Assign your homepage page so WordPress uses `front-page.php`.
6. Go to **Appearance → Menus** and assign menus to:
   - **Primary Menu**
   - **Footer Menu**

## Notes

- The theme uses WordPress functions (`home_url()`, `get_template_directory_uri()`, template loading APIs), so no domain is hardcoded.
- Styling and structure aim to match the mirrored Booqi direction while removing Framer/runtime overhead.
- JavaScript is intentionally minimal (mobile nav toggle only).
