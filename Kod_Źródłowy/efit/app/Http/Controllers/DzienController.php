<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DzienController extends Controller
{
    public function getPoniedzialek()
    {
        $day="poniedzialek";
        $rozpiska= DB::table('cwiczenie')->join($day, 'cwiczenie.idcwiczenia', '=', $day.'.idcwiczenia')->where('idplanu',Session::get('idPlanu'))->get(); 
        return view("DniTygodnia/poniedzialek", ['rozpiska'=>$rozpiska]);
    }

    public function getWtorek()
    {
        $day="wtorek";
        $rozpiska= DB::table('cwiczenie')->join($day, 'cwiczenie.idcwiczenia', '=', $day.'.idcwiczenia')->where('idplanu',Session::get('idPlanu'))->get(); 
        return view("DniTygodnia/wtorek", ['rozpiska'=>$rozpiska]);
    }

    public function getSroda()
    {
        $day="sroda";
        $rozpiska= DB::table('cwiczenie')->join($day, 'cwiczenie.idcwiczenia', '=', $day.'.idcwiczenia')->where('idplanu',Session::get('idPlanu'))->get(); 
        return view("DniTygodnia/sroda", ['rozpiska'=>$rozpiska]);
    }

    public function getCzwartek()
    {
        $day="czwartek";
        $rozpiska= DB::table('cwiczenie')->join($day, 'cwiczenie.idcwiczenia', '=', $day.'.idcwiczenia')->where('idplanu',Session::get('idPlanu'))->get(); 
        return view("DniTygodnia/czwartek", ['rozpiska'=>$rozpiska]);
    }

    public function getPiatek()
    {
        $day="piatek";
        $rozpiska= DB::table('cwiczenie')->join($day, 'cwiczenie.idcwiczenia', '=', $day.'.idcwiczenia')->where('idplanu',Session::get('idPlanu'))->get(); 
        return view("DniTygodnia/piatek", ['rozpiska'=>$rozpiska]);
    }

    public function getSobota()
    {
        $day="sobota";
        $rozpiska= DB::table('cwiczenie')->join($day, 'cwiczenie.idcwiczenia', '=', $day.'.idcwiczenia')->where('idplanu',Session::get('idPlanu'))->get(); 
        return view("DniTygodnia/sobota", ['rozpiska'=>$rozpiska]);
    }

    public function getNiedziela()
    {
        $day="niedziela";
        $rozpiska= DB::table('cwiczenie')->join($day, 'cwiczenie.idcwiczenia', '=', $day.'.idcwiczenia')->where('idplanu',Session::get('idPlanu'))->get(); 
        return view("DniTygodnia/Niedziela", ['rozpiska'=>$rozpiska]);
    }
}
