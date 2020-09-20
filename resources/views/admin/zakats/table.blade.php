<div class="table-responsive-sm">
    <table class="table table-striped" id="zakats-table">
        <thead>
            <tr>
                <th>No</th>
                <!-- <th>Transaction Id</th> -->
                <th>Nama</th>
                <!-- <th>Telephone</th> -->
                <!-- <th>Address</th> -->
                <!-- <th>As Anonymous</th> -->
                <!-- <th>Nia</th> -->
                <!-- <th>Amil Name</th> -->
                <th>Akad</th>
                <th>Total Awal</th>
                <th>Dana Zakat</th>
                <th>Dana Amil</th>
                <th>Biaya Admin</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($zakats as $zakat)
            <tr>
                <td>{{ $zakat->number }}</td>
                <!-- <td>{{ $zakat->transaction_id }}</td> -->
                <td>{{ $zakat->name }}</td>
    <!--             <td>{{ $zakat->telephone }}</td>
                <td>{{ $zakat->address }}</td>
                <td>{{ $zakat->as_anonymous }}</td>
                <td>{{ $zakat->NIA }}</td>
                <td>{{ $zakat->amil_name }}</td> -->
                <td class="text-capitalize">{{ $zakat->akad.' ('.$zakat->qty.')' }}</td>
                <td>{{ $zakat->amount * $zakat->qty }}</td>
                <td>{{ ($zakat->amount * $zakat->qty) * 7 / 8 }}</td>
                <td>{{ ($zakat->amount * $zakat->qty) * 1 / 8 }}</td>
                <td>{{ $zakat->administration_fee }}</td>
                @if($zakat->status == 'terkirim')
                <td class="text-capitalize bg-blue text-light">
                @elseif($zakat->status == 'berhasil')
                <td class="text-capitalize bg-success text-light">
                @elseif($zakat->status == 'gagal')
                <td class="text-capitalize bg-danger text-light">
                @elseif($zakat->status == 'cancel')
                <td class="text-capitalize bg-warning text-light">
                @endif
                    {{ $zakat->status }}
                </td>
                <td>
                    {!! Form::open(['route' => ['zakats.destroy', $zakat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('zakats.show', [$zakat->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('zakats.edit', [$zakat->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>