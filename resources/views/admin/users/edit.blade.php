@extends('layouts.admin')
@section('admin')
    <h2>Edit User</h2>
	<div class="row">
	    <div class="col-3">
		    <img  height="50px" src="../../../images/{{ $user->photo ? $user->photo->file : 'No Photo'}}" alt="" class="img img-responsive" />
		</div>
		<div class="col-9">
			{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
				<div class="form-group">
					{!! Form::label('name', 'User Name') !!}
					{!! Form::text('name', null, ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('email', 'Email') !!}
					{!! Form::email('email', null, ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('photo_name', 'Image') !!}
					{!! Form::file('photo_name', null, ['class'=>'form-control']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('role_id', 'Role') !!}
					{!! Form::select('role_id', array(''=>'Select Options', '1'=>'Admin', '0'=>'subscriber'), null, ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('is_active', 'Active') !!}
					{!! Form::select('is_active', array(1=>'active', 0=>'inactive'), null, ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password', 'Password') !!}
					{!! Form::password('password',['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					
					{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
				</div>
				
			{!! Form::close() !!}
		</div>
	</div>
     @include('includes.form_errors')
@endsection