<?php

    function naglowek()
    {
        echo '
        <!DOCTYPE html>
        <html lang="pl-PL">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="funkcje_style.css">

            <title>Ćwiczenie Kolory</title>

        </head>
        <body>';
    }
    
    function body()
    {
        echo '
        <div id="container">

            <div id="pasek1">

                <div class="box box1">

                    <div class="box1_1">#24914A</div>

                </div>

                <div class="box box1">

                    <div class="box1_2">#168CEE</div>

                </div>

                <div class="box box1">

                    <div class="box1_3">#526E62</div>

                </div>

            </div>

            <div id="pasek2">

                <div class="box box2">

                    <div class="box2_1">#D7A495</div>

                </div>

                <div class="box box2">

                    <div class="box2_2">#C7AC5E</div>

                </div>

                <div class="box box2">

                    <div class="box2_3">#5C2F36</div>

                </div>

            </div>

            <div id="pasek3">

                <div class="box box3">

                    <div class="box3_1">#AE95DF</div>

                </div>

                <div class="box box3">

                    <div class="box3_2">#AE95DF</div>

                </div>

                <div class="box box3">

                    <div class="box3_3">#13BD92</div>

                </div>

            </div>
        
            <div id="footer">

                <div id="left_f">

                    <img src="4TI.png" alt="">

                </div>

                <div id="right_f">

                    <h2>Stronę wykonał: Ksawery Zelek</h2>

                </div>

            </div>

        </div>';
    }

    function stopka()
    {
        echo '
        </body>
        </html>';
    }

?>