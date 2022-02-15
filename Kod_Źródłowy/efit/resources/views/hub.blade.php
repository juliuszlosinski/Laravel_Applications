<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
            <div id="zawartosc">
                @if(Auth::check())
                    @if(Auth::user()->name=='admin')
                    <h1 align="center">Witaj admin!</h1>
                    <p style="padding-left: 5px; padding-right:5px">Co oferuje panel Admina?</p>
                    <div id="cs" style="padding-bottom:5px; padding-left:5px; padding-right:5px;">
						<ul class="list">
							<li>Dodawanie ćwiczeń,</li>
							<li>Usuwanie ćwiczeń,</li>
							<li>Dodawanie rodzaji ćwiczeń,</li>
							<li>Usuwanie rodzajii ćwiczeń,</li>
						</ul>
                    </div>
                    @else
                    <h1 align="center">Witaj {{Auth::user()->name}}</h1>
                    <div id="opis">
						<p>Co oferuje Efit?</p>
						<ul class="list">
							<li>Zakup planu,</li>
							<li>Wybór planu,</li>
							<li>Uzyskanie dokładnego opisu dnia,</li>
							<li>Wsparcie developerów,</li>
						</ul>
					</div>
                    @endif
                @else
                <h1 align="center">Witaj niezalogowany!</h1>
                <p align="center"><a href="{{ config('app.url') }}/register">Zarejestruj</a></p>
                <p align="center"><a href="{{ config('app.url') }}/login">Zaloguj</a></p>
                @endif
            </div>
        </div>
    </body>
</html>