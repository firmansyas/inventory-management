@extends('layouts.app')

@section('main-bar')
    <i class="fa fa-dashboard"></i>&nbsp; Dashboard
@endsection

@section('content')
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">
                <div class="col-lg-12">
                    <!-- ISI -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
    <!-- /#content -->
@endsection
