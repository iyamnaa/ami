<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignUpdate extends Model
{

  protected $fillable = ['title','body'];
  public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
