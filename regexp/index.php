<?php
include './pretty.php';
/*setcookie("wefwe", null, -1, '/');
var_dump($_COOKIE);
echo 'gfdshgf';

$_SESSION["ARR"] = [1,2,3];
//retty_print($_SESSION, false);*/
/**
Регулярочки*/
$str1 = 'Mash\\n a is        very uful';
$res1 = preg_split('~\s+~', $str1);
$str2 = 'Maazzsh na is         veevry___ be]auti
--ful123';

$rrr = 2;
$resPreg = preg_match_all('|[a-d321]|', $str2, $matches);
//$resPreg = preg_match_all('@[\s]@', $str2, $matches);
//$resPreg = preg_match_all('@a.@', $str2, $matches);
$resPreg = preg_match_all('/.+?[^\s]+/', $str2, $matches);
$resPreg = preg_match_all('/[\w-]+/', $str2, $matches);

$str1 = <<<HEREDOC
<div>
    <a href="testlink-1" class="class-1"></a>
    <a href="testlink-2" class='class-2'></a>
    <a class="class-3" href='testlink-3' ></a>
    <a href="testlink-4" class="class-4"></a>
    <a href="testlink-5" class="class-5"></a>
</div>
HEREDOC;


$res1 = preg_match_all('/<a\s+[^>]*?href\s*=\s*(["\'])([^>]+?)\1/', $str1, $matches);


$str1 = '/controller/url/other/page/white/blue/'; //выбрать все кроме page;

$res = preg_match_all('/(?!page)[^\/]+/', $str1, $matches);

exit();
