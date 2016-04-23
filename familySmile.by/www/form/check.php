<?php

session_start();

$code=$_SESSION['code'];

if($_POST['captcha_code']=="" || $_POST['captcha_code']==" ")
{
    die("Введите символы!");
}
else
{
    $p_code=$_POST['captcha_code'];
    if($p_code!=$code)
    {
        die("Неверно введены символы!");
    }
    else
    {
        echo $_POST['captcha_code'];
    }
}

