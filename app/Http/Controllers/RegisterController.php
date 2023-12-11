<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view( 'auth/register');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:30',
            'apellidos' => 'required | max:30',
            'username' => 'required | unique:users|min:3|max:30',
            'email' => 'required | unique:users|email|max:60',
            'rol' => 'required | max:20',
            'password' => 'required | confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'username' => $request->username,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' => bcrypt($request->password)
        ]);

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        return redirect()->route('post.index', auth()->user()) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
