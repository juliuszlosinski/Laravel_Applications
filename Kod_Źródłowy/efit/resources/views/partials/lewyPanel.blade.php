<nav>
    <div id="lewyPanel">
    <table>
    <tr>
            <td>
                <a href="{{ config('app.url') }}/">Strona główna</a>
            </td>
    </tr>
    </table>

    @if(Auth::check() && Auth::user()->name=='admin')
    <table>
        <tr>
            <td><a class="tytul">Rodzaje cwiczen:</a></td>
        </tr>
        <tr>
            <td><a  href="{{ config('app.url')}}/rodzajcwiczenia">Lista</a></td>
        </tr>
        <tr>
            <td><a href="{{ config('app.url')}}/rodzajcwiczenia/create">Dodaj</a></td>
        </tr>
        <tr>
            <td><a class="tytul">Użytkownicy:</a></td>
        </tr>
        <tr>
            <td><a  href="{{ config('app.url')}}/User">Lista</a></td>
        </tr>
        <tr>
            <td><a  href="{{ config('app.url')}}/User/create">Dodaj</a></td>
        </tr>
    </table>
    @endif

    @if(Auth::check() && Auth::user()->name!='admin')
    <table>
        <div id="plan">
        <tr>
            <td><a class="tytul">Plan:</a></td>
        </tr>
        <tr>
            <td><a>Obecnie wybrany plan: {{Session::get('idPlanu')}}</a></td>
        </tr>
        <tr>
            <td><a href="{{ config('app.url') }}/ustawPlan">Wybierz</a></td>
        </tr>
        <tr>
            <td><a href="{{ config('app.url')}}/plan/create">Kup</a></td>
        </tr>
        </div>
    </table>
    @endif

            <!---
            <div id="uzytkownicy">
                <a class="tytul">Uzytkownicy:</a>
            </br>
                <a  href="{{ config('app.url')}}/uzytkownik">Lista</a>
            </br>
                <a href="{{ config('app.url')}}/uzytkownik/create">Dodaj</a>
            -->
    <table>
        <div id="logowanie">
        <tr>
            <td><a class="tytul">Konto:</a></td>
        </tr>
        @if(Auth::check()) 
        <tr>
            <td>
                <a>Obecnie zalogowany: {{Auth::user()->name}}</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ config('app.url') }}/loguj">Wyloguj</a>
            </td>
        </tr>
        @else
        <tr>
            <td>
                <a href="{{ config('app.url') }}/register">Zarejestruj</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ config('app.url') }}/login">Zaloguj</a>
            </td>
        </tr>
        @endif
        </div>
    </table>

    </div>
</nav>