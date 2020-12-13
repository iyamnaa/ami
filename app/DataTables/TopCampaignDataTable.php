<?php

namespace App\DataTables;

use App\Models\TopCampaign;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class TopCampaignDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'admin.top_campaigns.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\TopCampaign $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(TopCampaign $model)
    {
        return $model->newQuery()->with(['campaign']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'campaign_id' => new \Yajra\DataTables\Html\Column(['title' => 'Campaign', 'data' => 'campaign.title', 'name' => 'campaign_id']),
            'created_at',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'top_campaigns_datatable_' . time();
    }
}