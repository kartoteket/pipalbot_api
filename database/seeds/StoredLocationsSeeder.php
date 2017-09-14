<?php

use Illuminate\Database\Seeder;

class StoredLocationsSeeder extends Seeder {

  public function run() {
    factory('App\StoredLocations', 10)->create();
  }
}
