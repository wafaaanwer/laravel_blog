@extends('layouts.admin')
@section('admin')
    <h2>Create Page</h2>
	{!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
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
			{!! Form::file('photo_name', ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('role_id', 'Role') !!}
			{!! Form::select('role_id', array(''=>'Select Options', '1'=>'Admin', '0'=>'subscriber'), 1, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('is_active', 'Active') !!}
			{!! Form::select('is_active', array(1=>'active', 0=>'inactive'), 0, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			
			{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
		</div>
		
	{!! Form::close() !!}
     @include('includes.form_errors')
@endsection