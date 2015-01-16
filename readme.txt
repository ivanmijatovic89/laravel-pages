Laravel Pages Package
-- testing

Add to app.php
    'Mijat\Page\PageServiceProvider'

Run Migration:
    php artisan migrate --package="mijat/page"

Publish public - assets to /public/packages/mijat/pages
    php artisan asset:publish mijat/page