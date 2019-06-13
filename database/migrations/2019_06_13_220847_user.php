<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('picture');
            $table->string('telephone');
            $table->text('skills');
            $table->string('role');
            $table->string('department');
            $table->string('organization');
            $table->string('location');
            $table->integer('zone_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('picture');
            $table->dropColumn('telephone');
            $table->dropColumn('skills');
            $table->dropColumn('role');
            $table->dropColumn('department');
            $table->dropColumn('organization');
            $table->dropColumn('location');
            $table->dropColumn('zone_id');
        });
    }
}
