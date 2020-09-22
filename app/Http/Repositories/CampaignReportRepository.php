<?php

namespace App\Repositories;

use App\Models\CampaignReport;
use App\Repositories\BaseRepository;

/**
 * Class CampaignReportRepository
 * @package App\Repositories
 * @version July 21, 2020, 4:37 am UTC
*/

class CampaignReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'body',
        'user_id',
        'campaign_id',
        'report_category_id'
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
        return CampaignReport::class;
    }
}
