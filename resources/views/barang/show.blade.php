@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-archive"></i>&nbsp; Barang
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
                                <a href="{{ url('/barang') }}" title="Back"><button class="btn btn-default btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <a href="{{ url('/barang/' . $barang->kode_barang . '/edit') }}" title="Edit barang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('barang' . '/' . $barang->kode_barang) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs" title="Delete barang" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                                
                                </div>
                                <h5>Tampil Barang</h5>
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

                                
                                <br/>
                                <br/>

                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            
                                            <tr><th> Kode Barang </th><td> {{ $barang->kode_barang }} </td></tr>
                                            <tr><th> Nama </th><td> {{ $barang->nama }} </td></tr>
                                            <tr><th> Nomor Izin </th><td> {{ $barang->nomor_izin }} </td></tr>
                                            <tr><th> Asal Negara </th><td> {{ $barang->asal_negara }} </td></tr>
                                            <tr><th> Spesifikasi Khusus  </th><td> {{ $barang->spesifikasi_khusus }} </td></tr>
                                            <tr><th> Harga Beli </th><td>Rp {{ number_format($barang->harga_beli,0,".",",") }} </td></tr>
                                            <tr><th> Harga Jual </th><td>Rp {{ number_format($barang->harga_jual,0,".",",") }} </td></tr>
                                            <tr><th> Gambar Barang  </th><td> 
                                            @if($barang->gambar_barang)
                                            <img src="{{asset('img/'.$barang->gambar_barang)}}">
                                            @else
                                            Tidak Ada
                                            @endif
                                            </td></tr>
                                            <tr><th> Supplier </th><td> {{ ucwords($barang->supplier->nama_perusahaan) }} </td></tr>
                                            <tr><th> Kategori </th><td> {{ ucwords($barang->kategori->nama) }} </td></tr>
                                            <tr><th> Merk </th><td> {{ ucwords($barang->merk->nama) }} </td></tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
