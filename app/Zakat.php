<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{

  protected $fillable = ['name', 'email', 'telephone', 'address', 'as_anonymous',
                         'NIA', 'amil_name',
                         'status', 'akad', 'amount', 'qty',
                         'user_id'];

  public function user()
    {
        return $this->belongsTo(User::class);
    }
}
