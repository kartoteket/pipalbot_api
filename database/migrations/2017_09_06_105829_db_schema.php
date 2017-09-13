<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schema', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('table_id');
            $table->string('name', 255);
            $table->string('description', 255)->nullable();
            $table->string('type', 32)->default('string');
            $table->string('p_type', 32)->default('string');
            $table->string('column', 255);
            $table->integer('position');
            $table->string('state', 32)->default('INIT');
            $table->boolean('visible')->default(TRUE);
            $table->boolean('verified')->default(FALSE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schema');
    }
}
