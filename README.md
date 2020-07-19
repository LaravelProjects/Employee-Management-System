# Employee-Management-System
Employee Management System made in Laravel with AdminLTE Panel.

Steps for Installtion
```
git clone https://github.com/LaravelProjects/Employee-Management-System.git employee-mgmt-system
cd employee-mgmt-system
composer install
cp .env.example .env
php artisan migrate --seed
php artisan key:generate
php artisan storage:link
php artisan serve
```
