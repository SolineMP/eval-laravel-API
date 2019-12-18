<?php

namespace App\Http\Controllers;

use App\InternSkill;
/* use App\Intern;
use App\Skill;  */
use Validator;
use Illuminate\Http\Request;

class InternSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internskill = InternSkill::All();

        return response()->json([
            'state' => 'success',
            'description' => $internskill,
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
            'intern_id' => 'required',
            'skill_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json ([
                'state' => 'error',
                'message' => $validator->errors(),
            ]);
        } else { 
            $internSkill= new InternSkill ([
                'intern_id' => $request->intern_id,
                'skill_id' => $request->skill_id,
            ]);
            $internSkill->save();
            return response()->json([
                'state' => 'success',
                'message' => "Nous avons bien ajouté cette compétence à l'élève",
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function show(InternSkill $internskill)
    {
        $internskill = InternSkill::find($internskill->id); 
        return response()->json([
            'state' => 'success',
            'message' => $internskill,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InternSkill $internskill)
    {
        $validator = Validator::make($request->all(), [
            'intern_id' => 'required',
            'skill_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json ([
                'state' => 'error',
                'message' => $validator->errors(),
            ]);
        } else {
            $internSkill = InternSkill::find($internskill->id); 
            $internSkill->intern_id = $request->intern_id;
            $internSkill->skill_id = $request->skill_id;
                
            $internSkill->save();
            return response()->json([
                'state' => 'success',
                'message' => $internSkill,
            ]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternSkill $internskill)
    {
        $internskill = InternSkill::find($internskill->id); 
        $internskill->delete();

        return response()->json([
            'state' => 'success',
            'message' => "L'élève a bien perdu cette compétence",
        ]);
    }
}
