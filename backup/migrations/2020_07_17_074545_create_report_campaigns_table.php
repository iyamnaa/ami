<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_reports', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->timestamps();

            $table->index('user_id');
            $table->index('campaign_id');
            $table->index('report_category_id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('campaign_id')->constrained();
            $table->foreignId('report_category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('report_campaigns', function (Blueprint $table)
        // {
        //     $table->dropIndex(['user_id']);
        //     $table->dropIndex(['campaign_id']);
        //     $table->dropIndex(['report_category_id']);
        // });
        Schema::dropIfExists('campaign_reports');
    }
}
