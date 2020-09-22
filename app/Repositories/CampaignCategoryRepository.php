<?php

namespace App\Repositories;

use App\Models\CampaignCategory;
use App\Repositories\BaseRepository;

/**
 * Class CampaignCategoryRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:34 pm WIB
*/

class CampaignCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return CampaignCategory::class;
    }
}
