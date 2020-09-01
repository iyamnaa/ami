<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Gambar Profil:') !!} <br>
    {!! Form::file('form_photo', ['class' => 'form-control-file', 'accept' => ".jpg,.jpeg,.png"]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nama Lengkap:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Jenis Kelamin:') !!} <br>
    {!! Form::select('gender', array('Perempuan' => 'Perempuan', 'Laki-laki' => 'Laki Laki'), null, ['class' => 'form-control']) !!}
</div>

<!-- Background Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bg_cover', 'Gambar Latar Belakang:') !!} <br>
    {!! Form::file('form_bg_cover', ['class' => 'form-control-file', 'accept' => ".jpg,.jpeg,.png"]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Phone:') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Alamat:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Bio Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bio', 'Biodata:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
</div>


<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Jenis Anggota :') !!} <br>
    {!! Form::select('role', array('member' => 'Member', 'relawan' => 'Relawan', 'admin' => 'Admin'), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::hidden('password', 'password' ) !!}
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
</div>
