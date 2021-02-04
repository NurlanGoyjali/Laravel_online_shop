<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->string('title',100);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('slug',50)->nullable();
            $table->string('image',100)->nullable();
            $table->string('status')->nullable()->default(false);

            $table->integer('user_id')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('category_id')->nullable();
            $table->integer('minquantity')->default(3);
            $table->integer('tax')->default(5);
            $table->text('detail',300)->nullable();

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
        Schema::dropIfExists('products');
    }
}
