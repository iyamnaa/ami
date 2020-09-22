<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class CampaignReport
 * @package App\Models
 * @version July 21, 2020, 4:37 am UTC
 *
 * @property \App\Models\Campaign $campaign
 * @property \App\Models\ReportCategory $reportCategory
 * @property \App\Models\User $user
 * @property string $body
 * @property integer $user_id
 * @property integer $campaign_id
 * @property integer $report_category_id
 */
class CampaignReport extends Model
{

    public $table = 'campaign_reports';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'number_of_recipients',
        'body',
        'user_id',
        'campaign_id',
        'report_category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number_of_recipients' => 'integer',
        'body' => 'string',
        'user_id' => 'integer',
        'campaign_id' => 'integer',
        'report_category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'body' => 'required',
        'number_of_recipients' => 'required',
        'user_id' => 'required',
        'campaign_id' => 'required',
        'report_category_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function campaign()
    {
        return $this->belongsTo(\App\Models\Campaign::class, 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function reportCategory()
    {
        return $this->belongsTo(\App\Models\ReportCategory::class, 'report_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
