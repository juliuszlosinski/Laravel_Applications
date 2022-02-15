<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
        <div id="zawartosc">
                <h1>Lista uzytkownikow!</h1>
                <table>
                    <thead>
                        <td>Login</td>
                        <td>Hasło</td>
                        <td>Email</td>
                    </thead>
                    <tbody>
                        @foreach($uzytkownicy as $u)
                        <tr>
                            <td>{{$u->iduzytkownika}}</td>
                            <td>{{$u->haslo}}</td>
                            <td>{{$u->email}}</td> 
                            <td>
                            <form action={{"uzytkownik/".$u['iduzytkownika']}} method="POST">   
                            @method('delete')
                            @csrf
 
                                <input type="submit" value="usun"/>
                            </form>
</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>