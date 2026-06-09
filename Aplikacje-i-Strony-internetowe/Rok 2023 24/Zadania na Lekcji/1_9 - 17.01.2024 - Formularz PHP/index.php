<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Formularz PHP</title>
  <meta charset="utf-8" />
  <meta name="keywords" content="HTML, PHP" />  
  <meta name="description" content="Sprawdzian z PHP" />
  <meta name="author" content="Jan Kowalski" />
  <meta name="copyright" content="J@an Kowalski" />  
  <meta name="generator" content="Brackets++" />
  <meta name="reply-to" content="zst.www@tarnow.pl" /> 
  <meta name="robots" content="index,follow" /> 
  <link rel="stylesheet" href="CSS/style.css" />
</head>
<body>

<div id="container">
    
    <div id="banner">

        <img src="img/banner.jpg" alt="">

    </div>

    <div class="row-content">

        <div id="the_biggest">
    
            <p class="title">Największe firmy</p>
    
            <div class="companies"> <div> Toyota Motor Co. </div> </div>
            <div class="companies"> <div> Volkswagen Group </div> </div>
            <div class="companies"> <div> Daimler </div> </div>
            <div class="companies"> <div> Ford Motor </div> </div>
            <div class="companies"> <div> BMW Group </div> </div>
            <div class="companies"> <div> General Motors </div> </div>
    
        </div>
    
        <div id="formularz">
    
            <p class="title">Formularz kupna samochodu</p>
    
            <form action="wyswietlDane.php" method="post">
    
                <!-- Marka i Model -->
                <table class="marka-model">
    
                    <tr>
    
                        <th>
                            <label for="marka">Marka:</label>
                        </th>
    
                        <th>
                            <input type="text" name="marka" id="marka">
                        </th>
    
                    </tr>
    
                    <tr>
    
                        <th>
                            <label for="model">Model:</label>
                        </th>
    
                        <td>
                            <input type="text" name="model" id="model">
                        </td>
    
                    </tr>
    
                </table>
    
    
                <!-- Skrzynia biegów -->
                <div class="special-title-in-form">Skrzynia biegów:</div>
    
                <div class="row-content row-content1">

                    <input type="radio" name="gearbox" id="automatic" value="automatyczna">
                    <label for="automatic"><b>Automatyczna</b></label>
        
                    <input type="radio" name="gearbox" id="manual" value="manualna">
                    <label for="manual"><b>Manualna</b></label>

                </div>

    
    
                <!-- Dane sprzedawcy -->
                <div class="special-title-in-form">Dane sprzedawcy:</div>
    
                <table class="dane-sprzedawcy">
    
                    <tr>
    
                        <th>
                            <label for="nazwa-sprzedawcy">Nazwa sprzedawcy:</label>
                        </th>
    
                        <td>
                            <input type="text" name="nazwa-sprzedawcy" id="nazwa-sprzedawcy">
                        </td>
    
                    </tr>
    
                    <tr>
    
                        <th>
                            <label for="e-mail">e-mail:</label>
                        </th>
    
                        <td>
                            <input type="text" name="e-mail" id="e-mail">
                        </td>
    
                    </tr>
    
                    <tr>
    
                        <th>
                            <label for="miejscowosc">Miejscowość</label>
                        </th>
    
                        <td>
                            <select name="miejscowosc" id="miejscowosc">
    
                                <option value="Tarnów">Tarnów</option>
                                <option value="Kraków">Kraków</option>
                                <option value="Rzeszów">Rzeszów</option>
                                <option value="Lublin">Lublin</option>
                                <option value="Gdańsk">Gdańsk</option>
                                <option value="Szczecin">Szczecin</option>
    
                            </select>
                        </td>
    
                    </tr>
    
                </table>
    
                <!-- Dane dodatkowe -->
                <fieldset>
    
                    <legend>Dane dodatkowe</legend>
    
                    <!-- Wyposażenie -->
                    <div class="special-title-in-form">Wyposażenie</div>
    
                    <table class="table-red">
    
                        <tr>
    
                            <td>
                                <input type="checkbox" name="wyposazenie" id="wyposazenie-1" value="Aktywne zawieszenie">
                            </td>
    
                            <th>
                                <label for="wyposazenie-1">Aktywne zawieszenie</label>
                            </th>
    
                        </tr>
    
                        <tr>
    
                            <td>
                                <input type="checkbox" name="wyposazenie" id="wyposazenie-2" value="Czujniki parkowania">
                            </td>
    
                            <th>
                                <label for="wyposazenie-2">Czujniki parkowania</label>
                            </th>
    
                        </tr>
    
                        <tr>
    
                            <td>
                                <input type="checkbox" name="wyposazenie" id="wyposazenie-3" value="Servotronic">
                            </td>
    
                            <th>
                                <label for="wyposazenie-3">Servotronic</label>
                            </th>    
                            
                        </tr>
    
                        <tr>
    
                            <td>
                                <input type="checkbox" name="wyposazenie" id="wyposazenie-4" value="DSC">
                            </td>
    
                            <th>
                                <label for="wyposazenie-4">DSC</label>
                            </th>
    
                        </tr>
    
                    </table>
    
                    <label for="inne" class="red"> <b> Inne (twoje sugestie): </b> &nbsp;</label>
                    <input type="text" name="inne">
    
    
                    <!-- Kolor -->
                    <div class="special-title-in-form">Kolor:</div>

                    <img src="img/zdjecie.png" alt="samochód">
    
                    <select name="color" id="color" size="5">
    
                        <option value="Pacific Blue">Pacific</option>
                        <option value="Panther Black">PantherBlack</option>
                        <option value="Diamond White">DiamondWhite</option>
                        <option value="Laserrot">WhiteLaserrot</option>
                        <option value="Wilde white">Wilde white</option>
    
                    </select>

    
                    <!-- Uwagi -->
                    <div class="special-title-in-form">Uwagi:</div>
    
                    <textarea name="uwagi" id="uwagi" cols="35" rows="5"></textarea>
    
    
                    <!-- Dane kontaktowe: -->
                    <div class="special-title-in-form">Dane kontaktowe:</div>
    
                    <textarea name="dane-kontaktowe" id="dane-kontaktowe" cols="35" rows="5"></textarea>
    
                </fieldset>
    
                <div id="end-of-form">

                    <input type="submit" value="Wyślij dane">
                    <input type="reset" value="Wyczyść formularz">

                </div>

    
            </form>
    
        </div>
    
        <div id="dane">
    
            <img src="img/auto.jpg" alt="samochód">
    
            <p class="special-title-zst">Zespół Szkół Technicznych</p>
    
            <h3>im. Ignacego Mościckiego</h3>
            <h3>ul. Kwiatkowskiego 17</h3>
            <h3>33-101 Tarnów</h3><br>
            <h3>tel. 14 688-99-00, 14 688-99-01</h3>
            <h3>fax. 14 688-99-02</h3>
            <h3>sekretzst@umt.tarnow.pl</h3>
            <h3>poczta@zst.tarnow.pl</h3>
    
        </div>

    </div>


    <div id="footer">
 
        <p>All right reserved @ ZST Tarnów</p>

    </div>

</div>




</body>
</html>