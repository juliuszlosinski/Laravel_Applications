<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
            <div id="zawartosc">
                <h1>Lista ćwiczeń:</h1>
                <form method="POST" action="{{ config('app.url') }}/lista_cwiczen">
                @csrf
                <p align="center">Rodzaj ćwiczenia: <select name="idrodzajucwiczenia"> @foreach($rodzajecwiczen as $r) <option value="{{$r->idrodzajucwiczenia}}">{{$r->idrodzajucwiczenia}}</option> @endforeach</select></p>
                <p align="center"><input type="submit" value="Sortuj!"/></p>
                </form>
                @foreach($cwiczenia as $c)
                    <div class="cwiczenie">
                    <table>
                    <tr>
                        <td>
                            <div clas="cwiczenie">
                                <h3>Nazwa: {{$c->idcwiczenia}}</h3>
                                <p>Opis: {{$c->opis}}</p>
                                <p>Rodzaj: {{$c->idrodzajucwiczenia}}</p>
                                <p>Usuń:
                                <form action={{"cwiczenie/".$c['idcwiczenia']}} method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="usun"/>
                                </form> 
                            </div>
                        </td>
                        <td>
                            <div class="film">
                                <p>
                                    <iframe width="340" height="300" min-width="340" min-height="300" max-width="340" max-height="300" src={{$c->film}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
                                </p>
                            </div>
                        </td>
                    </tr>  
                    </table>  
                    </div>                
                    @endforeach
            </table>
            </div>
        </div>
    </body>
</html>