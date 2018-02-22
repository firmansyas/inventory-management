@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-truck"></i>&nbsp; Supplier
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
                            <div class="icons"><i class="fa fa-edit"></i></div>
                            <h5>Tampil Supplier</h5>
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

                        <a href="{{ url('/supplier') }}" title="Back"><button class="btn btn-default btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/supplier/' . $supplier->kode_supplier . '/edit') }}" title="Edit supplier"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('supplier' . '/' . $supplier->kode_supplier) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete supplier" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Kode Supplier </th><td> {{ $supplier->kode_supplier }} </td></tr>
                                    <tr><th> Nama Perusahaan </th><td> {{ $supplier->nama_perusahaan }} </td></tr>
                                    <tr><th> Nama Supplier </th><td> {{ $supplier->nama_supplier }} </td></tr>
                                    <tr><th> Alamat Kantor </th><td> {{ $supplier->alamat_kantor }} </td></tr>
                                    <tr><th> Asal Negara </th><td> {{ $supplier->asal_negara }} </td></tr>
                                    <tr><th> Email </th><td> {{ $supplier->email }} </td></tr>
                                    <tr><th> No Telp 1 </th><td> {{ $supplier->notelp_1 }} </td></tr>
                                    <tr><th> No Telp 2 </th><td> {{ $supplier->notelp_2 }} </td></tr>
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
