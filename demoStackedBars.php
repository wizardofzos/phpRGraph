<? include "theme/default/head.php"; ?>
<? include "pFunctions/functions.php"; ?>


<!-- this is what we need to produce -->

<?php

    //      Canvas ID 
    $pID    = 'myCanvas';
    //      Input Data
    $input  = array("Q1-2001" => 4100,
                    "Q2-2001" => 7121,
                    "Q3-2001" => 3121,
                    "Q4-2001" => 2121,
                    "Q1-2002" => 1121,
                    "Q2-2002" => 6121,
                    "Q3-2002" => 3121,
                    "Q4-2002" => 6121,
                    "Q1-2003" => 3121,
                    "Q2-2003" => 7121,
                    "Q3-2003" => 8121,
                    "Q4-2003" => 3212);
    //      Do the magic thing :)
    drawBasicLine('idTag', $input);
?>
