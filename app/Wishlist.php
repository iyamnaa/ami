<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

  protected $fillable = ['user_id','campaign_id'];
  public function user()
    {
        return $this->belongsTo(User::class);
    }

  public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
