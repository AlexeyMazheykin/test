<?php
function aaa () {
    global $al;
    global $bl;
    return $al + $bl;
}

$al  = 1;
$bl = 2;
$r = aaa();
die();