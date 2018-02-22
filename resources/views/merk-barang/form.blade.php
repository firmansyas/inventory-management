<div class="form-group {{ $errors->has('kode') ? 'has-error' : ''}}">
    <label for="kode" class="col-md-2 control-label">{{ 'Kode' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="kode" type="text" id="kode" readonly value="{{ $merkbarang->kode or $no}}" >
        {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="col-md-2 control-label">{{ 'Nama' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nama" type="text" id="nama" value="{{ $merkbarang->nama or ''}}" >
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('asal_negara') ? 'has-error' : ''}}">
    <label for="asal_negara" class="col-md-2 control-label">{{ 'Asal Negara' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="asal_negara" type="text" id="asal_negara" value="{{ $merkbarang->asal_negara or ''}}" >
        {!! $errors->first('asal_negara', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('kode_supplier') ? 'has-error' : ''}}">
    <label for="kode_supplier" class="col-md-2 control-label">{{ 'Supplier' }}</label>
    <div class="col-md-6">
        <select class="form-control" required name="kode_supplier" type="text" id="kode_supplier" value="{{ $merkbarang->kode_supplier or ''}}">
            <option value="">--Pilih Supplier--</option>
            @foreach($suppliers as $sup)
            <option value="{{$sup->kode_supplier}}">{{$sup->nama_perusahaan}}</option>
            @endforeach
        </select>
        {!! $errors->first('kode_supplier', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        document.getElementById('kode_supplier').value="{{ $merkbarang->kode_supplier or ''}}"
    })
</script>
