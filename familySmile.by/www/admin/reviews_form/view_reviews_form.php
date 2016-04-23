<?php
session_start();
include('../function.php');
include('../connect.php');
Autorize();



$DB = mysql_connect('localhost', 'root', '') or die('no connect MYSQL');
mysql_select_db('dentalclinic',$DB) or die('no select Base');






?>




<html>
<head>
    <title>table</title>
    <meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
</head>

<body style="margin: 40px 0 0 40px; font-size: 12px;">
<h2><a href="../panel.php" style="color: #ff7260;">Панель администратора</a></h2>
<table border="1" bordercolor="#e2e2e2" width="180" height="600" cellpadding="0" cellspacing="0" style=" table-layout:fixed; float:left; margin:0 9px 0 0;">
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
        <td><form action="../menu/view_menu.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Меню"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
        <td><form action="../uslugi/view_uslugi.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Услуги (главная)"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
        <td><form action="../usluga_text/view_usluga_text.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Услуга_текст"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
        <td><form action="../reviews_slider/view_reviews_slider.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы слайдер"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../reviews_form/view_reviews_form.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы (форма)"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../reviews_on_site/view_reviews_on_site.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы на сайте"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../slider/view_slider.php" method="POST" enctype="text/plain"><input name="Slider" type="submit" value="Слайдер"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../onlinerecord/view_onlinerecord.php" method="POST" enctype="text/plain"><input name="Slider" type="submit" value="Запись-онлайн"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../callback/view_callback.php" method="POST" enctype="text/plain"><input name="callback" type="submit" value="Заказать звонок"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../price/view_price.php" method="POST" enctype="text/plain"><input name="Price" type="submit" value="Цены"></form>
    </tr>



    <tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
        <td><form action="../logout.php" method="POST" enctype="text/plain"><input name="Price" type="submit" value="Выйти из админ панели"></form>

    </tr>
</table>
<table border="1" bgcolor="#e2e2e2" bordercolor="#e2e2e2" width="1620" height="500" cellpadding="0" cellspacing="0">

    <tr valign="top">
        <td style="padding-left: 30px;">
            <h2><center><b> Отзывы (с формы на сайте) </b></center></h2>

            <?php
            $SQL = "SELECT `id`, `Name`, `Surname`, `Phone`, `Email`, `Date`, `Doctor_rating`, `Dropbox1`, `Dropbox2`, `Dropbox3`, `Dropbox4`, `Dropbox5`, `What_like`, `What_get_better`, `One_word`, `Path`
            FROM `reviews_form`";


            $data = mysql_query($SQL);
            $count = mysql_affected_rows();
            $inf .='<table border="1" bordercolor="#e2e2e2" width="1620" height="200px" cellpadding="0" cellspacing="0" style=" table-layout:fixed; float:left; margin:0 9px 0 0;">';
            $inf .='<tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
                    <td width="10px">id</td><td width="50px">Name</td><td width="50px">Surname</td><td width="50px">Phone</td><td width="70px">Email</td><td width="50px">Date</td><td width="80px">Doctor_rating</td>
                    <td width="70px">Dropbox1</td><td width="70px">Dropbox2</td><td width="70px">Dropbox3</td><td width="70px">Dropbox4</td><td width="70px">Dropbox5</td><td width="150px">What_like</td>
                    <td width="150px">What_get_better</td><td width="250px">One_word</td><td width="100px">Path</td></tr>';

            for($i=0;$i<$count;$i++)
            {
                $str=mysql_fetch_array($data);

                $inf .='<tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 14px;">';
                $inf .='<td>' .$str['id'].'</td>';
                $inf .='<td>' .$str['Name'].'</td>';
                $inf .='<td>' .$str['Surname'].'</td>';
                $inf .='<td>' .$str['Phone'].'</td>';
                $inf .='<td>' .$str['Email'].'</td>';
                $inf .='<td>' .$str['Date'].'</td>';
                $inf .='<td>' .$str['Doctor_rating'].'</td>';
                $inf .='<td>' .$str['Dropbox1'].'</td>';
                $inf .='<td>' .$str['Dropbox2'].'</td>';
                $inf .='<td>' .$str['Dropbox3'].'</td>';
                $inf .='<td>' .$str['Dropbox4'].'</td>';
                $inf .='<td>' .$str['Dropbox5'].'</td>';
                $inf .='<td>' .$str['What_like'].'</td>';
                $inf .='<td>' .$str['What_get_better'].'</td>';
                $inf .='<td>' .$str['One_word'].'</td>';
                $inf .='<td>' .$str['Path'].'</td>';


            }
            $inf .='</tr></table>';
            echo $inf;
            ?>

        </td>

    </tr>
    <tr valign="top">

    </tr>

</table>

</body>
</html>