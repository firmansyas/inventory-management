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
                            <div class="icons">
                            <a href="{{ url('/supplier') }}" title="Back"><button class="btn btn-default btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                            </div>
                            <h5>Ubah Supplier</h5>
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

                        <form method="POST" action="{{ url('/supplier/' . $supplier->kode_supplier) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('supplier.form', ['submitButtonText' => 'Update'])

                        </form>

                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
