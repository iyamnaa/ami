<div class="table-responsive-sm">
    <table class="table table-striped" id="news-table">
        <thead>
            <tr>
        <th>Gambar Cover</th>
        <th>Title</th>
        <th>Tanggal</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($news as $news)
            <tr>
            <td><img src="{{ asset('images/'.$news->image_cover) }}" width="60px" height="60px"></td>
            <td>{{ $news->title }}</td>
            <td>{{ $news->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$news->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('news.edit', [$news->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>