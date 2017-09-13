<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);                                    // Name of the organisation
            $table->string('description')->nullable();                      // Description of the organisation
            $table->string('url', 255)->nullable();                         // Organisation email if available
            $table->string('email')->nullable();                            // Organisation email, if appliccable
            $table->string('logo')->nullable();                             // The logo for the organisation (if applicable)
            $table->integer('access_group');                                // The access group used by this organisation
            $table->integer('created_by_user');                             // The user that created the organisation
            $table->double('verification_score', 5, 4)->default(0.0000);    // the verification score (how trustwothy is the data)
            $table->boolean('verified')->default(false);                    // boolean, wether or not the table data has been verified
            $table->integer('verified_by_user')->nullable();                // The user that performed the verification
            $table->timestamp('verified_at')->nullable();                   // The date the verification was made
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
        Schema::dropIfExists('organisations');
    }
}
