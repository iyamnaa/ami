<?php

namespace App\DataTables;

use App\Models\Donation;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class DonationDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.donations.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Donation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Donation $model)
    {
        return $model->newQuery()->with('campaign user');
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
            'transaction_id' => new \Yajra\DataTables\Html\Column(['title' => 'ID Transaksi', 'data' => 'transaction_id', 'name' => 'transaction_id']),
            'name' => new \Yajra\DataTables\Html\Column(['title' => 'Muzakki', 'data' => 'name', 'name' => 'name']),
            'amount' => new \Yajra\DataTables\Html\Column(['title' => 'Jumlah Donasi', 'data' => 'amount', 'name' => 'amount']),
            'administration_fee'  => new \Yajra\DataTables\Html\Column(['title' => 'Biaya Admin', 'data' => 'administration_fee', 'name' => 'administration_fee']),
            'campaign_id' => new \Yajra\DataTables\Html\Column(['title' => 'Campaign', 'data' => 'campaign.title', 'name' => 'campaign_id']),
            'status',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'donations_datatable_' . time();
    }
}
