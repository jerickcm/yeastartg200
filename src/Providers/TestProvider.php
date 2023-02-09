<?php

namespace Jerickcm\Yeastartg200\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class TestProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishResources();
        // $this->loadMigrationsFrom(__DIR__.'../../database/migrations');
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // $this->loadMigrationsFrom(base_path() . '/vendor/jerickcm/migrate/database/migration');
        // $this->loadViewsFrom(__DIR__.'/../views', 'inspire');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
    }

    public function register()
    {

    }

    public function publishResources()
    {

        if ($this->app->runningInConsole()) {

            // if (!class_exists('CreatePostsTable')) {
            //     $this->publishes([
            //         base_path() . '/vendor/jerickcm/migrate/database/stub/create_posts_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_posts_table.php'),
            //     ], 'migrations');
            // }

            if (!class_exists('CreateMobilephonesTable')) {
                $this->publishes([
                    base_path() . '/vendor/jerickcm/yeastartg200/database/stub/create_mobilephones_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_mobilephones_table.php'),
                ], 'migrations');
            }

            $this->publishes([
                base_path() . '/vendor/jerickcm/yeastartg200/database/seeders/SimcardSeeder.php' => database_path('seeders/SimcardSeeder.php'),
            ], 'seeds');

        }

    }
}
