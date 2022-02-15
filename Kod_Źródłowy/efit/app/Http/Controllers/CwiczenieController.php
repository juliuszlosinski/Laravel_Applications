<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cwiczenie;
use App\Models\rodzajcwiczenia;

class CwiczenieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cwiczenia=cwiczenie::all();
        $rodzajecwiczen=rodzajcwiczenia::all();
        return view('cwiczenie/lista_cwiczen_DEF', ['cwiczenia'=>$cwiczenia, 'rodzajecwiczen'=>$rodzajecwiczen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rodzajecwiczen=rodzajcwiczenia::all();
        return view('cwiczenie/dodaj_cwiczenie', ['rodzajecwiczen'=>$rodzajecwiczen]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        cwiczenie::create([
            'idcwiczenia'=>$request->get('idcwiczenia'),
            'opis'=>$request->get('opis'),
            'idrodzajucwiczenia'=>$request->get('idrodzajucwiczenia'),
            'film'=>$request->get('film'),
        ]);

        return redirect('/cwiczenie');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c=cwiczenie::find($id);
        $c->delete();
        return redirect("/cwiczenie");
    }
}
