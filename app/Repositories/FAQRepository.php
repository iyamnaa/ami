<?php

namespace App\Repositories;

use App\Models\FAQ;
use App\Repositories\BaseRepository;

/**
 * Class FAQRepository
 * @package App\Repositories
 * @version October 10, 2020, 8:48 pm WIB
*/

class FAQRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'topic',
        'body'
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
        return FAQ::class;
    }
}
