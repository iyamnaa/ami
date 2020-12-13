<div class="table-responsive-sm">
    <table style="margin-bottom: 20px">
        <tr>
            <td>Cari User : &nbsp;&nbsp; </td>
            <td>
                <input type="text" name="search" id="searchData" placeholder="Cari" class="form-control" autocomplete="off" onkeypress="searchData(event, 'users')">
            </td>
        </tr>
    </table>
    <table class="table table-striped" id="users-table">
        <thead>
            <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Telephone</th>
        <th>Alamat</th>
        <!-- <th>Bio data</th> -->
        <!-- <th>Email Verified At</th> -->
        <!-- <th>Password</th> -->
        <th>Role</th>
        <!-- <th>Remember Token</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <!-- <td>{{ $user->bio }}</td> -->
            <!-- <td>{{ $user->email_verified_at }}</td> -->
            <!-- <td>{{ $user->password }}</td> -->
            <td>{{ $user->role }}</td>
            <!-- <td>{{ $user->remember_token }}</td> -->
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>