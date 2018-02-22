<div class="form-group {{ $errors->has('kode_supplier') ? 'has-error' : ''}}">
    <label for="kode_supplier" class="col-md-2 control-label">{{ 'Kode Supplier' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="kode_supplier" type="text" id="kode_supplier" readonly value="{{ $supplier->kode_supplier or $no}}" >
        {!! $errors->first('kode_supplier', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama_perusahaan') ? 'has-error' : ''}}">
    <label for="nama_perusahaan" class="col-md-2 control-label">{{ 'Nama Perusahaan' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nama_perusahaan" type="text" id="nama_perusahaan" value="{{ $supplier->nama_perusahaan or ''}}" >
        {!! $errors->first('nama_perusahaan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama_supplier') ? 'has-error' : ''}}">
    <label for="nama_supplier" class="col-md-2 control-label">{{ 'Nama Supplier' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nama_supplier" type="text" id="nama_supplier" value="{{ $supplier->nama_supplier or ''}}" >
        {!! $errors->first('nama_supplier', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alamat_kantor') ? 'has-error' : ''}}">
    <label for="alamat_kantor" class="col-md-2 control-label">{{ 'Alamat Kantor' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="alamat_kantor" type="textarea" id="alamat_kantor" >{{ $supplier->alamat_kantor or ''}}</textarea>
        {!! $errors->first('alamat_kantor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('asal_negara') ? 'has-error' : ''}}">
    <label for="asal_negara" class="col-md-2 control-label">{{ 'Asal Negara' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="asal_negara" type="text" id="asal_negara" value="{{ $supplier->asal_negara or ''}}" >
        {!! $errors->first('asal_negara', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-2 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $supplier->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('notelp_1') ? 'has-error' : ''}}">
    <label for="notelp_1" class="col-md-2 control-label">{{ 'Notelp 1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="notelp_1" type="text" id="notelp_1" value="{{ $supplier->notelp_1 or ''}}" >
        {!! $errors->first('notelp_1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('notelp_2') ? 'has-error' : ''}}">
    <label for="notelp_2" class="col-md-2 control-label">{{ 'Notelp 2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="notelp_2" type="text" id="notelp_2" value="{{ $supplier->notelp_2 or ''}}" >
        {!! $errors->first('notelp_2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
