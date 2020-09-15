<?php

namespace App\Observers;

use App\ReportCategory;

class ReportCategoryObserver
{
    /**
     * Handle the report category "created" event.
     *
     * @param  \App\ReportCategory  $reportCategory
     * @return void
     */
    public function created(ReportCategory $reportCategory)
    {
        //
    }

    /**
     * Handle the report category "updated" event.
     *
     * @param  \App\ReportCategory  $reportCategory
     * @return void
     */
    public function updated(ReportCategory $reportCategory)
    {
        //
    }

    /**
     * Handle the report category "deleted" event.
     *
     * @param  \App\ReportCategory  $reportCategory
     * @return void
     */
    public function deleted(ReportCategory $reportCategory)
    {
        //
    }

    /**
     * Handle the report category "restored" event.
     *
     * @param  \App\ReportCategory  $reportCategory
     * @return void
     */
    public function restored(ReportCategory $reportCategory)
    {
        //
    }

    /**
     * Handle the report category "force deleted" event.
     *
     * @param  \App\ReportCategory  $reportCategory
     * @return void
     */
    public function forceDeleted(ReportCategory $reportCategory)
    {
        //
    }
}
