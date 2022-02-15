<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
            <div id="zawartosc">
                <h1>Piątek:</h1>
                @if(count($rozpiska)>0)
                    @foreach($rozpiska as $c)
                    <div class="cwiczenie">
                        <table>
                        <tr>
                            <td>
                                <h3>Nazwa: {{$c->idcwiczenia}}</h3>
                                <p>Opis: {{$c->opis}}</p>
                                <p>Rodzaj: {{$c->idrodzajucwiczenia}}</p>
                            </td>
                            <td>
                                <p>
                                    <iframe width="340" height="300" min-width="340" min-height="300" max-width="340" max-height="300" src={{$c->film}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
                                </p>
                            </td>
                        </tr>  
                        </table>  
                    </div>                
                    @endforeach
                @else
                    <h2 align="center"><i>W tym dniu nie ćwiczysz!</i></h2>
                    <img width="300px" height="300px" style="padding: 10px; margin-bottom:5px;" src="sleeping_guy.png"/>
                @endif
            </div>
        </div>
    </body>
</html>