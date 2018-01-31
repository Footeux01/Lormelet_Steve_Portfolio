<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projet = Projet::all();
        return view('admin.projets' , compact('projet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Projet $projet)
    {
        $projet->id_user = $request->id_user;
        $projet->title = $request->title;
        $projet->description = $request->description;
        $projet->image = $request->image->hashName();    
        $projet->save();
        $request->image->store(config('images.path'), 'public');
        return redirect('projets')->with('message', 'Le projet a bien été ajouté');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
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
        $projet = Projet::find($id);
        return view('admin.modif_projets', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$update = Projet::where('id', '=', 
    	$id )->update(array('title' => $request->title, 
    						'description' => $request->description, 
  	));
    	return redirect()->route('projets.index')->with('message', 'Le projet a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        projet::destroy($id);
        return redirect('projets')->with('message', 'Le projet a bien été supprimé');
    }
}
