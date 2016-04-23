<?php
include('connect.php');
include('function.php');
//include('header.php');
$page1=file_get_contents('header.tpl');
$page1=str_replace('{TITLE}', title("action.php"), $page1);
$page1=str_replace('{MENU}',  get_menu("action.php"), $page1);
$page=file_get_contents('index.tpl');
$page=str_replace('{REVIEWS_SLIDER}', reviews_slider(), $page);
$page=str_replace('{SLIDER}', slider(), $page);
$page=str_replace('{USLUGI}', uslugi(), $page);
echo $page1.$page;
include('footer.php');
