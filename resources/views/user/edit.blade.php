@extends('layouts.master')

@section('content_title')
        <h1>
            Product
        </h1>
@endsection

@section('content')
       <!-- include('adminlte-templates::common.errors') -->
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['url' => 'UserController@store', 'method' => 'patch']) !!}

                        @include('user.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection