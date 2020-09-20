<div class="table-responsive-sm">
    <table class="table table-striped" id="donations-table">
        <thead>
            <tr>
        <th>No</th>
        <!-- <th>Transaction Id</th> -->
        <th>Nama</th>
        <!-- <th>Telephone</th> -->
        <!-- <th>Address</th> -->
        <!-- <th>Anonymous</th> -->
        <!-- <th>Nia</th> -->
        <!-- <th>Amil Name</th> -->
        <th>Akad</th>
        <th>Total Donasi</th>
        <th>Dana Donasi(Diluar Amil)</th>
        <th>Dana Amil</th>
        <th>Biaya Admin</th>
        <th>Status</th>
        <th>Campaign</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($donations as $donation)
            <tr>
                <td>{{ $donation->number }}</td>
                <!-- <td>{{ $donation->transaction_id }}</td> -->
                <td>{{ $donation->name }}</td>
                <!-- <td>{{ $donation->telephone }}</td> -->
                <!-- <td>{{ $donation->address }}</td> -->
                <!-- <td>{{ $donation->as_anonymous }}</td> -->
                <!-- <td>{{ $donation->NIA }}</td> -->
                <!-- <td>{{ $donation->amil_name }}</td> -->
                <td class="text-capitalize">{{ $donation->akad }}</td>
                <td>{{ $donation->amount * $donation->qty }}</td>
                <td>{{ ($donation->amount * $donation->qty) * 7 / 8 }}</td>
                <td>{{ ($donation->amount * $donation->qty) * 1 / 8 }}</td>
                <td>{{ $donation->administration_fee }}</td>
                @if($donation->status == 'terkirim')
                <td class="text-capitalize bg-blue text-light">
                @elseif($donation->status == 'berhasil')
                <td class="text-capitalize bg-success text-light">
                @elseif($donation->status == 'gagal')
                <td class="text-capitalize bg-danger text-light">
                @elseif($donation->status == 'cancel')
                <td class="text-capitalize bg-warning text-light">
                @endif
                    {{ $donation->status }}
                </td>
                <td>{{ $donation->campaign->title }}</td>
                <td>
                    {!! Form::open(['route' => ['donations.destroy', $donation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('donations.show', [$donation->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('donations.edit', [$donation->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>