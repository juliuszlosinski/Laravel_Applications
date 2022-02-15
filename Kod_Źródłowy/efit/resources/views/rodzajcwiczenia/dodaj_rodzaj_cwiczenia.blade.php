<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
        <div id="zawartosc">
                <h1>Dodaj rodzaj ćwiczenia:</h1>
                <form action="{{ config('app.url') }}/rodzajcwiczenia" method="POST">
                    @csrf
                    <label>Nazwa:</label>
                    <input type="text" name="idrodzajucwiczenia"/>
                    <input type="submit" value="Dodaj!"/>
                </form>
            </div>
        </div>
    </body>
</html>