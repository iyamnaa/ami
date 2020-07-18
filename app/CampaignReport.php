<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignReport extends Model
{
  public function category()
    {
        return $this->belongsTo(ReportCategory::class);
    }

  public function user()
    {
        return $this->belongsTo(User::class);
    }

  public function campaign()
    {
        return $this->belongsTo(ReportCategory::class);
    }
}
