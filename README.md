1 - Go to `Providers/AppServiceProvider.php` and comment the function.
2 - in terminal do `composer i && cp .env.example .env && npm i && php artisan key:generate && php artisan migrate `
3 - Go to `Providers/AppServiceProvider.php` remove comment from the function.
4 - refresh && seed