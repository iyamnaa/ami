<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    public $table = 'faq';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'topic',
        'body',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'topic' => 'required|string',
    ];
}
