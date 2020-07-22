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
        'title',
        'body',
        'campaign_update_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'body' => 'string',
        'campaign_update_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'campaign_update_id' => 'required'
    ];

    
}
