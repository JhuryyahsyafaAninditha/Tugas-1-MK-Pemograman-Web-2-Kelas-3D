<?php

$ASEAN = array ("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar", "D.K.I Jakarta",
"Singapura", "Kuala Lumpur", "Bandar Seri Begawan", "Bangkok", "Vientiane", "Manila", "Naypyidaw", "+62", "+65", "+60", "+673",
"+66", "+856", "+63", "+95" )
 
    ?>
<html>
    <head>
        <title>HTML tabel</title>
    </head>
    <body>
        <table border="1">
        <tr>
            <th>NEGARA</th>
            <th>IBUKOTA</th>
            <th>KODE TELEPON</th>
        </tr>
        <tr>
            <td border="1"> <?php 
     for ($i = 0; $i < 8; $i++) { 
    echo "$ASEAN[$i]<br>";
} 
?>
</td>
            <td border="1"><?php 
     for ($i = 7; $i < 15; $i++) { 
    echo "$ASEAN[$i]<br>";
} 
?>
</td>
            <td border="1"><?php 
     for ($i = 16; $i < 24; $i++) { 
    echo "$ASEAN[$i]<br>";
} 
?></td>
        </tr>
    </table>
    </body>
</html>

