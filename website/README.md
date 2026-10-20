# Tandoori Junction website

Laravel12/Blade/Tailwind/Alpine. Home, Menu, Our Story, Catering and Visit Us. Pages-only delivery; no database/admin/booking/ordering integration.

From this directory:

```sh
composer install
npm ci
cp .env.example .env # only if .env does not already exist
php artisan key:generate # only for a newly created .env
npm run build
php artisan serve --host=127.0.0.1 --port=8000
```

Use file sessions/cache and sync queue (configured in existing local.env); no database needed. Do not overwrite an existing .env/key. PHP8.2+ and Composer/Node required. Current local PHP8.5/Laravel12.70.

```sh
npm run build
php artisan test
php artisan view:cache
```

Menu source: resources/data/menu.json, transcribed from ../docs/content/MENU-DATA.md;169 source records/18leaves/12 groups. The complete menu is rendered without search; category links jump to corresponding source-photo sections. Preserve source IDs, decimal-string prices and review notes when editing; do not infer variants or dietary labels. Full source audit ../docs/research/MENU-AUDIT.md.

Food manifests ../docs/content/USED-ASSETS.json and PAGE-ASSETS.json; supplied PDF photos only. The site uses the browser's normal system sans-serif stack and no authored motion. Source documents/history/progress are in parent project docs; read ../AGENTS.md before changes.

The unchanged original PDF is private storage/app/private/menu-proof.pdf and locally available at /menu-proof; production404. Public HTML menu remains noindex pending final content/publication review. Old approval preview URL redirects to homepage. No deployment performed; do not remove proof/privacy gates or noindex simply to “finish” development.
