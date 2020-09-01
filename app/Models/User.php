<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User
 * @package App\Models
 * @version July 21, 2020, 4:31 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $campaignReports
 * @property \Illuminate\Database\Eloquent\Collection $campaigns
 * @property \Illuminate\Database\Eloquent\Collection $donations
 * @property \Illuminate\Database\Eloquent\Collection $wishlists
 * @property \Illuminate\Database\Eloquent\Collection $zakats
 * @property string $name
 * @property string $email
 * @property string $gender
 * @property string $telephone
 * @property string $address
 * @property string $bio
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $role
 * @property string $remember_token
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'photo',
        'bg_cover',
        'username',
        'email',
        'gender',
        'telephone',
        'address',
        'bio',
        'email_verified_at',
        'password',
        'role',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'photo' => 'string',
        'bg_cover' => 'string',
        'username' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'telephone' => 'string',
        'address' => 'string',
        'bio' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'role' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'username' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'telephone' => 'required',
        'address' => 'required',
        'bio' => 'required',
        'password' => 'required',
        'role' => 'required'
    ];

    public function getProfileName($name = "")
    {
        return strtolower(str_replace(' ', '', $name));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function campaignReports()
    {
        return $this->hasMany(\App\Models\CampaignReport::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function campaigns()
    {
        return $this->hasMany(\App\Models\Campaign::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function donations()
    {
        return $this->hasMany(\App\Models\Donation::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function wishlists()
    {
        return $this->hasMany(\App\Models\Wishlist::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function zakats()
    {
        return $this->hasMany(\App\Models\Zakat::class, 'user_id');
    }
}
