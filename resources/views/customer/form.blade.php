<div class="form-group {{ $errors->has('kode_customer') ? 'has-error' : ''}}">
    <label for="kode_customer" class="col-md-2 control-label">{{ 'Kode Customer' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="kode_customer" type="text" id="kode_customer" readonly value="{{ $customer->kode_customer or $no}}" >
        {!! $errors->first('kode_customer', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama_perusahaan') ? 'has-error' : ''}}">
    <label for="nama_perusahaan" class="col-md-2 control-label">{{ 'Nama Perusahaan' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="nama_perusahaan" type="text" id="nama_perusahaan" value="{{ $customer->nama_perusahaan or ''}}" >
        {!! $errors->first('nama_perusahaan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama_customer') ? 'has-error' : ''}}">
    <label for="nama_customer" class="col-md-2 control-label">{{ 'Nama Customer' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="nama_customer" type="text" id="nama_customer" value="{{ $customer->nama_customer or ''}}" >
        {!! $errors->first('nama_customer', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('npwp') ? 'has-error' : ''}}">
    <label for="npwp" class="col-md-2 control-label">{{ 'Npwp' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="npwp" type="text" id="npwp" value="{{ $customer->npwp or ''}}" >
        {!! $errors->first('npwp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alamat_kantor') ? 'has-error' : ''}}">
    <label for="alamat_kantor" class="col-md-2 control-label">{{ 'Alamat Kantor' }}</label>
    <div class="col-md-10">
        <textarea class="form-control" rows="5" name="alamat_kantor" type="textarea" id="alamat_kantor" >{{ $customer->alamat_kantor or ''}}</textarea>
        {!! $errors->first('alamat_kantor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
    <label for="provinsi" class="col-md-2 control-label">{{ 'Provinsi' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="provinsi" type="text" id="provinsi" value="{{ $customer->provinsi or ''}}" >
        {!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('kota') ? 'has-error' : ''}}">
    <label for="kota" class="col-md-2 control-label">{{ 'Kota' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="kota" type="text" id="kota" value="{{ $customer->kota or ''}}" >
        {!! $errors->first('kota', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('kode_pos') ? 'has-error' : ''}}">
    <label for="kode_pos" class="col-md-2 control-label">{{ 'Kode Pos' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="kode_pos" type="text" id="kode_pos" value="{{ $customer->kode_pos or ''}}" >
        {!! $errors->first('kode_pos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-2 control-label">{{ 'Email' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ $customer->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('notelp_1') ? 'has-error' : ''}}">
    <label for="notelp_1" class="col-md-2 control-label">{{ 'Notelp 1' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="notelp_1" type="text" id="notelp_1" value="{{ $customer->notelp_1 or ''}}" >
        {!! $errors->first('notelp_1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('notelp_2') ? 'has-error' : ''}}">
    <label for="notelp_2" class="col-md-2 control-label">{{ 'Notelp 2' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="notelp_2" type="text" id="notelp_2" value="{{ $customer->notelp_2 or ''}}" >
        {!! $errors->first('notelp_2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
