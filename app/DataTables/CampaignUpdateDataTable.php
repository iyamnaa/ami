<?php

namespace App\DataTables;

use App\Models\CampaignUpdate;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class CampaignUpdateDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.campaign_updates.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\CampaignUpdate $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(CampaignUpdate $model)
    {
        return $model->newQuery()->with('campaign');
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
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'number_of_recipients' => new \Yajra\DataTables\Html\Column(['title' => 'Jumlah Penerima', 'data' => 'number_of_recipients', 'name' => 'number_of_recipients']),
            'title' => new \Yajra\DataTables\Html\Column(['title' => 'Judul', 'data' => 'title', 'name' => 'title']),
            'created_at' => new \Yajra\DataTables\Html\Column(['title' => 'Dibuat Tanggal', 'data' => 'created_at', 'name' => 'created_at'])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'campaign_updates_datatable_' . time();
    }
}
