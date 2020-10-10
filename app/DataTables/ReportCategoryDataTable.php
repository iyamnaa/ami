<?php

namespace App\DataTables;

use App\Models\ReportCategory;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ReportCategoryDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.report_categories.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ReportCategory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ReportCategory $model)
    {
        return $model->newQuery();
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
            'name' => new \Yajra\DataTables\Html\Column(['title' => 'Nama', 'data' => 'name', 'name' => 'name']),
            'created_at' => new \Yajra\DataTables\Html\Column(['title' => 'Dibuat Tanggal', 'data' => 'created_at', 'name' => 'created_at']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'report_categories_datatable_' . time();
    }
}
