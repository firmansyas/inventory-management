<div class="form-group {{ $errors->has('kode_barang') ? 'has-error' : ''}}">
    <label for="kode_barang" class="col-md-2 control-label">{{ 'Kode Barang' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="kode_barang" type="text" readonly="" id="kode_barang" value="{{ $barang->kode_barang or $no}}" >
        {!! $errors->first('kode_barang', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="col-md-2 control-label">{{ 'Nama' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="nama" type="text" id="nama" value="{{ $barang->nama or ''}}" >
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomor_izin') ? 'has-error' : ''}}">
    <label for="nomor_izin" class="col-md-2 control-label">{{ 'Nomor Izin' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="nomor_izin" type="text" id="nomor_izin" value="{{ $barang->nomor_izin or ''}}" >
        {!! $errors->first('nomor_izin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('spesifikasi_khusus') ? 'has-error' : ''}}">
    <label for="spesifikasi_khusus" class="col-md-2 control-label">{{ 'Spesifikasi Khusus' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="spesifikasi_khusus" type="text" id="spesifikasi_khusus" value="{{ $barang->spesifikasi_khusus or ''}}" >
        {!! $errors->first('spesifikasi_khusus', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('asal_negara') ? 'has-error' : ''}}">
    <label for="asal_negara" class="col-md-2 control-label">{{ 'Asal Negara' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="asal_negara" type="text" id="asal_negara" value="{{ $barang->asal_negara or ''}}" >
        {!! $errors->first('asal_negara', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('harga_beli') ? 'has-error' : ''}}">
    <label for="harga_beli" class="col-md-2 control-label">{{ 'Harga Beli' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="harga_beli" type="number" id="harga_beli" value="{{ $barang->harga_beli or ''}}" >
        {!! $errors->first('harga_beli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('harga_jual') ? 'has-error' : ''}}">
    <label for="harga_jual" class="col-md-2 control-label">{{ 'Harga Jual' }}</label>
    <div class="col-md-10">
        <input class="form-control" name="harga_jual" type="number" id="harga_jual" value="{{ $barang->harga_jual or ''}}" >
        {!! $errors->first('harga_jual', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-lg-2">Gambar Barang</label>
    <div class="col-lg-8">
        <div class="fileinput {{(isset($barang) && $barang->gambar_barang!="")? 'fileinput-exists':'fileinput-new'}}" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                @if(isset($barang) && $barang->gambar_barang)
                    <img src="{{asset('img/'.$barang->gambar_barang)}}">
                @endif
            </div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="gambar_barang" id="gambar_barang"></span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>

    </div>
</div>


<div class="form-group {{ $errors->has('kode_supplier') ? 'has-error' : ''}}">
    <label for="kode_supplier" class="col-md-2 control-label">{{ 'Kode Supplier' }}</label>
    <div class="col-md-10">
         <select class="form-control" required name="kode_supplier" type="text" id="kode_supplier" value="{{ $merkbarang->kode_supplier or ''}}">
            <option value="">--Pilih Supplier--</option>
            @foreach($suppliers as $sup)
            <option value="{{$sup->kode_supplier}}">{{$sup->nama_perusahaan}}</option>
            @endforeach
        </select>
       {!! $errors->first('kode_supplier', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('kategori_barang') ? 'has-error' : ''}}">
    <label for="kategori_barang" class="col-md-2 control-label">{{ 'Kategori Barang' }}</label>
    <div class="col-md-10">
        <select class="form-control" required name="kategori_barang" id="kategori_barang">
            <option value="">--Pilih Kategori--</option>
            @foreach($kategoris as $kategori)
            <option value="{{$kategori->kode}}">{{$kategori->nama}}</option>
            @endforeach
        </select>
        {!! $errors->first('kategori_barang', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('merk_barang') ? 'has-error' : ''}}">
    <label for="merk_barang" class="col-md-2 control-label">{{ 'Merk Barang' }}</label>
    <div class="col-md-10">
        <select class="form-control" required  name="merk_barang" id="merk_barang" >
            <option value="">--Pilih Merk Barang--</option>
            @foreach($merks as $merk)
            <option value="{{$merk->kode}}">{{$merk->nama}}</option>
            @endforeach
        </select>
       {!! $errors->first('merk_barang', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        document.getElementById('kode_supplier').value="{{ $barang->kode_supplier or ''}}"
        document.getElementById('kategori_barang').value="{{ $barang->kategori_barang or ''}}"
        document.getElementById('merk_barang').value="{{ $barang->merk_barang or ''}}"
    })
</script>
