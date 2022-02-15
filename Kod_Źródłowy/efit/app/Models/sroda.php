<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sroda extends Model
{
    use HasFactory;

    // 1. Zdefiniowanie atrybutów.
    public $fillable=[
        'idwpisu',
        'idplanu',
        'idcwiczenia',
    ];

    // 2. Zdefiniowanie nazwy tabeli w bazie danych.
    public $table='sroda';

    // 3. Zdefiniowanie klucza głównego.
    public $primaryKey='idwpisu';

    // 4. Ustalenie jakiego typu jest klucz główny.
    public $incrementing=true;

    // 5. Ustawienie czasu wpisywania.
    public $timestamps=false;
}
