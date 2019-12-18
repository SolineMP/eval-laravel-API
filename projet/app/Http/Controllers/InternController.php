<?php

namespace App\Http\Controllers;

use App\Intern;
use App\Skill;
use Validator;
use Illuminate\Http\Request;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interns = Intern::All();

        return response()->json([
            'state' => 'success',
            'description' => $interns,
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
            'firstname' => 'required|max:255',
            'lastname' => 'required',
            'age' => 'required|integer|max:255',
            'phone_number' => 'required|unique:interns|max:255',
            'email' => 'required|unique:interns',
        ]);

        if ($validator->fails()) {
            return response()->json ([
                'state' => 'error',
                'message' => $validator->errors(),
            ]);
        } else { 
            $intern = new Intern ([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'age' => $request->age,
                'phone_number' => $request->phone_number,
                'email' => $request->email
            ]);
            $intern->save();
            return response()->json([
                'state' => 'sucess',
                'message' => 'Un nouvel apprenant a été ajouté!',
            ]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function show(Intern $intern)
    {
        $intern = Intern::find($intern); 
        return response()->json([
            'state' => 'success',
            'message' => $intern,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intern $intern)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:255',
            'lastname' => 'required',
            'age' => 'required|integer|max:255',
            'phone_number' => 'required|unique:interns|max:255',
            'email' => 'required|unique:interns',
        ]);

        if ($validator->fails()) {
            return response()->json ([
                'state' => 'error',
                'message' => $validator->errors(),
            ]);
        } else {
            $intern = Intern::find($intern->id); 
            $intern->firstname = $request->firstname;
            $intern->lastname = $request->lastname;
            $intern->age = $request->age;
            $intern->phone_number = $request->phone_number;
            $intern->email = $request->email;
                
            $intern->save();
            return response()->json([
                'state' => 'success',
                'message' => $intern,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intern $intern)
    {
        $intern = Intern::find($intern->id);
        $intern->delete();

        return response()->json([
            'state' => 'success',
            'message' => "L'apprenant a bien été supprimé",
        ]);
    }
}
