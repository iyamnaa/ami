<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class CampaignCategory
 * @package App\Models
 * @version September 21, 2020, 10:34 pm WIB
 *
 * @property \Illuminate\Database\Eloquent\Collection $campaigns
 * @property string $name
 */
class CampaignCategory extends Model
{

    public $table = 'campaign_categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function campaigns()
    {
        return $this->hasMany(\App\Models\Campaign::class, 'campaign_category_id');
    }
}
