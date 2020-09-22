<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Event
 * @package App\Models
 * @version September 21, 2020, 10:43 pm WIB
 *
 * @property string $name
 * @property string $description
 * @property boolean $active
 */
class Event extends Model
{

    public $table = 'events';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'description',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'description' => 'required|string',
        'active' => 'required|boolean'
    ];

    
}
