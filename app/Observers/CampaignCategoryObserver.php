<?php

namespace App\Observers;

use App\Models\CampaignCategory;
use App\Models\Campaign;

class CampaignCategoryObserver
{
    /**
     * Handle the campaign category "created" event.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return void
     */
    public function created(CampaignCategory $campaignCategory)
    {
        //
    }

    /**
     * Handle the campaign category "updated" event.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return void
     */
    public function updated(CampaignCategory $campaignCategory)
    {

    }

    /**
     * Handle the campaign category "deleted" event.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return void
     */
    public function deleted(CampaignCategory $campaignCategory)
    {
        $campaigns = Campaign::where('campaign_category_id', $campaignCategory->id);
        $campaigns->update(['campaign_category_id' => 1]);   
    }

    /**
     * Handle the campaign category "restored" event.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return void
     */
    public function restored(CampaignCategory $campaignCategory)
    {
        //
    }

    /**
     * Handle the campaign category "force deleted" event.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return void
     */
    public function forceDeleted(CampaignCategory $campaignCategory)
    {
        //
    }
}
