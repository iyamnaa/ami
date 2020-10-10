<?php

namespace App\DataTables;

use App\Models\Zakat;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ZakatDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.zakats.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Zakat $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Zakat $model)
    {
        return $model->newQuery()->with('user');
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
            'name' => new \Yajra\DataTables\Html\Column(['title' => 'Muzakki', 'data' => 'name', 'name' => 'name']),
            'akad',
            'amount' => new \Yajra\DataTables\Html\Column(['title' => 'Donasi', 'data' => 'amount', 'name' => 'amount']),
            'administration_fee'  => new \Yajra\DataTables\Html\Column(['title' => 'Biaya Admin', 'data' => 'administration_fee', 'name' => 'administration_fee']),
            'qty' => new \Yajra\DataTables\Html\Column(['title' => 'Jumlah', 'data' => 'qty', 'name' => 'qty']),
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
        return 'zakats_datatable_' . time();
    }
}
