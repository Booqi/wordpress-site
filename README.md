# Booqi Classic WordPress Theme

This repository was converted from an HTTrack mirror into a **custom classic WordPress theme**.

## What's included

Theme files:

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

1. Copy this theme folder into your WordPress install at:
   - `wp-content/themes/booqi-classic`.
2. In WordPress admin, go to **Appearance → Themes**.
3. Activate **Booqi Classic**.
4. Go to **Settings → Reading** and set:
   - **Your homepage displays** → **A static page**.
   - Assign your homepage page so WordPress uses `front-page.php`.
5. Go to **Appearance → Menus** and assign menus to:
   - **Primary Menu**
   - **Footer Menu**

## Notes

- The theme uses WordPress functions (`home_url()`, `get_template_directory_uri()`, template loading APIs), so no domain is hardcoded.
- Styling and structure aim to match the mirrored Booqi direction while removing Framer/runtime overhead.
- JavaScript is intentionally minimal (mobile nav toggle only).
