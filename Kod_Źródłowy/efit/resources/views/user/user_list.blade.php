<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
        <div id="zawartosc">
                <h1>Użytkownicy:</h1>
                <table>
                    <thead>
                        <td><b>Nazwa</b></td>
                        <td><b>Email</b></td>
                        <td><b>Hasło</b></td>
                    </thead>
                    <tbody>
                        @foreach($users as $u)
                        <tr>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>Zaszyfrowane!</td>
                            <td>
                            <form action={{"User/".$u['id']}} method="POST">   
                            @method('delete')
                            @csrf
                                <input type="submit" value="usun"/>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</br>
            </div>
        </div>
    </body>
</html>