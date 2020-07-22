<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

  protected $fillable = ['name','email','password','gender','phone','address','bio'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

  public function campaign()
    {
        return $this->hasMany(Campaign::class);
    }

  public function campaign_report()
    {
        return $this->hasMany(CampaignReport::class);
    }

  public function donation()
    {
        return $this->hasMany(Donation::class);
    }

  public function zakat()
    {
        return $this->hasMany(Zakat::class);
    }

  public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    use Notifiable;

}
