<?php

include('connect.php');
include('function.php');
//include('header.php');

$page1=file_get_contents('header.tpl');
$page1=str_replace('{TITLE}', title("our_team.php"), $page1);
$page1=str_replace('{MENU}',  get_menu("our_team.php"), $page1);
$page=file_get_contents('our_team.tpl');


echo $page1.$page;
include('footer.php');