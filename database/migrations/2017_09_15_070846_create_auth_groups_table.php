<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('new auth group');
            // own db
            $table->tinyInteger('can_add_own_db')->nullable();
            $table->tinyInteger('can_delete_own_db')->nullable();
            $table->tinyInteger('can_edit_own_db')->nullable();
            // user
            $table->tinyInteger('can_add_user')->nullable();
            $table->tinyInteger('can_delete_user')->nullable();
            $table->tinyInteger('can_edit_user')->nullable();
            // group data
            $table->tinyInteger('can_delete_group_data')->nullable();
            $table->tinyInteger('can_edit_group_data')->nullable();
            // group database
            $table->tinyInteger('can_delete_group_db')->nullable();
            $table->tinyInteger('can_edit_group_db')->nullable();
            // global priv (superuser)
            $table->tinyInteger('has_global_privileges')->nullable();

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
        Schema::dropIfExists('auth_groups');
    }
}
