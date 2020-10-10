<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopNews extends Model
{
    
    public $table = 'top_news';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'news_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'news_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'news_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function news()
    {
        return $this->belongsTo(\App\Models\News::class, 'news_id');
    }
}
