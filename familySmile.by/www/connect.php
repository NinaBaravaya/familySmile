<?php
$DB = mysql_connect('localhost', 'root', '') or die('no connect MYSQL');
mysql_select_db('dentalclinic', $DB) or die('no select BASE');

mysql_query("SET NAMES 'utf-8'");
mysql_query("SET CHARACTER SET 'utf-8'");
mysql_query("SET SESSION collation_connection = 'utf-8_general_ci'");
mysql_query('SET NAMES utf-8 COLLATE utf-8_general_ci');