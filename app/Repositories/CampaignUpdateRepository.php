<?php

namespace App\Repositories;

use App\Models\CampaignUpdate;
use App\Repositories\BaseRepository;

/**
 * Class CampaignUpdateRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:41 pm WIB
*/

class CampaignUpdateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image_cover',
        'number_of_recipients',
        'title',
        'body',
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
        return CampaignUpdate::class;
    }
}
