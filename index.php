<?php require 'functions.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Zadaca 3</title>
</head>
<body>


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
   Broj redaka   <input type="text" name="row"><br>
   Broj stupaca  <input type="text" name="col"><br>
    <input type="submit" value="Pošalji" >
</form>

<?php

$row = $_POST['row'];
$col= $_POST['col'];





ciklicnaMatrica($row, $col, $array);


?>
<table>
    <tbody>

     <?php for ($i = 0; $i < $row; $i++){ ?>

    <tr>

     <?php for ($j = 0; $j < $col; $j++){ ?>

         <td>
         <?php   echo($array[$i][$j]);  ?>
        </td>

        <?php } ?>

    </tr>

   <?php } ?>


</table>
    </tbody>

<?php

echo '<pre>';
print_r($array);
echo '<pre/>';

?>








</body>
</html>