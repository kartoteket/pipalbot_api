<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rows', function (Blueprint $table) {
            $table->increments('id');
            //
            // 30 available rows for simple integers
            //
            $table->integer('int_1')->nullable();
            $table->integer('int_2')->nullable();
            $table->integer('int_3')->nullable();
            $table->integer('int_4')->nullable();
            $table->integer('int_5')->nullable();
            $table->integer('int_6')->nullable();
            $table->integer('int_7')->nullable();
            $table->integer('int_8')->nullable();
            $table->integer('int_9')->nullable();
            $table->integer('int_10')->nullable();
            $table->integer('int_11')->nullable();
            $table->integer('int_12')->nullable();
            $table->integer('int_13')->nullable();
            $table->integer('int_14')->nullable();
            $table->integer('int_15')->nullable();
            $table->integer('int_16')->nullable();
            $table->integer('int_17')->nullable();
            $table->integer('int_18')->nullable();
            $table->integer('int_19')->nullable();
            $table->integer('int_20')->nullable();
            $table->integer('int_21')->nullable();
            $table->integer('int_22')->nullable();
            $table->integer('int_23')->nullable();
            $table->integer('int_24')->nullable();
            $table->integer('int_25')->nullable();
            $table->integer('int_26')->nullable();
            $table->integer('int_27')->nullable();
            $table->integer('int_28')->nullable();
            $table->integer('int_29')->nullable();
            $table->integer('int_30')->nullable();
            //
            // 20 rows available for simple strings of 255 char length
            //
            $table->string('string_1', 255)->nullable();
            $table->string('string_2', 255)->nullable();
            $table->string('string_3', 255)->nullable();
            $table->string('string_4', 255)->nullable();
            $table->string('string_5', 255)->nullable();
            $table->string('string_6', 255)->nullable();
            $table->string('string_7', 255)->nullable();
            $table->string('string_8', 255)->nullable();
            $table->string('string_9', 255)->nullable();
            $table->string('string_10', 255)->nullable();
            $table->string('string_11', 255)->nullable();
            $table->string('string_12', 255)->nullable();
            $table->string('string_13', 255)->nullable();
            $table->string('string_14', 255)->nullable();
            $table->string('string_15', 255)->nullable();
            $table->string('string_16', 255)->nullable();
            $table->string('string_17', 255)->nullable();
            $table->string('string_18', 255)->nullable();
            $table->string('string_19', 255)->nullable();
            $table->string('string_20', 255)->nullable();
            //
            // 20 rows of floats
            //
            $table->float('float_1')->nullable();
            $table->float('float_2')->nullable();
            $table->float('float_3')->nullable();
            $table->float('float_4')->nullable();
            $table->float('float_5')->nullable();
            $table->float('float_6')->nullable();
            $table->float('float_7')->nullable();
            $table->float('float_8')->nullable();
            $table->float('float_9')->nullable();
            $table->float('float_10')->nullable();
            $table->float('float_11')->nullable();
            $table->float('float_12')->nullable();
            $table->float('float_13')->nullable();
            $table->float('float_14')->nullable();
            $table->float('float_15')->nullable();
            $table->float('float_16')->nullable();
            $table->float('float_17')->nullable();
            $table->float('float_18')->nullable();
            $table->float('float_19')->nullable();
            $table->float('float_20')->nullable();
            //
            // 3 JSON blobs
            //
            $table->json('json_1')->nullable();
            $table->json('json_2')->nullable();
            $table->json('json_3')->nullable();
            //
            // 2 text blobs
            //
            $table->text('text_1')->nullable();
            $table->text('text_2')->nullable();
            //
            // State can be ACTIVE | MODIFIED
            //
            $table->string('state', 255)->default('ACTIVE'); //
            $table->integer('modified_id')->nullable(); // if state is MODIFIED, this id will point to the 'id' of the 'ACTIVE' row that was modified
            $table->integer('revision')->default(1); // if a row is 'MODIFIED' this is the modified revision number
            $table->integer('user_id'); // the user that created and updated
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
        Schema::dropIfExists('rows');
    }
}
