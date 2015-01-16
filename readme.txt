Laravel Pages Package
-- testing

Add to app.php
    'Mijat\Page\PageServiceProvider'


-- missing publish view


Run Migration:
    php artisan migrate --package="mijat/page"

Publish public - assets to /public/packages/mijat/pages
    php artisan asset:publish mijat/page

 Publish CONFIG
    php artisan config:publish mijat/page