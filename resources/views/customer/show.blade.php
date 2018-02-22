@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-users"></i>&nbsp; Customer
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
                            <a href="{{ url('/customer') }}" title="Back"><button class="btn btn-default btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/customer/' . $customer->kode_customer . '/edit') }}" title="Edit customer"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('customer' . '/' . $customer->kode_customer) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-xs" title="Delete customer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                            </div>
                            <h5>Tampil Customer</h5>
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

                                    <tr><th> Kode Customer </th><td> {{ $customer->kode_customer }} </td></tr>
                                    <tr><th> Nama Perusahaan </th><td> {{ $customer->nama_perusahaan }} </td></tr>
                                    <tr><th> Nama Customer </th><td> {{ $customer->nama_customer }} </td></tr>
                                    <tr><th> NPWP </th><td> {{ $customer->npwp or "tidak ada"}} </td></tr>
                                    <tr><th> Alamat Kantor </th><td> {{ $customer->alamat_kantor }} </td></tr>
                                    <tr><th> Kota </th><td> {{ $customer->kota }} </td></tr>
                                    <tr><th> Provinsi </th><td> {{ $customer->provinsi }} </td></tr>
                                    <tr><th> Kode Pos </th><td> {{ $customer->kode_pos }} </td></tr>
                                    <tr><th> Email </th><td> {{ $customer->email }} </td></tr>
                                    <tr><th> No Telp 1 </th><td> {{ $customer->notelp_1 }} </td></tr>
                                    <tr><th> No Telp 2 </th><td> {{ $customer->notelp_2 }} </td></tr>
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
