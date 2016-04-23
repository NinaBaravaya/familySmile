<?php

include('connect.php');
include('function.php');
//include('header.php');

$page1=file_get_contents('header.tpl');
$page1=str_replace('{TITLE}', title("reviews.php"), $page1);
$page1=str_replace('{MENU}',  get_menu("reviews.php"), $page1);

$page=file_get_contents('reviews.tpl');
$page=str_replace('{REVIEWS_PATIENT}', reviews_patient(), $page);
echo $page1.$page;

include('footer.php');