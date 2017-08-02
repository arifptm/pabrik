<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Flash;
use Response;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=> $users]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $req = $request->all();
        User::create($req);
        return redirect('/manage/users');
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('user.show', ['user'=>$user]);
    }

    public function edit($id){
        $u = User::findOrFail($id);
        return view('user.edit', ['user'=>$u]);        
    }


    public function update(Request $request, $id){
        $user = User::findOrFail($id);      
        $user -> update($request->all());
        Flash::success('User updated successfully.');
        return redirect('/manage/users');
    }


    public function destroy($id){
        $user = User::FindOrFail($id);
        $user -> delete($id);
        Flash::success('User deleted successfully.');
        return redirect('/manage/users');
    }
}
