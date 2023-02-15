# how to install
## add app.php providers in laravel

Jerickcm\Yeastartg200\Providers\ModuleProvider::class

## use command  

composer require jerickcm/yeastartg200

then 

composer dump autoload

php artisan optimize 
 
## add vendor publish       
php artisan vendor:publish --provider="Jerickcm\Yeastartg200\Providers\ModuleProvider" --tag="migrations"

#  run migration and the seeder class

php artisan migrate 
php artisan db:seed --class=SimcardSeeder



# how to use 

send post request 

let response = await axios.post("/sending_sms", {
    message: " test sms ",
    contact_number: "09958449044",
    reference_id: "" 
});

//add reference id any identifierid to log sms sending and to use as re-return in response.

the return is 

return response()->json([
    'reference_id' =>
    'message' => 
    'contact_number' => 
    'telco' => 
    'simchannel' =>
    'success' => 
    'request_done' =>
    '_benchmark' =>
]);


note success means the sms has been sent which returns true or false


## laravel config file named smsmodule.php e.g config/custom.php

config variables are

'yeastar_api_user' => env('YEASTAR_API_USER'),
'yeastar_api_password' => env('YEASTAR_API_PASSWORD'),

and ask developer for the api account credentials
