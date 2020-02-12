<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
			$table->double('serves');
			$table->string('prepare_time');
			$table->string('cooking_time');
			$table->longText('gallery')->nullable();
            $table->string('featured_image')->default('default.png');
            $table->text('description');
			$table->text('ingredients');
            $table->text('directions');
            $table->integer('visited')->default(0);
            $table->boolean('status')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->string('difficulty')->nullable();
            $table->text('video')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('recipes');
    }
}
