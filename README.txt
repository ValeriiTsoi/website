HOW TO APPLY (fix pack)
1) Unzip into your project root (will overwrite a few files):
   - resources/views/layouts/app.blade.php
   - resources/views/home.blade.php
   - resources/views/hobby.blade.php
   - public/images/hobby/*.svg

2) Rebuild frontend (on dev machine or CI):
   npm ci
   npm run build

3) Clear Laravel caches on TEST:
   sudo -iu deploy bash -lc '
     cd /var/www/website-test/current
     php artisan view:clear && php artisan route:clear && php artisan config:clear && php artisan optimize
   '

Notes:
- Ukrainian shows as "UA" label, but URL stays /uk to keep the standard locale code.
- Hobby page now has visual tiles and short placeholder texts.
- Slogan block has a dark scrim to ensure readability on light banner.
