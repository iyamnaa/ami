<div class="table-responsive-sm">
    <table class="table table-striped" id="wishlists-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Campaign Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($wishlists as $wishlist)
            <tr>
                <td>{{ $wishlist->user_id }}</td>
            <td>{{ $wishlist->campaign_id }}</td>
                <td>
                    {!! Form::open(['route' => ['wishlists.destroy', $wishlist->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('wishlists.show', [$wishlist->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('wishlists.edit', [$wishlist->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>