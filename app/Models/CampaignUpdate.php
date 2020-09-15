<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class CampaignUpdate
 * @package App\Models
 * @version July 21, 2020, 4:38 am UTC
 *
 * @property string $title
 * @property string $body
 * @property integer $campaign_update_id
 */
class CampaignUpdate extends Model
{

    public $table = 'campaign_updates';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'number_of_recipients',
        'title',
        'image_cover',
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
        'number_of_recipients' => 'integer',
        'title' => 'string',
        'image_cover' => 'string',
        'body' => 'string',
        'campaign_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number_of_recipients' => 'required',
        'title' => 'required',
        'body' => 'required',
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
