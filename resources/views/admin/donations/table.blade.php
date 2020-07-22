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
        <th>Zakat</th>
        <th>Status</th>
        <th>User</th>
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
            <td>{{ $donation->akad }}</td>
            <td>{{ $donation->amount }}</td>
            <td>{{ $donation->status }}</td>
            <td>{{ $donation->user->name }}</td>
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