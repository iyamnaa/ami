<?php

namespace App\Repositories;

use App\Models\Donation;
use App\Repositories\BaseRepository;

/**
 * Class DonationRepository
 * @package App\Repositories
 * @version July 21, 2020, 4:34 am UTC
*/

class DonationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Donation::class;
    }
}
