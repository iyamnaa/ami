<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\BaseRepository;

/**
 * Class NewsRepository
 * @package App\Repositories
 * @version September 21, 2020, 10:39 pm WIB
*/

class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image_cover',
        'body',
        'is_deleted'
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
        return News::class;
    }
}
