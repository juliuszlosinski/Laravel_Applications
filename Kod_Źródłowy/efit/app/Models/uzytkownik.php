<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uzytkownik extends Model
{
    use HasFactory;

    // 1. Zdefiniowanie atrybutów.
    public $fillable=[
        'iduzytkownika',
        'haslo',
        'email'
    ];

    // 2. Zdefiniowanie nazwy tabeli w bazie danych.
    public $table='uzytkownik';

    // 3. Zdefiniowanie klucza głównego.
    public $primaryKey='iduzytkownika';

    // 4. Ustalenie jakiego typu jest klucz glowny.
    public $incrementing=false;

    // 5. Ustalenie czy wpisywac czas.
    public $timestamps=false;
}
