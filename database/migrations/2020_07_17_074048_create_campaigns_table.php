<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_desc');
            $table->string('image_cover')->nullable();
            $table->text('body');
            $table->integer('target');
            $table->datetime('deadline');
            $table->boolean('is_deleted')->default(0);
            $table->enum('status', ['diminta', 'konfirmasi', 'selesai', 'dibayar'])->default('diminta');
            $table->timestamps();

            $table->index('campaign_category_id');
            $table->index('user_id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('campaign_category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('campaigns', function (Blueprint $table)
        // {
        //     $table->dropIndex(['campaign_category_id']);
        //     $table->dropIndex(['user_id']);
        // });
        Schema::dropIfExists('campaigns');
    }
}
