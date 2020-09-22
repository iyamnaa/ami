<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class News
 * @package App\Models
 * @version September 21, 2020, 10:39 pm WIB
 *
 * @property string $title
 * @property string $image_cover
 * @property string $body
 * @property boolean $is_deleted
 */
class News extends Model
{

    public $table = 'news';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title',
        'image_cover',
        'body',
        'is_deleted'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'image_cover' => 'string',
        'body' => 'string',
        'is_deleted' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:191',
        'image_cover' => 'nullable|string|max:191',
        'body' => 'required|string',
        'is_deleted' => 'required|boolean'
    ];

    
}
