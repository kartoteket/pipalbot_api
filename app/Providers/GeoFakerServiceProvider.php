<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GeoFakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // grab the class from the vendor dir
        require base_path('vendor/kartoteket/generators/Geography.php');
        // $this->app::singleton('geography')
        // $newClass
    //     $this->app->singleton('Faker', function($app) {
    //     $faker = \Faker\Factory::create();
    //     $newClass = new class($faker) extends \Faker\Provider\Base {
    //         public function title($nbWords = 5)
    //         {
    //             $sentence = $this->generator->sentence($nbWords);
    //             return substr($sentence, 0, strlen($sentence) - 1);
    //         }
    //     };

    //     $faker->addProvider($newClass);
    //     return $faker;
    // });
        // dd(Geography);
    }
}
