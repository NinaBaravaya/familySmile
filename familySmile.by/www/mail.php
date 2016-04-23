<?php

session_start();

include('connect.php');


if (isset($_POST['formData']))
{
    $formData = isset($_POST['formData'])? $_POST['formData']:'';
    $name = isset($_POST['name'])? $_POST['name']:'';
    $phone = isset($_POST['phone'])? $_POST['phone']:'';
    //echo $formData;

    function String($str){
        $temp = $str;
        $temp = trim($temp);
        $temp = stripslashes($temp);
        $temp = htmlspecialchars($temp);//проеобразование скобок в html сущности, чтобы не кавычки и реально как в html
        $temp = nl2br($temp);

        return $temp;
    }
    $name = String($name);
    $phone = String($phone);


    if (!empty($name) && !empty($phone)){

        $sql_insert = "INSERT INTO `callback` (id, Name, Phone) VALUES ('','".$name."','".$phone."')";
        $date_insert = mysql_query($sql_insert);

        if ($date_insert == 'true')
        {
            echo '<center><p class="success">Спасибо за отправку вашего сообщения!</p></center>';
        }
        else
        {
            echo '<center><p class="fail"><b>Ошибка. Отзыв не отправлен!</b></p></center>';
        }
    }
}


    if (isset($_POST['formData1'])) {

        $formData1 = isset($_POST['formData1'])? $_POST['formData1']:'';
        $Name = isset($_POST['Name'])? $_POST['Name']:'';
        $Surname = isset($_POST['Surname'])? $_POST['Surname']:'';
        $Phone = isset($_POST['Phone'])? $_POST['Phone']:'';
        $Email = isset($_POST['Email'])? $_POST['Email']:'';
        $Date = isset($_POST['Date'])? $_POST['Date']:'';
        $Doctor_rating = isset($_POST['Doctor_rating'])? $_POST['Doctor_rating']:'';
        $Dropbox1 = isset($_POST['Dropbox1'])? $_POST['Dropbox1']:'';
        $Dropbox2 = isset($_POST['Dropbox2'])? $_POST['Dropbox2']:'';
        $Dropbox3 = isset($_POST['Dropbox3'])? $_POST['Dropbox3']:'';
        $Dropbox4 = isset($_POST['Dropbox4'])? $_POST['Dropbox4']:'';
        $Dropbox5 = isset($_POST['Dropbox5'])? $_POST['Dropbox5']:'';
        $What_like = isset($_POST['What_like'])? $_POST['What_like']:'';
        $What_get_better = isset($_POST['What_get_better'])? $_POST['What_get_better']:'';
        $One_word = isset($_POST['One_word'])? $_POST['One_word']:'';
           //echo $Date;

        function String($str){
            $temp = $str;
            $temp = trim($temp);
            $temp = stripslashes($temp);
            $temp = htmlspecialchars($temp);//проеобразование скобок в html сущности, чтобы не кавычки и реально как в html
            $temp = nl2br($temp);

            return $temp;
        }
        $Name = String($Name);
        $Surname = String($Surname);
        $Phone = String($Phone);
        $Email = String($Email);
        $Date = String($Date);
        $Doctor_rating = String($Doctor_rating);
        $Dropbox1 = String($Dropbox1);
        $Dropbox2 = String($Dropbox2);
        $Dropbox3 = String($Dropbox3);
        $Dropbox4 = String($Dropbox4);
        $Dropbox5 = String($Dropbox5);
        $What_like = String($What_like);
        $What_get_better = String($What_get_better);
        $One_word = String($One_word);



    $code=$_SESSION['code'];
    if($_POST['captcha_code']=="" || $_POST['captcha_code']==" ")
    {
        die("Введите символы!");
    }
    else
    {
        $p_code=$_POST['captcha_code'];
        if($p_code==$code)
        {
            if (!empty($Name) && !empty($Surname) && !empty($Phone) && !empty($One_word)){

                $sql_insert = "INSERT INTO `reviews_form` (id, Name, Surname, Phone, Email, Date, Doctor_rating, Dropbox1, Dropbox2, Dropbox3, Dropbox4, Dropbox5, What_like, What_get_better, One_word)
                           VALUES ('','".$Name."','".$Surname."','".$Phone."','".$Email."','".$Date."','".$Doctor_rating."','".$Dropbox1."','".$Dropbox2."','".$Dropbox3."','".$Dropbox4."','".$Dropbox5."','".$What_like."','".$What_get_better."','".$One_word."')";
                $date_insert = mysql_query($sql_insert);

                /*$sql_insert1 = "INSERT INTO `reviews_slider` (id, Name, Surname, Phone, One_word)
                               VALUES ('','".$Name."','".$Surname."','".$Phone."','".$One_word."')";
                $date_insert1 = mysql_query($sql_insert1);*/
                if ($date_insert == 'true' /*&& $date_insert1 == 'true'*/)
                {
                    echo '<center><p class="success">Благодарим вас за отзыв!Отзыв будет опубликован на сайте после модерации.</p></center>';
                }
                else
                {
                    echo '<center><p class="fail"><b>Ошибка. Отзыв не отправлен!</b></p></center>';
                }

            } else
            {
                echo '<center><p class="fail"><b>Введите имя, фамилию, телефон и мнение о клинике одной фразой и капчу.</b></p></center>';
            }
        }
        else
        {
            die("Неверно введены символы!");
        }
    }

}




    if (isset($_POST['formData2'])) {

        $formData2 = isset($_POST['formData2'])? $_POST['formData2']:'';
        $Name = isset($_POST['Name'])? $_POST['Name']:'';
        $Surname = isset($_POST['Surname'])? $_POST['Surname']:'';
        $Phone = isset($_POST['Phone'])? $_POST['Phone']:'';
        $Email = isset($_POST['Email'])? $_POST['Email']:'';
        $Date = isset($_POST['Date'])? $_POST['Date']:'';
        $Message = isset($_POST['Message'])? $_POST['Message']:'';
        //echo $formData2;


        function String($str){
            $temp = $str;
            $temp = trim($temp);
            $temp = stripslashes($temp);
            $temp = htmlspecialchars($temp);//проеобразование скобок в html сущности, чтобы не кавычки и реально как в html
            $temp = nl2br($temp);

            return $temp;
        }
        $Name = String($Name);
        $Surname = String($Surname);
        $Phone = String($Phone);
        $Email = String($Email);
        $Date = String($Date);
        $Message = String($Message);




        $code=$_SESSION['code'];

        if($_POST['captcha_code']=="" || $_POST['captcha_code']==" ")
        {
            die("Введите символы!");
        }
        else
        {
            $p_code=$_POST['captcha_code'];
            if($p_code==$code)
            {
                if (!empty($Name) && !empty($Surname) && !empty($Phone)){

                    $sql_insert = "INSERT INTO `onlinerecord` (`id`, `Name`, `Surname`, `Phone`, `Email`, `Date`, `Message`) VALUES ('','".$Name."','".$Surname."','".$Phone."','".$Email."','".$Date."','".$Message."')";

                    $date_insert = mysql_query($sql_insert);

                    if ($date_insert == 'true')
                    {
                        echo '<center><p class="success">Благодарим за запись на консультацию!</p></br>
<p class="success">Благодарим Вас за письмо, которое мы получили. Мы ответим в ближайшее время, однако, если ваше сообщение срочно пожалуйста, позвоните нам.</p></center>';
                    }
                    else
                    {
                        echo '<center><p class="fail"><b>Ошибка. Отзыв не отправлен!</b></p></center>';
                    }
                } else
                {
                    echo '<center><p class="fail"><b>Введите имя, фамилию и телефон.</b></p></center>';
                }
            }
            else
            {
                die("Неверно введены символы!");
            }
        }
        // получение переданного имени

    }












