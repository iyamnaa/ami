<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Zakat
 * @package App\Models
 * @version July 21, 2020, 4:33 am UTC
 *
 * @property \App\Models\User $user
 * @property integer $number
 * @property string $transaction_id
 * @property string $name
 * @property string $telephone
 * @property string $address
 * @property boolean $as_anonymous
 * @property string $NIA
 * @property string $amil_name
 * @property string $status
 * @property string $akad
 * @property integer $amount
 * @property integer $qty
 * @property integer $user_id
 */
class Zakat extends Model
{

    public $table = 'zakats';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'number',
        'transaction_id',
        'name',
        'telephone',
        'address',
        'as_anonymous',
        'NIA',
        'amil_name',
        'status',
        'akad',
        'amount',
        'qty',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'integer',
        'transaction_id' => 'string',
        'name' => 'string',
        'telephone' => 'string',
        'address' => 'string',
        'as_anonymous' => 'boolean',
        'NIA' => 'string',
        'amil_name' => 'string',
        'status' => 'string',
        'akad' => 'string',
        'amount' => 'integer',
        'qty' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number' => 'required',
        'transaction_id' => 'required',
        'name' => 'required',
        'telephone' => 'required',
        'address' => 'required',
        'as_anonymous' => 'required',
        'NIA' => 'required',
        'amil_name' => 'required',
        'status' => 'required',
        'akad' => 'required',
        'amount' => 'required',
        'qty' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
