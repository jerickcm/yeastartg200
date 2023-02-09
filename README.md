# how to install
## add app.php providers in laravel

 Jerickcm\Yeastartg200\Providers\TestProvider::class

## use command  

composer require jerickcm/yeastartg200

then 

composer dump autoload

php artisan optimize 
 
## add vendor publish       
 php artisan vendor:publish --provider="Jerickcm\Yeastartg200\Providers\TestProvider" --tag="migrations"

#  run migration and the seeder class

php artisan migrate 
php artisan db:seed --class=SimcardSeeder

