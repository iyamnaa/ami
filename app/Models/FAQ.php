<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class FAQ
 * @package App\Models
 * @version October 10, 2020, 8:48 pm WIB
 *
 * @property string $topic
 * @property string $body
 */
class FAQ extends Model
{

    public $table = 'faq';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'topic',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'topic' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'topic' => 'required|string|max:191',
        'body' => 'required|string'
    ];

    
}
