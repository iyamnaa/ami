<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Campaign
 * @package App\Models
 * @version July 21, 2020, 4:29 am UTC
 *
 * @property \App\Models\CampaignCategory $campaignCategory
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $campaignReports
 * @property \Illuminate\Database\Eloquent\Collection $donations
 * @property \Illuminate\Database\Eloquent\Collection $wishlists
 * @property string $title
 * @property string $short_desc
 * @property string $image_cover
 * @property string $body
 * @property integer $target
 * @property string|\Carbon\Carbon $deadline
 * @property string|\Carbon\Carbon $confirmed_at
 * @property integer $user_id
 * @property integer $campaign_category_id
 */
class Campaign extends Model
{

    public $table = 'campaigns';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title',
        'short_desc',
        'image_cover',
        'body',
        'target',
        'deadline',
        'confirmed_at',
        'user_id',
        'campaign_category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'short_desc' => 'string',
        'image_cover' => 'string',
        'body' => 'string',
        'target' => 'integer',
        'deadline' => 'datetime',
        'confirmed_at' => 'datetime',
        'user_id' => 'integer',
        'campaign_category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'short_desc' => 'required',
        'image_cover' => 'required',
        'body' => 'required',
        'target' => 'required',
        'deadline' => 'required',
        'user_id' => 'required',
        'campaign_category_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function campaignCategory()
    {
        return $this->belongsTo(\App\Models\CampaignCategory::class, 'campaign_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function campaignReports()
    {
        return $this->hasMany(\App\Models\CampaignReport::class, 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function donations()
    {
        return $this->hasMany(\App\Models\Donation::class, 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function wishlists()
    {
        return $this->hasMany(\App\Models\Wishlist::class, 'campaign_id');
    }
}
