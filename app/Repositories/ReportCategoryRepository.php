<?php

namespace App\Repositories;

use App\Models\ReportCategory;
use App\Repositories\BaseRepository;

/**
 * Class ReportCategoryRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:40 pm WIB
*/

class ReportCategoryRepository extends BaseRepository
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
        return ReportCategory::class;
    }
}
