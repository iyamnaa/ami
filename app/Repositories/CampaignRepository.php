<?php

namespace App\Repositories;

use App\Models\Campaign;
use App\Repositories\BaseRepository;

/**
 * Class CampaignRepository
 * @package App\Repositories
 * @version July 21, 2020, 4:29 am UTC
*/

class CampaignRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'short_desc',
        'image_cover',
        'body',
        'target',
        'deadline',
        'confirmed_at',
        'user_id',
        'campaign_category_id'
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
        return Campaign::class;
    }
}
