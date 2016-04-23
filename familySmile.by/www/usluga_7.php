<?php

include('connect.php');
include('function.php');
//include('header.php');

$page1=file_get_contents('header.tpl');
$page1=str_replace('{TITLE}', title("usluga_7.php"), $page1);
$page1=str_replace('{MENU}',  get_menu("usluga_7.php"), $page1);

$page=file_get_contents('usluga_7.tpl');
$page=str_replace('{USLUGA}', usluga_n("usluga_7.php"), $page);
echo $page1.$page;

include('footer.php');
