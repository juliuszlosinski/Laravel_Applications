<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
            <div id="zawartosc">

            <form method="POST" action="{{ config('app.url') }}/plan">
                @csrf
            <h2>Wypełni formularz zgłoszeniowy:</h2>
            <p>
			            	<b>Ilość tygodni: </b> 
				            <select name ="iloscTygodni">
				                <option value="1">1</option>
				                <option value="2">2</option>
				                <option value="3">3</option>
				                <option value="4">4</option>
				                <option value="5">5</option>
				                <option value="6">6</option>
				                <option value="7">7</option>
				            </select>
			            </p>
			            
			            <p>
			            	<b>Typ treningu: </b>
				          	<select name ="typTreningu">
				                <option value="FBW">FBW</option>
				                <option value="Split">Split</option>
				                <option value="Push-Pull">Push-Pull</option>
				            </select>
			            </p>
			            
			            <p>
			            	<b>Cel treningu:</b>
				            <select name ="celTreningu">
				                <option value="spalanieKalorii">Spalanie kalorii</option>
				                <option value="budowaMasy">Budowa masy</option>
				            </select>
			            </p>
			            
			            <p><b>Dni treningowe:</b></p>
			            <p>Poniedziałek: <input type="checkbox" name ="poniedzialek"></p>
			            <p>Wtorek: <input type="checkbox" name ="wtorek"></p>
			            <p>Środa: <input type="checkbox"  name ="sroda"></p>
			            <p>Czwartek: <input type="checkbox" name ="czwartek"></p>
			            <p>Piątek: <input type="checkbox" name ="piatek"></p>
			            <p>Sobota: <input type="checkbox" name ="sobota"></p>
			            <p>Niedziela: <input type="checkbox" name ="niedziela"></p>

			                <p align="center"><input type="submit" value="Kup plan!"/></p>
                </form>
            </div>
        </div>
    </body>
</html>