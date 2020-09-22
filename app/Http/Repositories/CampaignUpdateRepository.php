<?php

namespace App\Repositories;

use App\Models\CampaignUpdate;
use App\Repositories\BaseRepository;

/**
 * Class CampaignUpdateRepository
 * @package App\Repositories
 * @version July 21, 2020, 4:38 am UTC
*/

class CampaignUpdateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'campaign_update_id'
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
        return CampaignUpdate::class;
    }
}
