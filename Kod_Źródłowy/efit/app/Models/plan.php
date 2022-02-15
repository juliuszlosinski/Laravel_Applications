<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    use HasFactory;

    // 1. Zdefiniowanie atrybutów.
    public $fillable=[
        'idplanu',
        'iduzytkownika',
        'data_zakupu',
        'data_zakonczenia'
    ];

    // 2. Zdefiniowanie nazwy tabeli w bazie danych.
    public $table='plan';

    // 3. Zdefiniowanie klucza głównego.
    public $primaryKey='idplanu';

    // 4. Ustalenie jakiego typu jest klucz główny.
    public $incremeting=true;

    // 5. Ustawienie czasu wpisywania.
    public $timestamps=false;
}
