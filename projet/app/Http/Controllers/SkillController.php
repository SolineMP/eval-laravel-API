<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Validator;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::All();

        return response()->json([
            'state' => 'success',
            'description' => $skills,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json ([
                'state' => 'error',
                'message' => $validator->errors(),
            ]);
        } else { 
            $skill = new Skill ([
                'name' => $request->name,
            ]);
            $skill->save();
            return response()->json([
                'state' => 'sucess',
                'message' => 'Une nouvelle compétence a été ajoutée!',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        $skill = Skill::find($skill); 
        return response()->json([
            'state' => 'success',
            'message' => $skill,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json ([
                'state' => 'error',
                'message' => $validator->errors(),
            ]);
        } else {
            $skill = Skill::find($skill->id); 
            $skill->name = $request->name;
                
            $skill->save();
            return response()->json([
                'state' => 'success',
                'message' => $skill,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill = Skill::find($skill->id);
        $skill->delete();

        return response()->json([
            'state' => 'success',
            'message' => "La compétence a bien été supprimée",
        ]);
    }
}
