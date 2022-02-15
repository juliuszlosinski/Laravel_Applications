<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uzytkownik;

class UzytkownikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uzytkownicy=uzytkownik::all();
        return view('uzytkownik/lista_uzytkownikow', ['uzytkownicy' => $uzytkownicy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uzytkownik/dodaj_uzytkownika');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        uzytkownik::create([
            'iduzytkownika'=>$request->get('iduzytkownika'),
            'haslo'=>$request->get('haslo'),
            'email'=>$request->get('email'),
        ]);

        return redirect('/uzytkownik');
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
        $u = uzytkownik::find($id);
        $u->delete();
        return redirect('/uzytkownik');
    }
}
