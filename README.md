# quan-ly-dat-ban
 Website quản lý nhà hàng và đặt bàn trực tuyến

cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=RestaurantSeeder
php artisan db:seed --class=TableSeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=PermissionSeeder
npm install
npm run dev
php artisan queue:work
php artisan schedule:work
composer update

❤️❤️❤️