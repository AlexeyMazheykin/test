<?php
//setcookie("wefwe", 'ssdvsdvsd', time() + 200000, '/');
include '../pretty.php';
echo 'its testing';
$aaa = array(1,2,3);
pretty_print($_COOKIE);

unset($_COOKIE['wefwe']);
pretty_print($_COOKIE);
