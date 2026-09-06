# Thomas Williams, CPA, PLLC

Custom WordPress theme for Thomas Williams, CPA, PLLC.

## Canonical project state

The repository default branch is `main`. Work is tracked in Jira under project key `TW`, using one branch per work item (`TW-*`). Pull requests are reviewed before merge.

### TW-1 — Official branding and contact infrastructure

TW-1 consolidates the first production-ready branding/contact pass:

- Official Thomas Williams navy/white logo assets.
- Official institutional color system and heading typography integration.
- Branded header, footer and page-transition loader.
- International phone-country selector with local SVG flag assets.
- Contact-form processing with server-side country/dial-code validation.
- Centralized office location data for 248 E. Summit Avenue, San Antonio, TX 78212.
- Contact/location SEO data synchronized with the centralized office helper.
- English/Spanish behavior preserved.

## Local-only assets

The following items are intentionally not versioned unless separately approved:

- `assets/fonts/` — local institutional font files pending confirmation of webfont licensing.
- `download-flags.ps1` — temporary local installer/helper.
- `thomas-williams-flags-installer/` — temporary local installer artifacts.

## Development

Local WordPress development currently uses `thomaswilliams.test`. Mailpit SMTP configuration is enabled only for that local host.

## Deployment notes

Before production deployment, verify WordPress admin email, production mail delivery, contact-form submission, bilingual routes, SmartVault/payment links, map destination, responsive navigation and page transitions.
