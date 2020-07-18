<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignCategory extends Model
{
  public function campaign()
    {
        return $this->hasMany(Campaign::class);
    }
}
