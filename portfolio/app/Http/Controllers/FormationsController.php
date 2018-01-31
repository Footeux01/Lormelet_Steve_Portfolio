<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation = Formation::all();
        return view('admin.formations' , compact('formation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Formation $formation)
    {
        $formation->id_user = $request->id_user;
        $formation->period = $request->period;
        $formation->title_of_the_training = $request->title_of_the_training;
        $formation->organism = $request->organism;
        $formation->save();
        return redirect('formations')->with('message', 'La formation a bien été ajoutée');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$formation = Formation::find($request->id);
        $formation->period = $request->period;
        $formation->title_of_the_training = $request->title_of_the_training;
        $formation->organism = $request->organism;
        $formation->save();
        return redirect('formations')->with('message', 'La compétence a bien été modifiée');*/
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
        $formation = Formation::find($id);
        return view('admin.modif_formations', compact('formation'));
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
    	$update = Formation::where('id', '=', 
    	$id )->update(array('period' => $request->period, 
    						'title_of_the_training' => $request->title_of_the_training, 
    						'organism' => $request->organism, ));
    	return redirect()->route('formations.index')->with('message', 'La formation a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Formation::destroy($id);
        return redirect('formations')->with('message', 'La formation a bien été supprimée');
    }
}
