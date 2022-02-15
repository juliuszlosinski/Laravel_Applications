<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rodzajcwiczenia;

class RodzajCwiczeniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rodzajcwiczenia=rodzajcwiczenia::all();
        return view('rodzajcwiczenia/lista_rodzaji_cwiczen', ['rodzajcwiczenia'=>$rodzajcwiczenia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rodzajcwiczenia/dodaj_rodzaj_cwiczenia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        rodzajcwiczenia::create([
           'idrodzajucwiczenia'=>$request->get('idrodzajucwiczenia') 
        ]);
        return redirect('/rodzajcwiczenia');
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
        $r=rodzajcwiczenia::find($id);
        $r->delete();
        return redirect('/rodzajcwiczenia');
    }
}
