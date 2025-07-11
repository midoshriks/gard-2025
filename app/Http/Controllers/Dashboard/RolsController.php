<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rols = Rol::all();

        // dd('', $rols);
        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.Rols.index', compact('rols'));
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
        $rol = new Rol();
        $rol->name = $request->name;
        $rol->status = $request->status;
        $rol->save();

        // dd($rol,);

        return redirect()->route('dashboard.rols.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        $rol = Rol::find($rol->id);

        return view('dasboard.pages.Rols.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $rol)
    {
        $rol = Rol::find($rol->id);
        $rol->name = $request->name;
        $rol->status = $request->status;
        $rol->update();

        // dd($rol,);

        return redirect()->route('dashboard.rols.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        $rol = Rol::find($rol->id)->delete();

        return redirect()->back();
    }
}
