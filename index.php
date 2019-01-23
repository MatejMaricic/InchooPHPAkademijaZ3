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
   Broj redaka <br>
    <input class="input-css" type="text" name="rows" value="<?php echo $_POST['rows'] ?>"><br>
   Broj stupaca <br>
    <input class="input-css" type="text" name="cols" value="<?php echo $_POST['cols'] ?>"><br>
    <input type="submit"  value="KREIRAJ TABLICU" class="button-css" >
</form>

<?php

$rows = filter_input(INPUT_POST, 'rows', FILTER_SANITIZE_NUMBER_INT);
$cols = filter_input(INPUT_POST, 'cols', FILTER_SANITIZE_NUMBER_INT);
if( !$rows || !$cols) { echo "Morate upisati cijeli broj"; }



$numbers = ciklicnaMatrica($rows, $cols);



?>
<table>
    <tbody>

     <?php for ($i = 0; $i < $rows; $i++){ ?>

    <tr>

     <?php for ($j = 0; $j < $cols; $j++){ ?>

         <td>
         <?php   echo($numbers[$i][$j]);  ?>
        </td>

        <?php } ?>

    </tr>

   <?php } ?>

    </tbody>
</table>


</body>
</html>