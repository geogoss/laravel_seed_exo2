<?php

namespace App\Http\Controllers;

use App\Models\Compagny;
use Illuminate\Http\Request;

class CompagnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnies = Compagny::all();
        return view('pages.compagny', compact('compagnies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function show(Compagny $compagny)
    {
        return view('pages.show', compact('compagny'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function edit(Compagny $compagny)
    {
        return view('pages.edit', compact('compagny'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compagny $compagny)
    {
        $compagny->nom = $request->nom;
        $compagny->adresse = $request->adresse;
        $compagny->email = $request->email;
        $compagny->tel = $request->tel;
        $compagny->contactnom = $request->contactnom;
        $compagny->contactprenom = $request->contactprenom;
        $compagny->url = $request->url;
        $compagny->save();
        return redirect('/compagny/'.$compagny->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagny $compagny)
    {
        $compagny->delete();
        return redirect('/');
    }
}
