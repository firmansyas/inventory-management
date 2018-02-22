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
                               <a href="{{ url('/customer/create') }}" class="btn btn-success btn-sm" title="Add New customer">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>



                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table  id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Nama Customer</th>
                                                <th>Alamat</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($customer as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration or $item->id }}</td>
                                                    <td>{{ $item->nama_perusahaan }}</td>
                                                    <td>{{ $item->nama_customer }}</td>
                                                    <td>{{ $item->alamat_kantor }} {{ ucwords($item->kota) }} <br> Provinsi {{ ucwords($item->provinsi) }} Kode Pos {{ $item->kode_pos }}</td>
                                                    <td>
                                                        <a href="{{ url('/customer/' . $item->kode_customer) }}" title="View customer"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                        <a href="{{ url('/customer/' . $item->kode_customer . '/edit') }}" title="Edit customer"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                        <form method="POST" action="{{ url('/customer' . '/' . $item->kode_customer) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-xs" title="Delete customer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
