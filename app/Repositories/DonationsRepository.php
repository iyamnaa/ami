<?php

namespace App\Repositories;

use App\Models\Donations;
use App\Repositories\BaseRepository;

/**
 * Class DonationsRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:41 pm WIB
*/

class DonationsRepository extends BaseRepository
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
        'administration_fee',
        'user_id',
        'campaign_id'
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
        return Donations::class;
    }
}
