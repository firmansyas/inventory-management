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
                            <div class="icons">
                            <a href="{{ url('/kategori-barang') }}" title="Back"><button class="btn btn-default btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/kategori-barang/' . $kategoribarang->kode . '/edit') }}" title="Edit kategoriBarang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('kategoribarang' . '/' . $kategoribarang->kode) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete kategoriBarang" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                            </div>
                            <h5>Tampil Kategori Barang</h5>
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
                                    <tr>
                                        <th>ID</th><td>{{ $kategoribarang->kode }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $kategoribarang->nama }} </td></tr>
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
