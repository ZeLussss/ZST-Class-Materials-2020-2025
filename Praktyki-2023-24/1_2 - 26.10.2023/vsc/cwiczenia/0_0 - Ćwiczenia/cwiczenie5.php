<?php 

    function zmienne_serwera()          // Tworzenie funkcji
    {
        print_r( $_SERVER );            // Wyświetlenie tablicy asocjacyjnej z zmiennymi ustawionymi przez serwer
    }
    // Aby włączyć obsługę długich tablic register_long_arrays w pliku php.ini(lokalizacja pliku C:/xampp/php) nadać wartość on

    function ciasteczka()
    {
        print_r( $_COOKIE );            // Ciasteczka
    }

    // Wywoływanie obu funkcji
    zmienne_serwera();
    echo "<br>Tak zadziałała funkcja zmienne_serwera";
    $ciasteczko = "rurka z kremem";

    setcookie( "nasze", $ciasteczko );

    echo "<br>************************************************";
    echo "<br>************************************************<br>";
    ciasteczka();
    echo "<br>************************************************";
    echo "<br>Tak zadziałała funkcja ciasteczka.";
    echo "<br>************************************************<br>";

    // Tablica
    echo "<br>************************************************<br> Tak działała wbudowana funkcja array <br>";

    $errno = array(
        1 => "CURLE_UNSUPPORTED_PROTOCOL",
        2 => "CURLE_FAILED_INT",
        3 => "CURLE_URL_MALFORMAT",
        4 => "CURLE_URL_MALFORMAT_USER"
    );
    print_r( $errno );

    // Predefiniowane zmienne - dodajemy link
    echo '<div>
        <a href = "https://www.php.net/manual/en/function.strrev.php"> Predefiniowane zmienne
     </div> ';
?>