function wyswietl( number )
{
    switch( number )
    {
        case 1:
        {
            if( prawda_1 == true )
            {
                prawda_1 = false;
                wyswietl( 0 );
                break;
            }

            document.getElementById( "opis" ).innerHTML = tabName[ 1 ];
            document.getElementById( "opis_tekst" ).innerHTML = tabDesc[ 1 ];
            
            prawda_1 = true;
            break;
        }
        case 2:
        {
            if( prawda_2 == true )
            {
                prawda_2 = false;
                wyswietl( 0 );
                break;
            }

            document.getElementById( "opis" ).innerHTML = tabName[ 2 ];
            document.getElementById( "opis_tekst" ).innerHTML = tabDesc[ 2 ];
            
            prawda_2 = true;
            break;
        }
        case 3:
        {
            if( prawda_3 == true )
            {
                prawda_3 = false;
                wyswietl( 0 );
                break;
            }

            document.getElementById( "opis" ).innerHTML = tabName[ 3 ];
            document.getElementById( "opis_tekst" ).innerHTML = tabDesc[ 3 ];
            
            prawda_3 = true;
            break;
        }
        case 4:
        {
            if( prawda_4 == true )
            {
                prawda_4 = false;
                wyswietl( 0 );
                break;
            }

            document.getElementById( "opis" ).innerHTML = tabName[ 4 ];
            document.getElementById( "opis_tekst" ).innerHTML = tabDesc[ 4 ];
            
            prawda_4 = true;
            break;
        }
        default:
        {
            document.getElementById( "opis" ).innerHTML = tabName[ 0 ];
            document.getElementById( "opis_tekst" ).innerHTML = tabDesc[ 0 ];
            
            prawda_1 = false;
            prawda_2 = false;
            prawda_3 = false;
            prawda_4 = false;
            
            break;
        }
    }
}

let tabName =   [ "Kliknij obrazek, by dowiedzieć się więcej.",
                "Tatry", "Bałtyk", "Stolica", "Bieszczady" ];

let tabDesc =   [ "",
                  "Tatry - najwyższe pasmo w łańcuchu Karpat, również najwyższe między Alpami a Uralem i Kaukazem. Są częścią Łańcucha Tatrzańskiego, w Centralnych Karpatach Zachodnich.",
                  "Morze Bałtyckie, Bałtyk – morze śródlądowe na szelfie kontynentalnym w północnej Europie. Połączone z Morzem Północnym przez Cieśniny Duńskie (Sund, Mały Bełt, Wielki Bełt, Kattegat, Skagerrak oraz Limfjorden).",
                  "Warszawa – stolica Polski i województwa mazowieckiego, największe miasto w kraju, położone w jego centralnej części, na Nizinie Środkowomazowieckiej, na Mazowszu, nad Wisłą.",
                  "Bieszczady - grupa dwóch pasm górskich w łańcuchu Karpat. Pasma Bieszczadów znajdują się między Przełęczą Łupkowską (640 m n.p.m.) a Przełęczą Wyszkowską (933 m n.p.m.)." ]; 


let prawda_1 = false;
let prawda_2 = false;
let prawda_3 = false;
let prawda_4 = false;