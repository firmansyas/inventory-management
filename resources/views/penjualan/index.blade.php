@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-shopping-cart"></i>&nbsp; Penjualan
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
                            <h5>Index Barang</h5>
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
                       <a href="{{ url('/penjualan/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus" aria-hidden="true"></i> Buat Nota Penjualan
                        </a>

                      

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table  id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No Faktur</th>
                                        <th>Nomor PO</th>
                                        <th>Tanggal PO</th>
                                        <th>Customer</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($penjualan as $item)
                                    <tr>
                                        <td>{{ $item->nomor }}</td>
                                        <td>{{ $item->no_po }}</td>
                                        <td>{{ $item->tanggal_po }}</td>
                                        <td>{{ $item->customer->nama_customer }} {{$item->customer->nama_perusahaan}}</td>
                                        <td>
                                            <a href="{{ url('/penjualan/' . $item->nomor) }}" title="View customer"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <form method="POST" action="{{ url('/penjualan' . '/' . $item->nomor) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete customer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Cancel</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
