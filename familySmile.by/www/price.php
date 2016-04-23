<?php

include('connect.php');
include('function.php');
//include('header.php');

$page1=file_get_contents('header.tpl');
$page1=str_replace('{TITLE}', title("price.php"), $page1);
$page1=str_replace('{MENU}',  get_menu("price.php"), $page1);

$page=file_get_contents('price.tpl');
$page=str_replace('{PRICE}', price(), $page);
echo $page1.$page;

include('footer.php');
