@extends('layouts.master')

@section('content-title')
	<h1>
        Page Header
        <small>Optional description</small>
   	</h1>

<!--     <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>   	 -->
@endsection


@section('content')    
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            
            <div class="box-header with-border">
              <h3 class="box-title">User Table</h3>
            </div>
            
            <div class="box-body table-responsive">
              <table class="table table-bordered ">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Progress</th>
                  <th style="width: 100px">Label</th>
                </tr>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user-> name }}</td>
						<td>
							@foreach($user->roles as $k=>$role)
								{{ $role->name }}{{ count($user->roles) > $k+1 ? ', ' : ''}}
							@endforeach
						</td>
						<td>
			                {!! Form::open(['url' => ['/manage/users/destroy', $user->id], 'method' => 'delete']) !!}
			                <div class='btn-group'>
			                    <a href="/manage/user/{{$user->id}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
			                    <a href="/manage/user/{{$user->id}}/edit" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
			                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
			                </div>
			                {!! Form::close() !!}
						</td>
					</tr>
				@endforeach                


              </table>
            </div>

            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    

@endsection
