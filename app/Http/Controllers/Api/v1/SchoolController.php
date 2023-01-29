<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\StoreSchoolRequest;
use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    public function index(){
        return response()->json("School TOP");
    }

    public function show(School $school){
        return $school;
    }

    public function store(StoreSchoolRequest $request){

        School::create($request->validated());
        return response()->json("Ecole cree avec succes");
    }

    public function update(StoreSchoolRequest $request, School $school){

        $school->update($request->validated());
        return response()->json("Ecole mise à jour avec succes");
    }

    public function destroy(School $school){
        $school->delete();
        return response()->json("Ecole supprimée avec succes");
    }
}
