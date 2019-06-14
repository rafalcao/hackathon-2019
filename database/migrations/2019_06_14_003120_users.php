<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('picture')->nullable()->change();
            $table->string('telephone')->nullable()->change();
            $table->text('skills')->nullable()->change();
            $table->string('role')->nullable()->change();
            $table->string('department')->nullable()->change();
            $table->string('organization')->nullable()->change();
            $table->string('location')->nullable()->change();
            $table->integer('zone_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
