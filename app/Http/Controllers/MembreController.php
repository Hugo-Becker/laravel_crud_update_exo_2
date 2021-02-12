<?php

namespace App\Http\Controllers;

use App\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index()
    {
        $membres=Membre::all();
        return view('welcome',compact('membres'));
    }

    

    public function add()
    {

        return view('page.addMember');
    }

    public function store (Request $request) 
    {
        $newEntry= new Membre;

        $newEntry->nom=$request->nom;
        $newEntry->genre=$request->genre;
        $newEntry->age=$request->age;

        $newEntry->save();

        return redirect('/');
    }

    public function show($id)
    {
        $show=Membre::find($id);
        return view ('page.showMember',compact('show'));
    }

    public function edit($id)
    {

        $edit=Membre::find($id);

        return view ('page.editMember',compact("edit"));

    }


    public function delete($id)
    {
        $delete=Membre::find($id);
        $delete->delete();

        return redirect('/');
    }



    public function update($id, Request $request) 
    {
        $update= Membre::find($id);

        $update->nom=$request->nom;
        $update->genre=$request->genre;
        $update->age=$request->age;

        $update->save();

        return redirect('/showMember/'.$update->id);
    }
}
