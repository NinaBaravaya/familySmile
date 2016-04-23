<?php

include('connect.php');
include('function.php');
//include('header.php');

$page1=file_get_contents('header.tpl');
$page1=str_replace('{TITLE}', title("paid.php"), $page1);
$page1=str_replace('{MENU}',  get_menu("paid.php"), $page1);

$page=file_get_contents('paid.tpl');


echo $page1.$page;

include('footer.php');