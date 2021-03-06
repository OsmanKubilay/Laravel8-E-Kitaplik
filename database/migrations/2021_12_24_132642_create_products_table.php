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
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('yazar',30)->nullable();
            $table->string('yayinevi',50)->nullable();
            $table->string('yayintarihi',50)->nullable();
            $table->string('hamurtipi',20)->nullable();
            $table->integer('sayfasayisi')->nullable();
            $table->integer('baskiyili')->nullable();
            $table->string('baskisayisi',20)->nullable();
            $table->string('dil',15)->nullable();
            $table->float('ebat')->nullable();
            $table->text('detail')->nullable();
            $table->string('slug')->nullable();
            $table->string('status',5)->nullable()->default('False');
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
