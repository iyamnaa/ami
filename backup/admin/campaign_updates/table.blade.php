<div class="table-responsive-sm">
    <table class="table table-striped" id="campaignUpdates-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Body</th>
        <th>Campaign Update Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($campaignUpdates as $campaignUpdate)
            <tr>
                <td>{{ $campaignUpdate->title }}</td>
            <td>{{ $campaignUpdate->body }}</td>
            <td>{{ $campaignUpdate->campaign_update_id }}</td>
                <td>
                    {!! Form::open(['route' => ['campaignUpdates.destroy', $campaignUpdate->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('campaignUpdates.show', [$campaignUpdate->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('campaignUpdates.edit', [$campaignUpdate->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>