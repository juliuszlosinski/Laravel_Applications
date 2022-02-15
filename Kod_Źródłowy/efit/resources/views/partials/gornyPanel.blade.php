<nav>
@if(Auth::check() && Auth::user()->name=='admin') 
    <div id="gornyPanel">
        <div>
            <a id="pierwszy" class="tytul">Cwiczenia:</a>
            <table>
                <tr>
                    <td><a href="{{config('app.url')}}/cwiczenie">Lista</a></td>
                    <td><a href="{{config('app.url')}}/cwiczenie/create">Dodaj</a></td>
                </tr>
            </table>
        </div>
    </div>
    @endif
@if(Auth::check() && Auth::user()->name!='admin')
    <div id="gornyPanel">
        <a id="pierwszy" class="tytul">Rozkład planu:</a>
        <table>
            <tr>
                <td><a href="{{config('app.url')}}/poniedzialek">Poniedzialek</a></td>
                <td><a href="{{config('app.url')}}/wtorek">Wtorek</a></td>
                <td><a href="{{config('app.url')}}/sroda">Sroda</a></td>
                <td><a href="{{config('app.url')}}/czwartek">Czwartek</a></td>
                <td><a href="{{config('app.url')}}/piatek">Piątek</a></td>
                <td><a href="{{config('app.url')}}/sobota">Sobota</a></td>
                <td><a href="{{config('app.url')}}/niedziela">Niedziela</a></td>
            </tr>
        </table>
    </div>
@endif
</nav>