@extends('layouts.master')

@section('title', 'Home')

@section('sidebar')

    @include('sidebar')
 
@stop

@section('content')

    <div class="jumbotron text-center">
        <h1>Bienvenido</h1>
        <p>ModelFest</p> 
    </div>

	{{--<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">                    
                <div class="panel panel-success">
                    <div class="panel-heading">
                            Info
                    </div>
                    <div class="panel-body">
                        Content
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

@stop
