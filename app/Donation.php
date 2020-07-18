<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
  public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

  public function user()
    {
        return $this->belongsTo(User::class);
    }
}
