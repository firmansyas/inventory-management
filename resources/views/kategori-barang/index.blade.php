@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-th"></i>&nbsp; Kategori Barang
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
                                <h5>Index Kategori Barang</h5>
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
                                <a href="{{ url('/kategori-barang/create') }}" class="btn btn-success btn-sm" title="Add New kategoriBarang">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>

                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th><th>Nama</th><th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($kategoribarang as $item)
                                            <tr>
                                                <td>{{ $loop->iteration or $item->id }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>
                                                    <a href="{{ url('/kategori-barang/' . $item->kode . '/edit') }}" title="Edit kategoriBarang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                    <form method="POST" action="{{ url('/kategori-barang' . '/' . $item->kode) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete kategoriBarang" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
