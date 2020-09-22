<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Zakat
 * @package App\Models
 * @version September 21, 2020, 10:42 pm WIB
 *
 * @property \App\Models\User $user
 * @property integer $number
 * @property string $transaction_id
 * @property string $name
 * @property string $email
 * @property string $telephone
 * @property string $address
 * @property string $NIA
 * @property string $amil_name
 * @property string $status
 * @property string $akad
 * @property integer $amount
 * @property integer $administration_fee
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
        'email',
        'telephone',
        'address',
        'NIA',
        'amil_name',
        'status',
        'akad',
        'amount',
        'administration_fee',
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
        'email' => 'string',
        'telephone' => 'string',
        'address' => 'string',
        'NIA' => 'string',
        'amil_name' => 'string',
        'status' => 'string',
        'akad' => 'string',
        'amount' => 'integer',
        'administration_fee' => 'integer',
        'qty' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number' => 'required|integer',
        'transaction_id' => 'required|string|max:191',
        'name' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'telephone' => 'required|string|max:191',
        'address' => 'required|string',
        'NIA' => 'nullable|string|max:191',
        'amil_name' => 'nullable|string|max:191',
        'status' => 'required|string',
        'akad' => 'required|string|max:191',
        'amount' => 'required|integer',
        'administration_fee' => 'required|integer',
        'qty' => 'required|integer',
        'user_id' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
