<?php

namespace App\Repositories;

use App\Models\Zakat;
use App\Repositories\BaseRepository;

/**
 * Class ZakatRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:42 pm WIB
*/

class ZakatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Zakat::class;
    }
}
