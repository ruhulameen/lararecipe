<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('recipe_id')->unsigned();
            $table->biginteger('user_id');
            $table->foreign('recipe_id')
                ->references('id')->on('recipes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('recipe_user');
    }
}
