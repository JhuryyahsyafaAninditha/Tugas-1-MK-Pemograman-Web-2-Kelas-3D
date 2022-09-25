<?php

$ASEAN = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw",];
    



    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Array Associative</title>
</head>
<body>
    Daftar Negara ASEAN dan Ibukota : <br>
    <?php foreach ($ASEAN as $nrp => $ibukota) : ?>
        <li><?php echo "$nrp : $ibukota" ?></lii>
    <?php endforeach ?>
    </body>
    </html>