<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
            <div id="zawartosc">

            <form method="POST" action="{{ config('app.url') }}/ustawPlan_">
            @csrf
            <h1>Wybierz plan</h1>
            <label>Id planu:</label>
            <select name="idPlanu">
                @foreach($plany as $p)
                <option value="{{ $p->idplanu }}">ID: {{$p->idplanu}} DATY: {{$p->data_zakupu}}, {{$p->data_zakonczenia}}</option>
                @endforeach
            </select>

            <input type="submit" value="Wybierz!"/>
            </form>
        </div>
    </body>
</html>