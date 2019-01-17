<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Photo;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UserEditRequest;
class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$users = User::all();
		return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$roles = Role::pluck('id', 'name')->all();
		return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
	   $input = $request->all();
	  if($file = $request->file('photo_name')){
		   $name = time() . $file->getClientOriginalName();
		   $file->move('images', $name);
		   $photo = Photo::create(['file'=>$name]);
		   $input['photo_id'] = $photo->id;
		   
	   }
	   $input['password'] = password_hash($request->password, PASSWORD_DEFAULT);
	   User::create($input);
	   return redirect('/admin/users');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$user = User::find($id);
		return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        //
		$user = User::find($id);
		if(trim($request->password == '')){
			$input = $request->except('password');
		} else {
			$input = $request->all();
			$input['password'] = password_hash($request->password, PASSWORD_DEFAULT);
		}
		
		if($file = $request->file('photo_name')){
			$name = time() . $file->getClientOriginalName();
			$file->move('images', $name);
			$photo = Photo::create(['file'=>$name]);
			$input['photo_id'] = $photo->id;
			
		}
		
		$user->update($input);
		return redirect('/admin/users');
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
