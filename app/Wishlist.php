<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
  public function user()
    {
        return $this->belongsTo(User::class);
    }

  public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
