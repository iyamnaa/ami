<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignUpdate extends Model
{
  public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
