<?php



use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
use Phaza\LaravelPostgis\Schema\Blueprint; // use the Postgis schema
use Illuminate\Database\Migrations\Migration;

class CreateStoredLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stored_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('osm_id');                   // the osm_id, dunno if it makes sense, but here we go
            $table->string('name', 255);                    // Tha name of the osm entity
            $table->string('datatype', 16);                 // datatype (can be POINT, MULTIPOINT, PATH, MULTIPATH, POLYGON, MULTIPOLYGON)
            $table->polygon('constraints');                 // box (describing the constraints of the geometry)
            $table->string('country', 255)->nullable();     // name ofg the country
            $table->string('iso_3', 3)->nullable();         // iso3 code for the country
            $table->json('address')->nullable();            // address, as osm describes it
            $table->string('class')->default('unknown');    // Describes the type og geometry, administrative, city , country, town
            $table->string('display_name');                 // The name used to display the data
            $table->geography('geography');                 // this table holds whatever geography you'll need
            $table->text('geojson')->nullable();            // A text blob containing geojson we expect to be well formed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_locations');
    }
}
