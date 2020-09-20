<div class="table-responsive-sm">
<div class="row mb-3">
    <div class="col-md-6 form-inline">
        <label>
            Tampilkan
            <select class="form-control ml-3 mr-3">
                <option> 10 </option>
                <option> 15 </option>
                <option> 20 </option>
                <option> 25 </option>
                <option> 30 </option>
            </select>
            baris
        </label>
    </div>
    <div class="col-md-3 offset-md-3" align="right">
        <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text" style="font-size: .94rem"><i class="fa fa-search"></i></div>
        </div>
        <input type="text" class="form-control" name="search_table" placeholder="Cari Campaign">
        </div>
    </div>
</div>
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
            <td><img src="{{ asset($campaign->image_cover) }}" width="60px" height="60px"></td>
            <td>{{ $campaign->title }}</td>
            <td>{!! substr($campaign->short_desc, 0, 64) !!}
                @if(strlen($campaign->short_desc)>64)
                    ...
                @endif
            </td>
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