<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl1.css">

    <title>Restauracja Wszytskie Smaki</title>
</head>
<body>

    <section id="baner">

        <h1>Witamy w restauracji "Wszystkie Smaki"</h1>

    </section>

    <section id="lewy">

        <img src="menu.jpg" alt="Nasze danie">

    </section>

    <section id="prawy">

        <h4>U nas dobrze zjesz!</h4>

        <ul>

            <li>Obiady od 40 zł</li>
            <li>Przekąski od 10 zł</li>
            <li>Kolacje od 20 zł</li>

        </ul>

    </section>

    <section id="dolny">

        <h2>Zarezerwuj stolik on-line</h2>

        <form action="rezerwacja.php" method="post">

            <label for="data_rez">Data (format rrrr-mm-dd)</label> <br>
            <input type="text" name="data_rez" id="data_rez"> <br>

            <label for="ile_osob">Ile osób?</label> <br>
            <input type="number" name="ile_osob" id="ile_osob"> <br>

            <label for="telefon">Twój numer telefonu: </label> <br>
            <input type="text" name="telefon" id="telefon"> <br>

            <input type="checkbox" name="dane_osobowe" id="dane_osobowe"> 
            <label for="dane_osobowe">Zgadzam się na przetwarzanie moich danych osobowych</label> <br>

            <button type="reset">WYCZYŚĆ</button>
            <button type="submit">REZERWUJ</button>

        </form>

    </section>

    <section id="stopka">

        Stronę internetową opracował: <i>Ksawery Zelek</i>

    </section>
    
</body>
</html>