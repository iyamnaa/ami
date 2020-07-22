<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

  protected $fillable = ['title','short_desc','image_cover','body','target','deadline','campaign_category_id','user_id'];

  protected $dates = ['deadline'];

  public function campaign_category()
    {
        return $this->belongsTo(CampaignCategory::class,'category_id');
    }

  public function user()
    {
        return $this->belongsTo(User::class);
    }

  public function campaign_update()
    {
        return $this->hasMany(CampaignUpdate::class);
    }

  public function donation()
    {
        return $this->hasMany(Donation::class);
    }

  public function campaign_report()
    {
        return $this->hasMany(CampaignReport::class);
    }

  public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

}
