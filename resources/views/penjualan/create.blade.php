@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-shopping-cart"></i>&nbsp; Nota Penjualan
@endsection

@section('content')
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">
                <!--BEGIN INPUT TEXT FIELDS-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box dark">
                            <header>
                                <div class="icons">
                                <a href="{{ url('/penjualan') }}" title="Back"><button class="btn btn-default btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                </div>
                                <h5>Buat Nota Penjualan</h5>
                                <!-- .toolbar -->
                                <div class="toolbar">
                                    <nav style="padding: 8px;">
                                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </nav>
                                </div>            <!-- /.toolbar -->
                            </header>
                            <div id="div-1" class="body">

                                
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form method="POST" action="{{ url('/penjualan') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="pajak" class="col-md-2 control-label">Pakai Pajak</label>
                                        <div class="col-md-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input class="uniform" type="radio" name="pajak" id="pakai-pajak" value="true" checked>Ya
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input class="uniform" type="radio" name="pajak" id="tidak-pajak" value="false">Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('no_po') ? 'has-error' : ''}}">
                                        <label for="no_po" class="col-md-2 control-label">No PO</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="no_po" type="text" id="no_po" maxlength="110" required>
                                            {!! $errors->first('no_po', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('tanggal_po') ? 'has-error' : ''}}">
                                        <label for="tanggal_po" class="col-md-2 control-label">Tanggal PO</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="tanggal_po" type="date" id="tanggal_po"  value="{{Carbon\Carbon::today()->toDateString()}}" required>
                                            {!! $errors->first('tanggal_po', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('tanggal_pengiriman') ? 'has-error' : ''}}">
                                        <label for="tanggal_pengiriman" class="col-md-2 control-label">Tanggal Pengiriman</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="tanggal_pengiriman" type="date" id="tanggal_pengiriman"  value="{{Carbon\Carbon::today()->toDateString()}}">
                                            {!! $errors->first('nama_customer', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('diantar_oleh') ? 'has-error' : ''}}">
                                        <label for="diantar_oleh" class="col-md-2 control-label">Diantar oleh</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="diantar_oleh" type="text" id="diantar_oleh">
                                            {!! $errors->first('diantar_oleh', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('kode_customer') ? 'has-error' : ''}}">
                                        <label for="kode_customer" class="col-md-2 control-label">Customer</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="kode_customer" type="text" id="kode_customer">
                                                <option>--Pilih Customer--</option>
                                                @foreach($customer as $item)
                                                    <option value="{{$item->kode_customer}}" alamat="{{$item->alamat_kantor}}" provinsi="{{$item->provinsi}}" kode-pos="{{$item->kode_pos}}">{{$item->nama_customer}}</option>
                                                @endforeach
                                            </select>
                                            {!! $errors->first('kode_customer', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
                                        <label for="alamat" class="col-md-2 control-label">Alamat</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" name="alamat" type="textarea" id="alamat" ></textarea>
                                            {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
                                        <label for="provinsi" class="col-md-2 control-label">Provinsi</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="provinsi" type="text" id="provinsi">
                                            {!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('kode_pos') ? 'has-error' : ''}}">
                                        <label for="kode_pos" class="col-md-2 control-label">Kode Pos</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="kode_pos" type="text" id="kode_pos">
                                            {!! $errors->first('kode_pos', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>

                                    <!--Barang-->
                                    <div class="text-center">
                                        <h3>Barang yang dijual</h3>
                                        <td colspan="5" class="text-center"><a id="tambah" class="btn btn-sm btn-default" style="margin-top: 10px;margin-bottom: 10px;vertical-align: middle;"><span class="glyphicon glyphicon-plus"></span> Tambah Barang</a></td>
                                    </div>
                                    <table style="margin-bottom: 50px;"class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Diskon</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tabel-barang">

                                        </tbody>
                                        <tfoot>
                                        
                                        </tfoot>
                                    </table>

                                    <!--Barang-->
                                    <div class="form-group {{ $errors->has('total_harga') ? 'has-error' : ''}}">
                                        <label for="total_harga" class="col-md-2 control-label">Total Harga</label>
                                        <div class="col-md-10 input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input class="form-control" name="total_harga" type="text" id="total_harga" readonly>
                                            {!! $errors->first('total_harga', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('pajak') ? 'has-error' : ''}}">
                                        <label for="pajak" class="col-md-2 control-label">PPN</label>
                                        <div class="col-md-10 input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input class="form-control" name="pajak" type="text" id="pajak" readonly>
                                            {!! $errors->first('pajak', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('grand_total') ? 'has-error' : ''}}">
                                        <label for="grand_total" class="col-md-2 control-label">Grand Total</label>
                                        <div class="col-md-10 input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input class="form-control" name="grand_total" type="text" id="grand_total" readonly>
                                            {!! $errors->first('grand_total', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('down_payment') ? 'has-error' : ''}}">
                                        <label for="down_payment" class="col-md-2 control-label">Down Payment (DP)</label>
                                        <div class="col-md-10 input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input class="form-control" name="down_payment" type="text" id="down_payment">
                                            {!! $errors->first('down_payment', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="text-center">
                                        <td colspan="5" class="text-center"><input class="btn btn-primary" type="submit" style="margin-top: 10px;margin-bottom: 10px;vertical-align: middle;" value="Simpan"></td>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function(){
            $('body').on('change', '#tidak-pajak', function(){
                $('#no_po, #tanggal_po').attr('readonly', true).attr('required', false);
                hitungGrandTotal();
            });
            $('body').on('change', '#pakai-pajak', function(){
                $('#no_po, #tanggal_po').attr('readonly', false).attr('required', true);
                hitungGrandTotal();
            });
            $('body').on('click', '#tambah', function() {
                $('#tabel-barang').append("<tr class='item'><td><select name='barang[]' class='form-control barang'><option harga-jual='0'>--Pilih Barang--</option>" +
                        @foreach($barang as $item)
                            "<option value='{{$item->kode_barang}}' harga-jual='{{$item->harga_jual}}'>{{$item->nama}}</option>" +
                        @endforeach
                            "</select><td><div class='input-group'><span class='input-group-addon'>Rp</span><input type='text' class='harga form-control' name='harga[]' value='0' readonly><div></td><td><input class='qty form-control' name='qty[]' type='number'></td><td><div class='input-group'><input class='diskon form-control' name='diskon[]' type='number'><span class='input-group-addon'>%</span></div></td><td><div class='input-group'><span class='input-group-addon'>Rp</span><input class='subtotal form-control' name='subtotal[]' type='text' readonly></div></td><td><a class='btn btn-sm btn-danger hapus' style='vertical-align: middle;'><span class='glyphicon glyphicon-minus'></span></a></td></tr>"
                );
            });
            $('body').on('change', '#kode_customer', function(){
                var alamat = $('option:selected', this).attr('alamat');
                var provinsi = $('option:selected', this).attr('provinsi');
                var kode_post = $('option:selected', this).attr('kode-pos');
                $('#alamat').val(alamat);
                $('#provinsi').val(provinsi);
                $('#kode_pos').val(kode_post);
            });
            $('body').on('click change','.barang', function(){
                var ini = $(this);
                var disabled = new Array();
                $('.barang option:selected').each(function(){
                    disabled.push($(this).val());
                });
                for(var i = 0; i<disabled.length; i++){
                    $('.barang option').each(function() {
                        $(this).css('display', 'inline');
                    });
                }
                for(var i = 0; i<disabled.length; i++){
                    $('.barang option').each(function() {
                        if ( $(this).val() == disabled[i] ) {
                            $(this).css('display', 'none');
                        }
                    });
                }
                $('option:selected, option:not([value])').each(function(){
                    $(this).css('display', 'inline');
                });

            });

            $('body').on('change', '.barang', function(){
                var row = $(this).closest('tr');
                var harga = $('option:selected', this).attr('harga-jual');
                row.find('.harga').val(harga);
            });
            $('body').on('click','.hapus', function(){
                $(this).closest('tr').remove();
                hitungGrandTotal();
            });
            $('body').on('change','.harga, .qty, .diskon',function(){
                var row = $(this).closest('tr');
                var harga = Number(row.find('.harga').val());
                var qty = Number(row.find('.qty').val());
                var diskon = Number(row.find('.diskon').val());
                var subtotal = (100-diskon)/100*harga*qty;
                row.find('.subtotal').val(subtotal);
                hitungGrandTotal()
            });
            function hitungGrandTotal(){
                var total = 0;
                $('.item').each(function(){
                    total+=Number($(this).find('.subtotal').val());
                });
                $('#total_harga').val(total);
                if($('#pakai-pajak').is(':checked')){
                    var pajak = total/10;
                } else{
                    var pajak = 0;
                }
                $('#pajak').val(pajak);
                var grand_total = total+pajak;
                $('#grand_total').val(grand_total);
            }
        });
    </script>
@endsection
