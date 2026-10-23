# Hostinger VPS deployment — Tandoori Junction

Status on 2026-10-23: live at `https://tandoorijunctionmarkham.ca/` with HTTPS; noindex remains pending owner verification.

## Layout and isolation

- VPS: user supplied Hostinger Ubuntu 24.04 server. Other Nginx virtual hosts must stay untouched.
- Active release: `/srv/tandoori-junction/releases/20261023-home-polish-1`; active link: `/srv/tandoori-junction/current`. Prior working release: `/srv/tandoori-junction/releases/20261023-php85`.
- Shared private environment and writable storage: `/srv/tandoori-junction/shared`. The environment contains a generated APP_KEY and must never be copied into this repository or logs.
- Runtime user: `tjunction`; PHP: 8.5.12 in its own FPM pool, socket `/run/php/tandoori-junction.sock`.
- Public Nginx config: `/etc/nginx/sites-available/tandoori-junction-public`; HTTP and `www` redirect to canonical HTTPS. The staging config remains bound only to `127.0.0.1:8085`.
- Existing PHP 8.3/8.4 FPM services and the manual `/usr/bin/php` choice of 8.4 were not changed.
- No migrations, database, queue worker, cron entry, or external integration is needed for the five static-content Laravel pages. Sessions/cache use files and queue uses sync.

## Verified release

The archive was built from `website/` after `npm run build` and `php artisan test` (11 tests, 516 assertions). It omitted `.env*`, `vendor`, `node_modules`, local storage and the private menu proof. SHA-256 of the transferred release archive: `aab3c5ae954db127c3ee7216d5f346f744f6b9cd170e7ee3a1c505871db865cd`.

The 2026-10-23 homepage refinement was deployed as `20261023-home-polish-1` from a similarly secret-free archive (SHA-256 `bbc7b70db6206877ded635179f1232da8bade1e009b81e198eb033f595cdc00a`). Local build and 11 tests/516 assertions passed. The release reused the private shared environment and storage, installed locked production dependencies under PHP 8.5, cached configuration/views, and passed platform checks. An atomic `current` symlink change activated it; the prior release remains for rollback. Live home and all four inner pages returned 200, the new CSS returned 200, `/menu-proof` returned 404, noindex remained active, and four representative neighboring sites returned 200. No Nginx host or other PHP service was changed. Browser viewport review was unavailable in the current tool session.

On the VPS, `composer install --no-dev` with PHP 8.5.12, platform checks, and `composer audit --locked --no-dev` passed. The five site pages, a menu category, logo, and `/build/manifest.json` returned 200 through public HTTPS; `/menu-proof` returned 404 and `/.env` returned 403. Nginx syntax and PHP-FPM config tests passed. Four representative other hosts returned 200 before and after. `robots.txt` disallows all crawlers, the layout contains noindex, and Nginx emits `X-Robots-Tag` on site responses. Let's Encrypt issued a certificate for apex and `www` expiring 2027-01-20; Certbot configured automatic renewal, and the final HTTP host served a renewal test file correctly. Browser viewport review remains outstanding because no browser surface was available.

## Publication follow-up

Owner verification of printed prices/options/contact and photo/logo rights is still needed before lifting noindex. Broader desktop/mobile browser review is also open. The other hosted sites still use older PHP 8.3/8.4 runtimes; plan compatibility-checked security updates for them separately. The root password shared in chat was not used because SSH key authentication worked.

## Rollback

If a public cutover fails, disable **only** the new Tandoori Junction public Nginx symlink, test Nginx and reload it. The loopback staging host remains available for diagnosis. For a later code release, point `/srv/tandoori-junction/current` back to the previous release and reload PHP 8.5 FPM; shared `.env` and storage remain intact. There were no schema or data migrations. Do not stop or reconfigure existing sites' PHP pools.
