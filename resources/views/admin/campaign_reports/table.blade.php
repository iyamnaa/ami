<div class="table-responsive-sm">
    <table class="table table-striped" id="campaignReports-table">
        <thead>
            <tr>
        <!-- <th>Body</th> -->
        <th>User</th>
        <th>Campaign</th>
        <th>Report Category</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($campaignReports as $campaignReport)
            <tr>
                <!-- <td>{{ $campaignReport->body }}</td> -->
            <td>{{ $campaignReport->user->name }}</td>
            <td>{{ $campaignReport->campaign->title }}</td>
            <td>{{ $campaignReport->reportCategory->name }}</td>
                <td>
                    {!! Form::open(['route' => ['campaignReports.destroy', $campaignReport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('campaignReports.show', [$campaignReport->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('campaignReports.edit', [$campaignReport->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>