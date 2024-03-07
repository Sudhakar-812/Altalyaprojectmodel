<?php

namespace App\Http\Controllers;

use App\Models\Care_Agent;
use Illuminate\Http\Request;

class CareAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careAgent = new Care_Agent();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $careAgent = new Care_Agent();
        $careAgent -> GSTIN_number = $request -> GSTIN_number;
        $careAgent -> certification_url = $request -> certification_url;
        $careAgent->save();
        return "data saved successfully";
        return response()->json(['careAgent'=>$careAgent]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $careagent = Care_Agent::find($id);
        return response()->json(['careagent'=>$careagent]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $careAgent = Care_Agent::find($id);
        $careAgent -> GSTIN_number = $request -> GSTIN_number;
        $careAgent -> certification_url = $request -> certification_url;
        $careAgent->save();
        return "data saved successfully";
        return response()->json(['careAgent'=>$careAgent]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $careagent = Care_Agent::find($id);
        $careagent->delete();
        return response()->json(['response'=>200,'careagent'=>$careagent]); 
    }
}
