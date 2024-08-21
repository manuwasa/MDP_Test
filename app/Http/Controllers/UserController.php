<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        return view('user', [
            'title' => 'User',
            'users' => User::all()
        ]);
    }


    public function create()
    {
        //
        return view('userCreate', [
            'title' => 'Tambah User',
        ]);
    }


    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name'     => 'required',
            'email'     => 'required',
            'password'   => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //

        return view('userEdit', [
            'title' => 'Edit User',
            'data' => User::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name'     => 'required',
            'email'     => 'required',
            'password'   => 'required'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return view('user', [
            'title' => 'User',
            'users' => User::all()
        ]);
    }


    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();

        return view('user', [
            'title' => 'User',
            'users' => User::all()
        ]);
    }
}
