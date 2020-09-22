<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class TopCampaign
 * @package App\Models
 * @version September 21, 2020, 10:39 pm WIB
 *
 * @property \App\Models\Campaign $campaign
 * @property integer $campaign_id
 */
class TopCampaign extends Model
{

    public $table = 'top_campaigns';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'campaign_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'campaign_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'campaign_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function campaign()
    {
        return $this->belongsTo(\App\Models\Campaign::class, 'campaign_id');
    }
}
