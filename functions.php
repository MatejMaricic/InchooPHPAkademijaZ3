<?php



function ciklicnaMatrica($rows, $cols)
{
    $numbers= [];
    $pos = 1;  //pozicija u matrici
    $row_s = 0; // pocetni redak
    $col_s = 0; // pocetni stupac

    while ($row_s < $rows && $col_s < $cols) {

        for ($i = $col_s; $i < $cols; $i++)
        {
            $numbers[$row_s][$i] = $pos++;
        }
        $row_s++;


        for ($i = $row_s; $i < $rows; $i++)
        {
            $numbers[$i][$cols - 1] = $pos++;
        }
        $cols--;


        if ($row_s < $rows) {
            for ($i = $cols - 1; $i >= $col_s; $i--)
            {
                $numbers[$rows - 1][$i] = $pos++;
            }
            $rows--;
        }


        if ($col_s < $cols) {
            for ($i = $rows - 1; $i >= $row_s; $i--)
            {
                $numbers[$i][$col_s] = $pos++;
            }
            $col_s++;
        }
    }
    return $numbers;
}