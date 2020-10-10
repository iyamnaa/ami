<div class='btn-group'>
    <a href="{{ route('campaigns.show', $id) }}" class='btn btn-ghost-success'>
       <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('campaigns.edit', $id) }}" class='btn btn-ghost-info'>
       <i class="fa fa-edit"></i>
    </a>
{!! Form::open(['route' => ['campaigns.destroy', $id], 'method' => 'delete']) !!}
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-ghost-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
{!! Form::close() !!}
{!! Form::open(['route' => ['topCampaigns.create', $id], 'method' => 'post']) !!}
    {!! Form::button('<i class="fa fa-plus"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-ghost-danger',
        'onclick' => "return confirm('Tambahkan ke Top Campaign?')"
    ]) !!}
{!! Form::close() !!}
</div>
