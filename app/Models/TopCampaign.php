<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
