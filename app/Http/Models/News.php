<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class News
 * @package App\Models
 * @version July 20, 2020, 9:53 am UTC
 *
 * @property string $title
 * @property string $image_cover
 * @property string $body
 */
class News extends Model
{

    public $table = 'news';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title',
        'image_cover',
        'body'
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
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image_cover' => 'required',
        'body' => 'required'
    ];

    
}
