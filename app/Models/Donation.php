<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Donation
 * @package App\Models
 * @version September 21, 2020, 10:41 pm WIB
 *
 * @property \App\Models\Campaign $campaign
 * @property \App\Models\User $user
 * @property integer $number
 * @property string $transaction_id
 * @property string $name
 * @property string $email
 * @property string $telephone
 * @property string $address
 * @property boolean $as_anonymous
 * @property string $NIA
 * @property string $amil_name
 * @property string $status
 * @property string $akad
 * @property integer $amount
 * @property integer $administration_fee
 * @property integer $user_id
 * @property integer $campaign_id
 */
class Donation extends Model
{

    public $table = 'donations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'number',
        'transaction_id',
        'name',
        'email',
        'telephone',
        'address',
        'as_anonymous',
        'NIA',
        'amil_name',
        'status',
        'akad',
        'amount',
        'administration_fee',
        'user_id',
        'campaign_id'
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
        'as_anonymous' => 'boolean',
        'NIA' => 'string',
        'amil_name' => 'string',
        'status' => 'string',
        'akad' => 'string',
        'amount' => 'integer',
        'administration_fee' => 'integer',
        'user_id' => 'integer',
        'campaign_id' => 'integer'
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
        'as_anonymous' => 'required|boolean',
        'NIA' => 'nullable|string|max:191',
        'amil_name' => 'nullable|string|max:191',
        'status' => 'required|string',
        'akad' => 'required|string|max:191',
        'amount' => 'required|integer',
        'administration_fee' => 'required|integer',
        'user_id' => 'nullable',
        'campaign_id' => 'required'
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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
