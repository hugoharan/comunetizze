<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string("telefone");
            $table->string("path")->default('theme/images/');
            $table->string("filename")->default('user.png');
            $table->string("tipo")->nullable();

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
          $table->dropcolumn('telefone');
          $table->dropcolumn('path');
          $table->dropcolumn('filename');
          $table->dropcolumn('tipo');
        });
    }
}
