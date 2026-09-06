# Thomas Williams, CPA, PLLC

Custom WordPress theme for Thomas Williams, CPA, PLLC.

## Canonical project state

The repository default branch is `main`. Work is tracked in Jira under project key `TW`, using one branch per work item (`TW-*`). Pull requests are reviewed before merge.

### Completed production passes

- TW-1 — Official branding and contact infrastructure.
- TW-3 — Home and About institutional refinement.
- TW-4 — Services and Insights institutional refinement.
- TW-5 — Contact and Payments institutional refinement.
- TW-6 — Home International section styling restoration.

### TW-8 — SEO, bilingual, legal and site-wide QA hardening

TW-8 prepares the public theme for final production QA by hardening:

- English/Spanish SEO metadata, canonicals, Open Graph locale and hreflang output.
- Bilingual Privacy and Terms presentation without changing the underlying legal intent.
- Bilingual 404 and empty-content states.
- Functional posts-index, search and archive fallbacks.
- Current institutional schema/address/telephone data.
- Safe public-repository typography fallback when licensed local webfont files are unavailable.

## Local-only assets

The following items are intentionally not versioned unless separately approved:

- `assets/fonts/` — local institutional font files pending confirmation of webfont licensing.
- `download-flags.ps1` — temporary local installer/helper.
- `thomas-williams-flags-installer/` — temporary local installer artifacts.

The public repository does **not** require the local font binaries to render correctly. `assets/css/production-safe.css` overrides the heading stack with a stable serif fallback. If licensed webfont deployment is later approved, that override can be replaced with the licensed production configuration without committing unverified font files.

## Development

Local WordPress development currently uses `thomaswilliams.test`. Mailpit SMTP configuration is enabled only for that local host.

## Deployment notes

Before production deployment, verify WordPress admin email, production mail delivery, contact-form submission, bilingual routes, SmartVault access, current payment guidance, map destination, responsive navigation, legal pages, search/archive fallbacks, social metadata and page transitions.
