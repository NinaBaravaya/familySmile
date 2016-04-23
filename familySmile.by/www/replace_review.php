<?php

include('connect.php');
include('function.php');
//include('header.php');

$page1=file_get_contents('header.tpl');
$page1=str_replace('{TITLE}', title("replace_review.php"), $page1);
$page1=str_replace('{MENU}',  get_menu("replace_review.php"), $page1);

$page=file_get_contents('replace_review.tpl');

echo $page1.$page;

include('footer.php');