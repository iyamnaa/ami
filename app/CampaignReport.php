<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignReport extends Model
{
  protected $fillable = ['body','report_category_id','user_id','campaign_id'];
  
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
