<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
            <div id="zawartosc">
                <h1>Dodaj uzytkownika:</h1>
            <form action="{{ config('app.url')}}/uzytkownik" method="POST">
            @csrf
            <label>Login:</label>
            <input type="text" name="iduzytkownika"/>
</br>
            <label>Haslo:</label>
            <input type="text" name="haslo"/>
</br>
            <label>Email:</label>
            <input type="text" name="email"/>
</br>
            <input type="submit" value="Dodaj!"></input>
            </form>
            </div>
        </div>
    </body>
</html>