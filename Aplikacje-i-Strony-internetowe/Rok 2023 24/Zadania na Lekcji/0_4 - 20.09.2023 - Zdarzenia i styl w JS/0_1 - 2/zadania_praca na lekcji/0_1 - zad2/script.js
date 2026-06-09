function rozwin()
{
    if( trueTab )
    {
        document.getElementById( "klik" ).innerHTML = tab[ 0 ];
        trueTab = false;
    }
    else
    {
        document.getElementById( "klik" ).innerHTML = tab[ 1 ] + 
        "<br><br> <span styles=\"color: black;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dolores libero eos numquam molestiae a optio? Veniam, eos facilis nostrum accusamus nemo quae porro deleniti omnis eaque nihil voluptas minus laborum. Quae iste voluptates, minus harum repellendus labore explicabo fugit dolorem. Distinctio quo, aliquam nisi neque blanditiis possimus culpa quam assumenda temporibus reprehenderit incidunt, inventore sint ad molestias, " +
        "repellendus magnam quisquam eaque suscipit porro ipsa quibusdam dolor minima fuga harum. Similique rem dolorum qui atque ducimus fuga velit vero quaerat ipsum hic aliquid inventore labore et magnam officia illo, eos est impedit. Fugiat magni, doloremque vero aspernatur deleniti ipsum tenetur temporibus quaerat. Sed, earum soluta! Ab eligendi sequi laudantium voluptas velit, optio est ea earum architecto amet corporis tempora vero quia eos quisquam beatae sint error necessitatibus " +
        "similique veritatis. Id, asperiores. Quibusdam rerum dolor tempora animi, et reprehenderit eligendi voluptatem, itaque cum voluptas, ipsa expedita repudiandae neque dignissimos! Officiis, maxime! " +
        "</span>";
        trueTab = true;
    }

}

let tab = [ "Czytaj więcej...", "Ukryj treść..." ]
let trueTab = false;