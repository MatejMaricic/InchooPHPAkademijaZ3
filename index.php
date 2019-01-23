<?php require 'functions.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Zadaca 3</title>
</head>
<body>

<?php
$rows = filter_input(INPUT_POST, 'rows', FILTER_SANITIZE_NUMBER_INT);
$cols = filter_input(INPUT_POST, 'cols', FILTER_SANITIZE_NUMBER_INT);
?>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">PHP Akademija - Zadatak 3</a>
</nav>
<div class="container space">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm">

                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group" >
                            <label for="brojRedaka">Broj Redaka</label> <br>
                            <input type="number" class="input-css" id="brojRedaka" name="rows" value="<?php echo $rows; ?>">
                        </div>
                        <div class="form-group">
                            <label for="brojStupaca">Broj stupaca</label><br>
                            <input type="number" class="input-css" id="brojStupaca" name="cols" value="<?php echo $cols; ?>">
                        </div>
                        <input type="submit" class="btn btn-success" value="KREIRAJ TABLICU" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-sm">
                    <?php
                    if( !$rows || !$cols) {
                        echo "Morate upisati cijeli broj";
                    }
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
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>