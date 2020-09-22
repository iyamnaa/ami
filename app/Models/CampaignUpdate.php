<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class CampaignUpdate
 * @package App\Models
 * @version September 21, 2020, 10:41 pm WIB
 *
 * @property \App\Models\Campaign $campaign
 * @property string $image_cover
 * @property integer $number_of_recipients
 * @property string $title
 * @property string $body
 * @property integer $campaign_id
 */
class CampaignUpdate extends Model
{

    public $table = 'campaign_updates';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'image_cover',
        'number_of_recipients',
        'title',
        'body',
        'campaign_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image_cover' => 'string',
        'number_of_recipients' => 'integer',
        'title' => 'string',
        'body' => 'string',
        'campaign_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image_cover' => 'nullable|string|max:191',
        'number_of_recipients' => 'required|integer',
        'title' => 'required|string|max:191',
        'body' => 'required|string',
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
