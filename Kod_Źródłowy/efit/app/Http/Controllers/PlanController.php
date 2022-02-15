<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\plan;
use App\Models\poniedzialek;
use App\Models\wtorek;
use App\Models\sroda;
use App\Models\czwartek;
use App\Models\piatek;
use App\Models\sobota;
use App\Models\niedziela;
use App\Models\cwiczenie;

use Carbon\Carbon;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "listaPlanow";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("kupPlan");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Uzyskanie parametrów.
        $iloscTygodni=$request->get('iloscTygodni'); // Ilosc tygodni.
        $typTreningu=$request->get('typTreningu');   // Jak rodzaj treningu preferuje.
        $celTreningu=$request->get('celTreningu');   // Jaki jest cel treningu.
        $pon=$request->get('poniedzialek');
        $wto=$request->get('wtorek');
        $sro=$request->get('sroda');
        $czw=$request->get('czwartek');
        $pia=$request->get('piatek');
        $sob=$request->get('sobota');
        $nie=$request->get('niedziela');

        // Ilosc dni -> osoba ustawia.
        // Ilosc tygodni -> osoba ustawia.
        // Typ treningu -> określa czy FBW (codziennie wszystkie partie ciala), Split (podzial), Push-Pull(ogolne).
        // Cel treningu -> określa czy klient zamierza spalać czy zbudować masę miesniową czyli ilosc cwiczen.

        // 2. Utworzenie wpisu w tabeli "plan".
        plan::create([
            'iduzytkownika'=> Auth::user()->name,
            'data_zakupu'=>Carbon::now(),
            'data_zakonczenia'=>'2001-12-31',
        ]);

        // 3. Uzyskanie identyfikatora planu. 
        $idPlanu=DB::table('plan')->where('iduzytkownika', Auth::user()->name)->orderBy('idplanu', 'desc')->first()->idplanu;
        Session::put('idPlanu', $idPlanu);

        

        // 4. Dodanie losowych wpisów do tabel.
        for($i=0; $i<5;$i++)
        {
                if($pon==true){
                $idCwiczenia=cwiczenie::inRandomOrder()->get()->first()->idcwiczenia;
                poniedzialek::create([
                    'idplanu'=>$idPlanu,
                    'idcwiczenia'=>$idCwiczenia,
                ]);
            }
                if($wto==true){
                $idCwiczenia=cwiczenie::inRandomOrder()->get()->first()->idcwiczenia;
                wtorek::create([
                    'idplanu'=>$idPlanu,
                    'idcwiczenia'=>$idCwiczenia,
                ]);
            }

                if($sro==true){
                $idCwiczenia=cwiczenie::inRandomOrder()->get()->first()->idcwiczenia;
                sroda::create([
                    'idplanu'=>$idPlanu,
                    'idcwiczenia'=>$idCwiczenia,
                ]);
            }

                if($czw==true){
                $idCwiczenia=cwiczenie::inRandomOrder()->get()->first()->idcwiczenia;
                czwartek::create([
                    'idplanu'=>$idPlanu,
                    'idcwiczenia'=>$idCwiczenia,
                ]);
            }
                if($pia==true){
                $idCwiczenia=cwiczenie::inRandomOrder()->get()->first()->idcwiczenia;
                piatek::create([
                    'idplanu'=>$idPlanu,
                    'idcwiczenia'=>$idCwiczenia,
                ]);
            }

                if($sob==true){
                $idCwiczenia=cwiczenie::inRandomOrder()->get()->first()->idcwiczenia;
                sobota::create([
                    'idplanu'=>$idPlanu,
                    'idcwiczenia'=>$idCwiczenia,
                ]);
            }

                if($nie==true){
                $idCwiczenia=cwiczenie::inRandomOrder()->get()->first()->idcwiczenia;
                niedziela::create([
                    'idplanu'=>$idPlanu,
                    'idcwiczenia'=>$idCwiczenia,
                ]);
            }
        }
    
        return redirect('./');
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
        //
    }
}
