
## add app.php providers

 Jerickcm\Yeastartg200\Providers\TestProvider::class,
       1
## add vendor publish       
 php artisan vendor:publish --provider="Jerickcm\Yeastartg200\Providers\TestProvider" --tag="migrations"
 php artisan vendor:publish --provider="Jerickcm\Yeastartg200\Providers\TestProvider" --tag="seed"
