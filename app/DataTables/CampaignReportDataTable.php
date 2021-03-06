<?php

namespace App\DataTables;

use App\Models\CampaignReport;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class CampaignReportDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.campaign_reports.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\CampaignReport $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(CampaignReport $model)
    {
        return $model->newQuery()->with(['campaign', 'user', 'reportCategory']); 
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
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'user_id' => new \Yajra\DataTables\Html\Column(['title' => 'Nama Pembuat', 'data' => 'user.name', 'name' => 'user_id']),
            'campaign_id'  => new \Yajra\DataTables\Html\Column(['title' => 'Campaign', 'data' => 'campaign.title', 'name' => 'campaign_id']),
            'report_category_id'  => new \Yajra\DataTables\Html\Column(['title' => 'Kategori', 'data' => 'report_category.name', 'name' => 'report_category_id']),
            'created_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'campaign_reports_datatable_' . time();
    }
}
