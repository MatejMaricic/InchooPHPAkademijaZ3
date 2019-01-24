<?php



function ciklicnaMatrica($rows, $cols)
{
    $numbers= []; //array sa pozicijama svih brojeva
    $pos = 1;  //pozicija u matrici
    $row_s = 0; // pocetni redak
    $col_s = 0; // pocetni stupac
    $td_class = [];
    $data = [];

    while ($row_s < $rows && $col_s < $cols) {

        for ($i = $col_s; $i < $cols; $i++)
        {
            $numbers[$row_s][$i] = $pos++;
            $td_class[$row_s][$i] = $i !== $cols -1 ? 'right' : 'bottom' ;

        }
        $row_s++;


        for ($i = $row_s; $i < $rows; $i++)
        {
            $numbers[$i][$cols - 1] = $pos++;
            $td_class[$i][$cols -1] = $i !== $rows -1 ? 'bottom' : 'left';

        }
        $cols--;


        if ($row_s < $rows) {
            for ($i = $cols - 1; $i >= $col_s; $i--)
            {
                $numbers[$rows - 1][$i] = $pos++;
                $td_class[$rows - 1][$i] = $i !== $col_s ? 'left' : 'top';

            }
            $rows--;
        }


        if ($col_s < $cols) {
            for ($i = $rows - 1; $i >= $row_s; $i--)
            {
                $numbers[$i][$col_s] = $pos++;
                $td_class[$i][$col_s] = $i !== $row_s ? 'top' : 'right';

            }
            $col_s++;
        }
    }
    return $data=[
            'numbers' => $numbers,
            'class' => $td_class
    ];

}