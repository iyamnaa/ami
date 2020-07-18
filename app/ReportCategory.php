<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportCategory extends Model
{
  public function report()
    {
        return $this->hasMany(CampaignReport::class);
    }
}
