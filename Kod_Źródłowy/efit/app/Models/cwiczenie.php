<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cwiczenie extends Model
{
    use HasFactory;

    // 1. Zdefiniowanie atrybutów.
    public $fillable=[
        'idcwiczenia',
        'opis',
        'idrodzajucwiczenia',
        'film'
    ];

    // 2. Zdefiniowanie nazwy tabeli w bazie danych.
    public $table='cwiczenie';

    // 3. Zdefiniowanie klucza głównego.
    public $primaryKey='idcwiczenia';

    // 4. Ustalenie jakiego typu jest klucz główny.
    public $incrementing=false;

    // 5. Ustawienie czasu wpisywania.
    public $timestamps=false;
}
