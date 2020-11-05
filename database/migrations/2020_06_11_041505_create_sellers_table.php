<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name')->nullable()->default('Bassem');
            $table->string('email')->nullable()->default('mbdalzym376@gmail.com');
            $table->string('image')->nullable()->default('logo.jpg');
            $table->string('phone')->nullable();
            $table->text('descri')->nullable()->default('Hello Bassem');
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
        Schema::dropIfExists('sellers');
    }
}
