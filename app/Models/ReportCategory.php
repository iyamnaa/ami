<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class ReportCategory
 * @package App\Models
 * @version September 21, 2020, 10:40 pm WIB
 *
 * @property \Illuminate\Database\Eloquent\Collection $campaignReports
 * @property string $name
 */
class ReportCategory extends Model
{

    public $table = 'report_categories';
    
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
    public function campaignReports()
    {
        return $this->hasMany(\App\Models\CampaignReport::class, 'report_category_id');
    }
}
