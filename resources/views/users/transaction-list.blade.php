@extends('layouts.app')

@section('content')
@include('layouts.modal')
<h4 class="mt-4 text-capitalize"> List Transaksi {{$user->name}} </h4>
<table class="table-striped full-width text-center mt-4">
    <tr>
        <td class="bg-success text-light p-2" colspan="2"> List Donasi </td>
    </tr>
    @foreach($donations as $donation)
        <tr>
            <td class="p-2"> Donasi {{ $donation->created_at }} </td>
            <td class="p-2">
                <a class="text-primary hovering-link" href="{{ url('kwitansi/donasi/'.$donation->id) }}"> Lihat Kwitansi </a>
            </td>
        </tr>
    @endforeach
</table>

<table class="table-striped full-width text-center mt-5">
    <tr>
        <td class="bg-success text-light p-2" colspan="2"> List Zakat </td>
    </tr>
    @foreach($zakats as $zakat)
        <tr>
            <td class="p-2 text-capitalize"> {{ $zakat->akad.' '.$zakat->created_at }} </td>
            <td class="p-2">
                <a class="text-primary hovering-link" href="{{ url('kwitansi/zakat/'.$zakat->id) }}"> Lihat Kwitansi </a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
