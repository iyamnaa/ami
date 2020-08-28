<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

  protected $fillable = ['number', 'transaction_id','name', 'email', 'telephone', 'address', 'as_anonymous',
                         'NIA', 'amil_name',
                         'status', 'akad','amount',
                         'user_id', 'campaign_id'];

  public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

  public function user()
    {
        return $this->belongsTo(User::class);
    }
}
