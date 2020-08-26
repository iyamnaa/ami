<?php

namespace App\Repositories;

use App\Models\Zakat;
use App\Repositories\BaseRepository;

/**
 * Class ZakatRepository
 * @package App\Repositories
 * @version July 21, 2020, 4:33 am UTC
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
