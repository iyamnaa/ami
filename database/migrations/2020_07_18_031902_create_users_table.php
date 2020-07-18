<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->binary('image_cover');
            $table->string('name');
            $table->text('bio');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->string('address');
            $table->string('phone');
            $table->timestamps();

            $table->index('category_id');
            $table->index('user_id');
            $table->foreign('category_id')->references('id')->on('campaign_categories');
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
