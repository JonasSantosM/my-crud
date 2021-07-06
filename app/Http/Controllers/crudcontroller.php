<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

class crudcontroller extends Controller
{
    //
    public function index()
    {
        return view('crudcontroller.crud');
    }

    public function store(Request $request)
    {
        crud::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf
        ]);
        return redirect()->route('recuperar');
    }

    public function retrieve()
    {
        $cruds = crud::all();
        return view('crudcontroller.read', ['cruds' => $cruds]);
    }

    public function remove($id)
    {
        $crud = crud::findOrFail($id)->delete();  
        return redirect()->route('recuperar');  
    }

    public function edit($id, Request $request)
    {
        $crud = crud::findOrFail($id);
        $crud->update([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf
        ]);
        return redirect()->route('recuperar');  
    }
}
