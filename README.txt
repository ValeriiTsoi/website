COMBINED PACK: UI polish + UA URLs + banners

FILES:
- app/Http/Middleware/SetLocale.php
- routes/web.php
- resources/views/layouts/app.blade.php
- resources/views/home.blade.php
- public/images/banners/hero-banner-light.svg, hero-banner-dark.svg
- resources/lang/{en,uk,es,ru}.patch.json  (adds key slogan.note)

APPLY:
1) Unzip over your project:
   Windows (PowerShell, repo root):
     Expand-Archive -Force .\website-ui-polish-ua-pack.zip .\
   Linux (TEST server):
     sudo unzip -o website-ui-polish-ua-pack.zip -d /var/www/website-test/current

2) Register middleware if not present (app/Http/Kernel.php):
   protected $routeMiddleware = [
     // ...
     'setlocale' => \App\Http\Middleware\SetLocale::class,
   ];

3) Merge language patches (adds "slogan.note"):
   Linux (jq):
     jq -s '.[0] * .[1]' resources/lang/en.json resources/lang/en.patch.json > /tmp/en.json && mv /tmp/en.json resources/lang/en.json
     jq -s '.[0] * .[1]' resources/lang/uk.json resources/lang/uk.patch.json > /tmp/uk.json && mv /tmp/uk.json resources/lang/uk.json
     jq -s '.[0] * .[1]' resources/lang/es.json resources/lang/es.patch.json > /tmp/es.json && mv /tmp/es.json resources/lang/es.json
     jq -s '.[0] * .[1]' resources/lang/ru.json resources/lang/ru.patch.json > /tmp/ru.json && mv /tmp/ru.json resources/lang/ru.json

   Windows: open resources/lang/*.json and add "slogan.note" from corresponding *.patch.json

4) Rebuild frontend + clear caches:
   npm ci
   npm run build
   php artisan route:clear && php artisan config:clear && php artisan view:clear && php artisan optimize

BEHAVIOR:
- URLs accept /en, /ua, /es, /ru (and /uk redirects to /ua with 301).
- Internally, 'ua' maps to 'uk' locale to keep translations working.
- Menu centered, language switcher on the right with clearer spacing.
- Home shows only banner + slogan + small note on right.

Enjoy!
