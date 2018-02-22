@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-archive"></i>&nbsp; Barang
@endsection


@section('content')
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">
                <!--Begin Datatables-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <div class="icons"><i class="fa fa-table"></i></div>
                                <h5>Barang</h5>
                            </header>

                            <div id="collapse4" class="body">
                                <a href="{{ url('/barang/create') }}" class="btn btn-success btn-sm" title="Add New barang">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>

                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Nomor Izin</th>
                                                <th>Kategori</th>
                                                <th>Merk</th>
                                                <th>Supplier</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($barang as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration or $item->id }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->nomor_izin }}</td>
                                                    <td>{{ ucwords($item->kategori->nama) }}</td>
                                                    <td>{{ ucwords($item->merk->nama) }}</td>
                                                    <td>{{ ucwords($item->supplier->nama_perusahaan) }}</td>
                                                    <td>
                                                        <a href="{{ url('/barang/' . $item->kode_barang) }}" title="View barang"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                        <a href="{{ url('/barang/' . $item->kode_barang . '/edit') }}" title="Edit barang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                        <form method="POST" action="{{ url('/barang' . '/' . $item->kode_barang) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-xs" title="Delete barang" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
    </div>
@endsection
