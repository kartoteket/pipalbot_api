<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->default('New table');          // the table name
            $table->string('description', 255)->nullable();             // the table description
            $table->string('state', 64)->default('partial');            // Holds the state of the database, partial | production | recycled | locked'
            $table->integer('created_by_user');                         // The user that created the table
            $table->integer('owner_organisation');                      // The organization that owns the data
            $table->box('constraints')->nullable();                     // The constraints, geographic of the data contained in the table
            $table->text('store')->nullable();                          // used to store blob data during creation of tables
            $table->integer('tags')->nullable();                        // may support tags for the dataset
            $table->double('verification_score', 5, 4)->default(0.0000); // the verification score (how trustwothy is the data)
            $table->boolean('verified')->default(false);                // boolean, wether or not the table data has been verified
            $table->integer('verified_by_user')->nullable();            // The user that performed the verification
            $table->timestamp('verified_at')->nullable();               // The date the verification was made
            $table->boolean('is_public')->default(false);               // Boolean, is the table public or not
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
        Schema::dropIfExists('tables');
    }
}
