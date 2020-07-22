<div class="table-responsive-sm">
    <table class="table table-striped" id="campaigns-table">
        <thead>
            <tr>
        <th>Gambar Cover</th>
        <th>Judul</th>
        <th>Definisi Singkat</th>
        <!-- <th>Body</th> -->
        <th>Target</th>
        <th>Deadline</th>
        <!-- <th>Confirmed At</th> -->
        <th>User</th>
        <th>Kategori Campaign</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($campaigns as $campaign)
            <tr>
            <td><img src="{{ asset('images/'.$campaign->image_cover) }}" width="60px" height="60px"></td>
            <td>{{ $campaign->title }}</td>
            <td>{{ $campaign->short_desc }}</td>
            <!-- <td>{{ $campaign->body }}</td> -->
            <td>{{ $campaign->target }}</td>
            <td>{{ $campaign->deadline }}</td>
            <!-- <td>{{ $campaign->confirmed_at }}</td> -->
            <td>{{ $campaign->user->name }}</td>
            <td>{{ $campaign->campaignCategory->name }}</td>
                <td>
                    {!! Form::open(['route' => ['campaigns.destroy', $campaign->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('campaigns.show', [$campaign->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('campaigns.edit', [$campaign->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>