# AGENTS.md

## Project purpose

This repository is the source for rebuilding the Booqi marketing website as a clean, lightweight, classic WordPress theme.

The current repository includes:
- an HTTrack mirror of the existing live site, used as a visual/content reference
- a custom WordPress theme that should become the production-ready implementation

The goal is **not** to wrap or embed the mirrored site as-is.
The goal is to **rebuild the site cleanly** using WordPress best practices, while preserving the design direction, content structure, and visual fidelity of the original site as closely as practical.

---

## High-level goals

When making changes, prioritize the following in order:

1. Correctness
2. Maintainability
3. Visual fidelity to the original site
4. Performance
5. Simplicity

Avoid quick hacks that make future iteration harder.

---

## Project rules

- Treat the HTTrack mirror as a **reference source**, not as final production code.
- Do not paste large raw mirrored DOM fragments into WordPress templates unless explicitly requested.
- Rebuild templates cleanly using semantic HTML and reusable PHP template parts where appropriate.
- Keep the theme lightweight.
- Minimize JavaScript. Prefer CSS and server-rendered markup wherever possible.
- Do not introduce page builders or unnecessary plugin dependencies.
- Do not hardcode domains or environment-specific URLs.
- Use WordPress functions for URLs, assets, menus, and template loading.
- Preserve SEO-relevant structure such as heading hierarchy, internal linking, and semantic sections.

---

## Theme architecture

This project uses a **classic WordPress theme**.

Expected core files:
- `style.css`
- `functions.php`
- `index.php`
- `front-page.php`
- `page.php`
- `header.php`
- `footer.php`

Expected asset locations:
- `assets/css/`
- `assets/js/`
- `assets/images/`

Guidelines:
- Keep shared styling in `assets/css/main.css`
- Keep shared JavaScript in `assets/js/main.js`
- Avoid inline styles unless there is a strong reason
- Avoid duplicating CSS rules across files
- Reuse template parts when repetition becomes significant

---

## Content and design guidance

The live/mirrored Booqi site is the source of truth for:
- page structure
- section order
- core copy
- CTA hierarchy
- visual direction
- asset usage where available

When rebuilding:
- match the original site closely, but not by copying technical clutter
- preserve the content and intent of each section
- simplify only where this improves maintainability without noticeably harming fidelity
- prefer a clean and stable implementation over a perfect but brittle clone

If a choice must be made:
- preserve layout, hierarchy, spacing, and calls-to-action first
- then refine colors, shadows, radii, and decorative details

---

## WordPress development standards

Always prefer native WordPress patterns.

### Use:
- `get_header()`, `get_footer()`
- `get_template_directory_uri()`
- `home_url()`
- `esc_url()`, `esc_html()`, `wp_kses_post()` where appropriate
- proper enqueueing in `functions.php`
- menu registration and `wp_nav_menu()`
- page templates only when they clearly improve structure

### Avoid:
- hardcoded internal URLs
- hardcoded asset paths
- unnecessary custom framework code
- large monolithic template files when the code can be split cleanly
- introducing Gutenberg-specific complexity unless requested

---

## CSS standards

- Use a clear variable system for colors, spacing, radii, shadows, and typography
- Prefer consistent spacing tokens over one-off values
- Keep selectors readable and reasonably scoped
- Avoid deeply nested or overly specific selectors
- Avoid duplicate or conflicting rules
- Mobile responsiveness is required
- Prefer simple, maintainable layouts over clever CSS tricks

When editing CSS:
- refactor toward consistency
- do not stack random overrides if a cleaner underlying fix is possible

---

## JavaScript standards

- JavaScript should be minimal
- Only add JS when necessary for navigation or UX behavior
- Do not introduce large libraries without explicit approval
- Prefer progressive enhancement
- Code should fail gracefully if JS does not run

---

## Page-building priorities

When improving the site, work in this order unless told otherwise:

1. Homepage visual fidelity
2. Header and navigation
3. Footer
4. Features page
5. Industry pages
6. Pricing page
7. About page
8. Contact page
9. Blog/archive styling
10. Localization readiness

---

## Localization readiness

This site is expected to support multiple languages later.

Therefore:
- avoid hardcoding assumptions that make localization harder
- keep templates structured and reusable
- keep copy easy to extract or replace later
- avoid mixing content, styling, and logic unnecessarily

Do not implement multilingual functionality unless explicitly requested, but keep the codebase ready for it.

---

## Working with the mirrored site

The mirrored site may contain:
- duplicated markup
- generated wrappers
- unnecessary scripts
- legacy or Framer-specific structure
- non-ideal asset organization

Therefore:
- inspect mirrored files for reference
- extract useful content, layout, and assets
- do not blindly copy mirror output into templates
- prefer cleaned and normalized HTML/PHP output

---

## Pull request expectations

Every PR should be focused and scoped.

A good PR:
- solves one clear problem or one tightly related set of problems
- keeps diffs understandable
- does not introduce unrelated cleanup unless it materially improves the targeted area

PR descriptions should include:
1. what changed
2. why it changed
3. any design/technical tradeoffs
4. anything still incomplete

---

## Definition of done for each task

Before considering a task complete, verify:

- the theme still loads correctly
- no domain is hardcoded
- assets are loaded via WordPress functions
- HTML structure is semantic and clean
- styling is responsive
- there is no obvious duplication that should have been refactored
- changes are limited to the requested scope
- the implementation is cleaner than before, not just different

---

## Safety rails

Do not:
- rewrite the whole codebase when only one section needs work
- introduce unnecessary abstractions
- replace working structure without a clear benefit
- create placeholder-heavy implementations if the mirrored source already provides the content
- sacrifice maintainability just to imitate generated markup exactly

---

## Preferred iteration style

For larger requests:
- first improve structure
- then improve fidelity
- then polish details

When refining an area:
- work from the original site reference
- keep code organized
- leave the codebase in a cleaner state than you found it

---

## If uncertain

If requirements are ambiguous:
- make the smallest reasonable change that preserves flexibility
- prefer maintainable structure
- document assumptions in the PR notes