<?php

namespace Jerickcm\Yeastartg200\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class ModuleProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishResources();
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(base_path() . '/vendor/jerickcm/yeastartg200/config/config.php', 'smsmodulepackage');
    }

    public function publishResources()
    {

        if ($this->app->runningInConsole()) {

            if (!class_exists('CreateMobilephonesTable')) {
                $this->publishes([
                    base_path() . '/vendor/jerickcm/yeastartg200/database/stub/create_mobilephones_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_mobilephones_table.php'),
                ], 'migrations');
            }

            if (!class_exists('CreateSmsLogTable')) {
                $this->publishes([
                    base_path() . '/vendor/jerickcm/yeastartg200/database/stub/create_sms_log_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_sms_log_table.php'),
                ], 'migrations');
            }

            $this->publishes([
                base_path() . '/vendor/jerickcm/yeastartg200/database/seeders/SimcardSeeder.php' => database_path('seeders/SimcardSeeder.php'),
            ], 'seeds');

            $this->publishes([
                base_path() . '/vendor/jerickcm/yeastartg200/config/config.php' => config_path('smsmodulepackage.php'),
            ], 'config');
        }
    }
}
