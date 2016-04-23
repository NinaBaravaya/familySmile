<?php
session_start();
include('function.php');
Autorize();


?>



<html>
<head>
    <title>table</title>
    <meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
</head>

<body style="margin: 40px 0 0 40px;">
<h2>Панель администратора</h2>

<table border="1" bordercolor="#e2e2e2" width="180" height="600" cellpadding="0" cellspacing="0" style=" table-layout:fixed; float:left; margin:0 5px 0 0;">
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="menu/view_menu.php" method="POST" enctype="text/plain"><input name="Menu" type="submit" value="Меню"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="uslugi/view_uslugi.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Услуги (главная)"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="usluga_text/view_usluga_text.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Услуга_текст"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="reviews_slider/view_reviews_slider.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы слайдер"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="reviews_form/view_reviews_form.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы (форма)"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="reviews_on_site/view_reviews_on_site.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы на сайте"></form></td>
    </tr>

    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="slider/view_slider.php" method="POST" enctype="text/plain"><input name="Slider" type="submit" value="Слайдер"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="onlinerecord/view_onlinerecord.php" method="POST" enctype="text/plain"><input name="onlinerecord" type="submit" value="Запись-онлайн"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="callback/view_callback.php" method="POST" enctype="text/plain"><input name="callback" type="submit" value="Заказать звонок"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="price/view_price.php" method="POST" enctype="text/plain"><input name="Price" type="submit" value="Цены"></form>
    </tr>

    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="logout.php" method="POST" enctype="text/plain"><input name="Price" type="submit" value="Выйти из админ панели"></form>
    </tr>
</table>
<table border="1"  bgcolor="#e2e2e2" bordercolor="#e2e2e2" width="700" height="600" cellpadding="0" cellspacing="0">
    <tr valign="top">
        <td style="padding-left: 30px;">
            <h2><center><b> Выберите модуль для редактирования (слева) </b></center></h2>

        </td>
    </tr>
</table>

</body>
</html>