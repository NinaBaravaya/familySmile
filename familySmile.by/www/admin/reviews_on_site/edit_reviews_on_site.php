<?php
session_start();
include('../function.php');
include('../connect.php');
Autorize();


$DB = mysql_connect('localhost', 'root', '') or die('no connect MYSQL');
mysql_select_db('dentalclinic',$DB) or die('no select Base');


if (isset($_POST['Save']))
{
    $id = isset($_POST['id'])? $_POST['id']:'';
    $Name = isset($_POST['Name'])? $_POST['Name']:'';
    $Surname = isset($_POST['Surname'])? $_POST['Surname']:'';
    $Date = isset($_POST['Date'])? $_POST['Date']:'';
    $What_like = isset($_POST['What_like'])? $_POST['What_like']:'';
    $Path = isset($_POST['Path'])? $_POST['Path']:'';



    function String($str){
        $temp = $str;
        $temp = trim($temp);
        $temp = stripslashes($temp);
        $temp = htmlspecialchars($temp);//проеобразование скобок в html сущности, чтобы не кавычки и реально как в html
        $temp = nl2br($temp);

        return $temp;
    }
    $id = String($id);
    $Name = String($Name);
    $Surname = String($Surname);
    $Date = String($Date);
    $What_like = String($What_like);
    $Path = String($Path);

    if (!empty($id)){

        $sql_insert = "UPDATE `reviews_form` SET `Name`='$Name',`Surname`='$Surname',`Date`='$Date',`What_like`='$What_like',`Path`='$Path' WHERE `id`='$id'";// $id не из базы, а то что содержиться в переменной post в поле, которое мы редактируем
        $date_insert = mysql_query($sql_insert);

        if ($date_insert == 'true')
        {
            header('Location:view_reviews_on_site.php');

        }
    }
}
?>



<html>
<head>
    <title>table</title>
    <meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
</head>

<body style="margin: 40px 0 0 40px;">
<h2><a href="../panel.php" style="color: #ff7260;">Панель администратора</a></h2>
<table border="1" bordercolor="#e2e2e2" width="180" height="600" cellpadding="0" cellspacing="0" style=" table-layout:fixed; float:left; margin:0 9px 0 0;">
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../menu/view_menu.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Меню"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
        <td><form action="../uslugi/view_uslugi.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Услуги (главная)"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff;">
        <td><form action="../usluga_text/view_usluga_text.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Услуга_текст"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../reviews_slider/view_reviews_slider.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы слайдер"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../reviews_form/view_reviews_form.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы (форма)"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../reviews_on_site/view_reviews_on_site.php" method="POST" enctype="text/plain"><input name="Reviews" type="submit" value="Отзывы на сайте"></form></td>
    </tr>
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../slider/view_slider.php" method="POST"><input name="Slider" type="submit" value="Слайдер"></form></td>
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
    <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
        <td><form action="../logout.php" method="POST" enctype="text/plain"><input name="Price" type="submit" value="Выйти из админ панели"></form>

    </tr>
</table>
<form action="" method="POST">


    <table border="1" bgcolor="#e2e2e2" bordercolor="#e2e2e2" width="1470" height="600" cellpadding="0" cellspacing="0">
        <tr valign="top">

            <td style="padding-left: 30px;">
                <h2><center><b> Отзывы на сайте </b></center></h2>
                <?php
                $itemId = $_POST['edit'];//это и есть постбэк? т.е. достаем значение кнопки у edit которую мы нажали на view_slider.php
                $SQL = "SELECT `id`, `Name`,`Surname`, `Date`, `What_like`,`Path` FROM `reviews_form` WHERE `id`=".$itemId;//то что содержиться в value у кнопки редактировать на странице view_slider.php
                $data = mysql_query($SQL);
                $count = mysql_affected_rows();
                $inf .='';
                for($i=0;$i<$count;$i++)
                {
                    $str=mysql_fetch_array($data);
                }
                echo $inf;
                ?>






                <form action="edit_slider.php" method="post" enctype="multipart/form-data">
                    <table border="1" bordercolor="#e2e2e2" width="1470" height="100" cellpadding="0" cellspacing="0" style=" table-layout:fixed; float:left; margin:0 9px 0 0;">
                        <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
                            <td width="50px">id</td><td width="150px">Name</td><td width="150px">Surname</td><td>Date</td><td>What_like</td><td>Path</td><td></td>
                        </tr>
                        <tr style="text-align: center; background-color: #9bd7d5; color: #fff; font-size: 20px;">
                            <td><input name="id" type="text" value="<?php echo $str['id']; ?>" size="1"></td>
                            <td><input name="Name" type="text" value="<?php echo $str['Name']; ?>" size="15"></td>
                            <td><input name="Surname" type="text" value="<?php echo $str['Surname']; ?>" size="15"></td>
                            <td><input name="Date" type="text" value="<?php echo $str['Date']; ?>" size="15"></td>
                            <td><input name="What_like" type="text" value="<?php echo $str['What_like']; ?>" size="15"></td>
                            <td><input name="Path" type="text" value="<?php echo $str['Path']; ?>" size="15"></td>
                            <td><input name="Save" type="submit" value="сохранить редактирование"></td>
                        </tr>
                    </table>
                </form>

            </td>
        </tr>
    </table>
</form>
</body>
</html>

