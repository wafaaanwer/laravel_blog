@extends('layouts.admin')
@section('admin')
<h1>Welcome User</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
	  <th scope="col">Email</th>
	  <th scope="col">Role</th>
	  <th scope="col">isActive</th>
	  <th scope="col">Created</th>
	  <th scope="col">Updated</th>
    </tr>
  </thead>
  <tbody>
          @if($users)
      
			  @foreach($users as $user)
				  <tr>
				      <td>{{$user->ud}}</td>
					  <td>{{$user->name}}</td>
					  <td>{{$user->email}}</td>
					  <td>{{$user->role_id}}</td>
					  <td>{{$user->is_active  == 1 ? 'Active' : 'Not Active'}}</td>
					  <td>{{$user->created_at->diffForHumans()}}</td>
					  <td>{{$user->updated_at}}</td>
				   <tr>
			  @endforeach
	      @endif
	  
    
  </tbody>
</table>
@endsection