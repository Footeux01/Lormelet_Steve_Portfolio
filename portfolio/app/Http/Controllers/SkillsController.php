<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills' , compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Skill $skill)
    {
        $skill->id_user = $request->id_user;
        $skill->competence = $request->competence;
        $skill->group_of_competence = $request->group_of_competence;
        $skill->level = $request->level;
        $skill->save();
        return redirect('skills')->with('message', 'La compétence a bien été ajoutée');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = Skill::find($request->id);
        $skill->competence = $request->competence;
        $skill->group_of_competence = $request->group_of_competence;
        $skill->level = $request->level;
        $skill->save();
        return redirect('skills')->with('message', 'La compétence a bien été modifiée');
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
        $skill = Skill::find($id);
        return view('admin.modif_skills', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Skill::destroy($id);
        return redirect('skills')->with('message', 'La compétence a bien été supprimée');
    }
}
