<?php



function ciklicnaMatrica($row, $col, &$array)
{

    $pos = 1;  //pozicija u matrici
    $row_s = 0; // pocetni redak
    $col_s = 0; // pocetni stupac

    while ($row_s < $row && $col_s < $col) {

        for ($i = $col_s; $i < $col; $i++)
        {
            $array[$row_s][$i] = $pos++;
        }
        $row_s++;


        for ($i = $row_s; $i < $row; $i++)
        {
            $array[$i][$col - 1] = $pos++;
        }
        $col--;


        if ($row_s < $row) {
            for ($i = $col - 1; $i >= $col_s; $i--)
            {
                $array[$row - 1][$i] = $pos++;
            }
            $row--;
        }


        if ($col_s < $col) {
            for ($i = $row - 1; $i >= $row_s; $i--)
            {
                $array[$i][$col_s] = $pos++;
            }
            $col_s++;
        }
    }
}