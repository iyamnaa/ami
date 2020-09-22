<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User
 * @package App\Models
 * @version September 21, 2020, 10:42 pm WIB
 *
 * @property \Illuminate\Database\Eloquent\Collection $campaignReports
 * @property \Illuminate\Database\Eloquent\Collection $campaigns
 * @property \Illuminate\Database\Eloquent\Collection $donations
 * @property \Illuminate\Database\Eloquent\Collection $wishlists
 * @property \Illuminate\Database\Eloquent\Collection $zakats
 * @property string $name
 * @property string $username
 * @property string $photo
 * @property string $bg_cover
 * @property string $email
 * @property string $gender
 * @property string $telephone
 * @property string $address
 * @property string $bio
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property boolean $is_deleted
 * @property string $role
 * @property integer $contribution
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
        'username',
        'photo',
        'bg_cover',
        'email',
        'gender',
        'telephone',
        'address',
        'bio',
        'email_verified_at',
        'password',
        'is_deleted',
        'role',
        'contribution',
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
        'username' => 'string',
        'photo' => 'string',
        'bg_cover' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'telephone' => 'string',
        'address' => 'string',
        'bio' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'is_deleted' => 'boolean',
        'role' => 'string',
        'contribution' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'username' => 'required|string|max:191',
        'photo' => 'nullable|string|max:191',
        'bg_cover' => 'nullable|string|max:191',
        'email' => 'required|string|max:191',
        'gender' => 'required|string',
        'telephone' => 'required|string|max:191',
        'address' => 'required|string',
        'bio' => 'required|string',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:191',
        'is_deleted' => 'required|boolean',
        'role' => 'required|string',
        'contribution' => 'nullable|integer',
        'remember_token' => 'nullable|string|max:100'
    ];

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
