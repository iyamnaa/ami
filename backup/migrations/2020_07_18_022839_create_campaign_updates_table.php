<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_updates', function (Blueprint $table) {
            $table->id();
            $table->string('image_cover')->nullable();
            $table->integer('number_of_recipients')->default(0);
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            
            $table->index('campaign_id');
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
        // Schema::table('campaign_updates', function (Blueprint $table)
        // {
        //     $table->dropIndex(['campaign_update_id']);
        // });
        Schema::dropIfExists('campaign_updates');
    }
}
