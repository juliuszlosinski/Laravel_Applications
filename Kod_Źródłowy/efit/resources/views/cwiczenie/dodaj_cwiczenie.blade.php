<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
            <div id="zawartosc">
                <h1>Dodaj cwiczenie:</h1>
                <form action="{{ config('app.url') }}/cwiczenie" method="POST">
                        @csrf
                <p>Nazwa ćwiczenia: <input type="text" name="idcwiczenia" required/></p>
                <p>Opis: <input type="text" name="opis" maxLength="50" required/></p>
                <p>Rodzaj ćwiczenia:  <select name="idrodzajucwiczenia"> @foreach($rodzajecwiczen as $r) <option value="{{$r->idrodzajucwiczenia}}">{{$r->idrodzajucwiczenia}}</option>  @endforeach </select></p> 
                <p>Link do filmu: <input type="text" name="film" required/></p>
                <p align="center"><input type="submit" value="Dodaj!"/></p>
            </form>
        </div>
    </body>
</html>