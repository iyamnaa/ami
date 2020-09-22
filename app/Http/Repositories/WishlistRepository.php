<?php

namespace App\Repositories;

use App\Models\Wishlist;
use App\Repositories\BaseRepository;

/**
 * Class WishlistRepository
 * @package App\Repositories
 * @version July 21, 2020, 4:38 am UTC
*/

class WishlistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Wishlist::class;
    }
}
