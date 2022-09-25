<?php

$balon = ["Hijau", "kuning", "kelabu", "merah muda", "biru"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-5">
    <title>Looping for Array</title>
</head>
<body>
    <p>
    Balonku ada lima<br>

    rupa-rupa warnanya<br>

    <?php                                  
            for ($i = 0; $i < 4; $i++) { 
            echo " $balon[$i]";
} 
    ?> dan <?php echo $balon[4]; ?> <br>

    Meletus balon <?php echo $balon[0]; ?> DOR!!<br>

    hatiku sangat kacau<br>

    </p>
    
</body>
</html>