<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $rols = Rol::all();

        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.Users.index', compact('users', 'rols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->rol_id = $request->rol_id;
        $user->phone = $request->phone;
        $user->whatsapp = $request->whatsapp;
        $user->code = $request->code;
        $user->status = $request->status;
        $user->password = bcrypt($request->password);
        $user->save();

        // dd($user);
        return redirect()->route('dashboard.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        $rols = Rol::all();

        return view('dasboard.pages.Users.edit', compact('user', 'rols'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());

        $user = User::find($user->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->rol_id = $request->rol_id;
        $user->phone = $request->phone;
        $user->whatsapp = $request->whatsapp;
        $user->code = $request->code;
        $user->status = $request->status;
        $user->password = bcrypt($request->password);
        $user->update();
        // dd($user);

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user = User::find($user->id)->delete();
        return redirect()->route('dashboard.users.index');
    }
}
