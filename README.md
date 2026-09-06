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
- TW-8 — SEO, bilingual, legal and site-wide QA hardening.

### TW-9 — Final production readiness and deployment QA

TW-9 is the final production-readiness pass. It verifies deployment assumptions, active EN/ES routes, integrations, institutional data and operational dependencies before release.

## Institutional fonts

Editor's Note is part of the official institutional identity supplied for this project and remains the heading typeface used by the theme. `assets/css/base.css` loads the following required deployment assets from `assets/fonts/`:

- `EditorsNote-Regular.ttf`
- `EditorsNote-Medium.ttf`
- `EditorsNote-Semibold.ttf`
- `EditorsNote-Bold.ttf`

The font binaries are intentionally not stored in this public repository. A production deployment must include those supplied files in `assets/fonts/` so the existing `@font-face` declarations resolve correctly. Do not replace the institutional typeface with the former `production-safe.css` override.

## Local-only assets

The following items remain intentionally unversioned:

- `assets/fonts/` — required institutional font binaries supplied separately for deployment.
- `download-flags.ps1` — temporary local installer/helper.
- `thomas-williams-flags-installer/` — temporary local installer artifacts.

## Development

Local WordPress development currently uses `thomaswilliams.test`. Mailpit SMTP configuration is enabled only for that local host.

## Production deployment checklist

Before production release, verify all of the following:

- Copy the four required Editor's Note font files into `assets/fonts/` and confirm they return HTTP 200 from the deployed theme.
- Confirm the official office address is `248 E. Summit Ave., San Antonio, Texas 78212` and telephone is `210.342.9999` wherever institutional data is rendered.
- Verify English and Spanish routes for Home, About, Services, Insights, Contact, Payments, Privacy and Terms.
- Verify 404, search, archive and single-post states.
- Verify production mail delivery and a real contact-form submission, including the international phone-country selector.
- Verify SmartVault access, office map destination and current payment guidance.
- Verify responsive navigation, page transitions, legal pages, SEO canonicals/hreflang, Open Graph metadata and schema output.
- Verify WordPress admin email and any analytics configuration intended for production.

The repository does not include environment-specific mail credentials, private configuration or institutional font binaries; those operational dependencies must be supplied in the target WordPress deployment.
