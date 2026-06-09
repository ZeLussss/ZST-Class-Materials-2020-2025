<?php

    include 'C:\xampp\htdocs\cwiczenia\0_0 - Kolory\funkcje.php';

?>

<form action="" method="post">

    <table>
    
        <tr>
    
            <td>
                <label for="liczba1">Wpisz numer:</label>
            </td>
    
            <td>
                <input type="text" name="liczba1"> <br>
            </td>
    
        </tr>
    
        <tr>
    
            <td>
                <label for="liczba2">Wpisz tekst:</label>
            </td>
    
            <td>
                <input type="text" name="liczba2"> <br>
            </td>
    
        </tr>
    
        <tr>

            <td style="text-align: right;" colspan="2">
                <input type="submit" value="Sprawdź">
            </td>
    
        </tr>
    
    </table>

</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];

        echo "Liczba 1: ".$liczba1."<br>";
        echo "Liczba 2: ".$liczba2."<br><br>";

        if( $liczba1 > $liczba2 )
        {
            echo "Liczba1 [".$liczba1."] jest większa niż liczba2 [".$liczba2."]<br>";
        }
        else if( $liczba2 > $liczba1 )
        {
            echo "Liczba2 [".$liczba2."] jest większa niż liczba1 [".$liczba1."]<br>";
        }
        else
        {
            echo "Liczba1 [".$liczba1."] jest równa liczbie2 [".$liczba2."]<br>";
        }
    }
?>


