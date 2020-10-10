@section('css')
    @include('layouts.admin.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@push('scripts')
    @include('layouts.admin.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush
