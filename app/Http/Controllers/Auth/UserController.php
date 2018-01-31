<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function listUsers()
    {
    	$users = User::all();
    	return view('auth.list',['users'=>$users]);
    }

    public function search()
    {
        $categoria = Input::get('categoria');
        $chave = Input::get('chave');

        $users = User::where($categoria,'like',$chave.'%')->get();

        return view('auth.list', compact('users'));
    }
    

    public function editUser($id)
    {
    	$user = User::find($id);
    	return view('auth.edit',compact('user'));
    }

    public function updateUser(Request $request,$id)
    {
    	$user = User::find($id)->update($request->all());

    	if (Auth::user()->admin == 0) {
    		return redirect('/');
    	}else{
    		return redirect('admin/user/list');
    	}
    }

    public function deleteUser($id)
    {
        $user = User::find($id)->delete();
        return redirect('admin/user/list');
    }
}
