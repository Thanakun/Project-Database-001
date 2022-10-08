<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('ISBN');
            $table->string('name', 255);
            $table->string('cover', 255)->nullable();
            $table->decimal('price', 6, 2);
            $table->integer('pages_num');
            $table->string('publisher_name', 255);
            $table->date('publisher_date')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('author_id')->unsigned();
            $table->integer('stock');
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
