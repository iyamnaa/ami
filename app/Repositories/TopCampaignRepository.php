<?php

namespace App\Repositories;

use App\Models\TopCampaign;
use App\Repositories\BaseRepository;

/**
 * Class TopCampaignRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:39 pm WIB
*/

class TopCampaignRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return TopCampaign::class;
    }
}
