<div class='btn-group'>
    <a href="{{ route('news.show', $id) }}" class='btn btn-ghost-success'>
       <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('news.edit', $id) }}" class='btn btn-ghost-info'>
       <i class="fa fa-edit"></i>
    </a>
    {!! Form::open(['route' => ['news.destroy', $id], 'method' => 'delete']) !!}
        {!! Form::button('<i class="fa fa-trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-ghost-danger',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    {!! Form::close() !!}
    {!! Form::open(['route' => ['topNews.create', $id], 'method' => 'post']) !!}
        {!! Form::button('<i class="fa fa-plus"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-ghost-danger',
            'onclick' => "return confirm('Tambahkan ke Top Campaign?')"
        ]) !!}
    {!! Form::close() !!}
</div>
