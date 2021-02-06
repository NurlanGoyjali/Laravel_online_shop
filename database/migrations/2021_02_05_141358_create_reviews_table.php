<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {


            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('responsible');
            $table->integer('product_id');
            $table->string('subject',100);
            $table->string('review');
            $table->string('IP',20);
            $table->string('status',5)->default('New');

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
        Schema::dropIfExists('reviews');
    }
}
