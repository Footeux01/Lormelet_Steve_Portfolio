<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Experience::all();
        return view('admin.experiences' , compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Experience $experience)
    {
        $experience->id_user = $request->id_user;
        $experience->period = $request->period;
        $experience->title_of_the_training = $request->title_of_the_training;
        $experience->organism = $request->organism;
        $experience->save();
        return redirect('experiences')->with('message', 'L\'experience a bien été ajoutée');
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
        $experience = Experience::find($id);
        return view('admin.modif_experiences', compact('experience'));
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
    	$update = Experience::where('id', '=', 
    	$id )->update(array('period' => $request->period, 
    						'title_of_the_training' => $request->title_of_the_training, 
    						'organism' => $request->organism, ));
    	return redirect()->route('experiences.index')->with('message', 'L\'experience a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Experience::destroy($id);
        return redirect('experiences')->with('message', 'L\'experience a bien été supprimée');
    }
}
