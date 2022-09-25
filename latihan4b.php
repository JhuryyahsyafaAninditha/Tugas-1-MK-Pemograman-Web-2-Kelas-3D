<?php
$ASEANAWAL = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for Array</title>
</head>
<body>
    <p>
        Daftar Negara ASEAN awal : <br>
    <?php 
     for ($i = 0; $i < 5; $i++) { 
    echo "<li>$ASEANAWAL[$i]</li>";
} 
?><br>
Daftar Negara ASEAN baru : <br>
<br>
<?php
for ($i = 0; $i < 8; $i++) { 
    echo "<li>$ASEANAWAL[$i]</li>";
} 
 ?>
