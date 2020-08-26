<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->index('user_id');
            $table->index('campaign_id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('campaign_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('wishlists', function (Blueprint $table)
        // {
        //     $table->dropIndex(['user_id']);
        //     $table->dropIndex(['campaign_id']);
        // });
        Schema::dropIfExists('wishlists');
    }
}
