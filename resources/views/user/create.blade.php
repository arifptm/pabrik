@extends('layouts.master')

@section('content-title')
        <h1>
            Tambah User
        </h1>
@endsection 

@section('content')      
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Success alert preview. This alert is dismissable.
        </div>
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['url' => '/manage/users']) !!}

                        @include('user.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection
