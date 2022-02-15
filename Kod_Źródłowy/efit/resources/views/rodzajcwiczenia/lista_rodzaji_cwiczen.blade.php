<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
        <div id="zawartosc">
                <h1>Rodzaje cwiczeń:</h1>
                <table>
                    <thead>
                        <td>Nazwa</td>
                    </thead>
                    <tbody>
                        @foreach($rodzajcwiczenia as $r)
                        <tr>
                            <td>{{$r->idrodzajucwiczenia}}</td>
                            <td>
                            <form action={{"rodzajcwiczenia/".$r['idrodzajucwiczenia']}} method="POST">   
                            @method('delete')
                            @csrf
 
                                <input type="submit" value="usun"/>
                            </form>
</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</br>
            </div>
        </div>
    </body>
</html>