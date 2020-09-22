<?php

namespace App\Repositories;

use App\Models\Campaign;
use App\Repositories\BaseRepository;

/**
 * Class CampaignRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:42 pm WIB
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
        'is_deleted',
        'status',
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
