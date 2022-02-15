<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rodzajcwiczenia extends Model
{
    use HasFactory;

    // 1. Zdefiniowanie atrybutów.
    public $fillable=[
        'idrodzajucwiczenia'
    ];

    // 2. Zdefiniowanie nazwy tabeli, z ktorą model jest połączony.
    public $table='rodzajcwiczenia';

    // 3. Zdefiniowanie klucza głównego.
    public $primaryKey='idrodzajucwiczenia';

    // 4. Ustalenie jakiego typu jest klucz główny.
    public $incrementing=false;

    // 5. Ustawienie czasu wpisywania.
    public $timestamps=false;
}
