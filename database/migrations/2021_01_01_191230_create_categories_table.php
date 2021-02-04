<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // creat update _at side. it do this auto :)

            $table->integer('parent_id')->default(0);

            $table->string('title',100);
            $table->string('keywords',100)->nullable();
            $table->string('description',100)->nullable();

            $table->string('slug',50)->nullable();
            $table->string('image',100)->nullable();
            $table->string('status',5)->nullable()->default('false');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
