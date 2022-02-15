<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\plan;
use App\Models\rodzajcwiczenia;
use App\Models\cwiczenie;
use App\Models\poniedzialek;
use App\Models\wtorek;
use App\Models\sroda;
use App\Models\czwartek;
use App\Models\piatek;
use App\Models\sobota;
use App\Models\niedziela;

class PodstawowyController extends Controller
{
    public function zwrocStroneDomowa()
    {
        $plany=plan::all();
        return view('hub', ['plany'=>$plany]);
    }

    public function ustawPlan()
    {
        $name=Auth::user()->name;
        $plany=plan::where('iduzytkownika', '=', $name)->get();
        return view('ustawPlan', ['plany'=>$plany]);
    }

    public function poniedzialek()
    {
        $poniedzialek=poniedzialek::where('idplanu', '=', Session::get('idPlanu'))->get();
        return view('poniedzialek', ['poniedzialek'=>$poniedzialek]);
    }

    public function wtorek()
    {
        $wtorek=wtorek::where('idplanu', '=', Session::get('idPlanu'))->get();
        return view('wtorek', ['wtorek'=>$wtorek]);
    }

    public function sroda()
    {
        $sroda=sroda::where('iduzytkownika', '=', Session::get('idPlanu'))->get();
        return view('sroda', ['sroda'=>$sroda]);
    }

    public function czwartek()
    {
        $czwartek=czwartek::where('iduzytkownika', '=', Session::get('idPlanu'))->get();
        return view('czwartek', ['czwartek'=>$czwartek]);
    }

    public function lista_cwiczen(Request $request)
    {
        $cwiczenia=cwiczenie::all();
        $rodzajecwiczen=rodzajcwiczenia::all();
        $obecny=$request->get('idrodzajucwiczenia');
        return view("cwiczenie/lista_cwiczen", ['obecny'=>$obecny, 'cwiczenia'=>$cwiczenia, 'rodzajecwiczen'=>$rodzajecwiczen]);
    }

    public function piatek()
    {
        $piatek=piatek::where('iduzytkownika', '=', Session::get('idPlanu'))->get();
        return view('piatek', ['piatek'=>$piatek]);
    }

    public function sobota()
    {
        $sobota=sobota::where('iduzytkownika', '=', Session::get('idPlanu'))->get();
        return view('sobota', ['sobota'=>$sobota]);
    }

    public function niedziela()
    {
        $niedziela=niedziela::where('iduzytkownika', '=', Session::get('idPlanu'))->get();
        return view('niedziela', ['niedziela'=>$niedziela]);
    }


    public function ustawPlan_(Request $request)
    {
        Session::put('idPlanu', $request->idPlanu);
        return view('hub');
    }

    public function zmienStanUwierzytelnienia()
    {
        if(auth()->check())
        {
            $user=auth()->user();
            Auth::logout();
            return view('wylogowano');
        }else
        {
            return redirect('/register');   
        }
    }

    public function kupPlan()
    {
        return view('kupPlan');
    }
}
