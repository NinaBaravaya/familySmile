<?php
include('connect.php');



function MyString($str1)
{

    $str = $str1;
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str, ENT_QUOTES);
    $str = nl2br($str);
    return $str;
}


  session_start();
  $Login=isset($_POST['Login']) ? $_POST['Login']:'';
  $Password=isset($_POST['Password']) ? $_POST['Password']:'';
  $Login = MyString($Login);
  $Password =MyString($Password);

$sol ='test';
  $Password = $Password . $sol;
  $Password =md5(md5($Password));


  $SQL = "SELECT ID, Login, Password,Status FROM User WHERE Login='$Login' AND Password='$Password'";

  $date = mysql_query($SQL);
  $count = mysql_affected_rows();
  if($count == 1)
  {
    $inf = mysql_fetch_array($date);
  	$_SESSION['Login']=$Login;
    $_SESSION['Status']=$inf[3];
  	header('Location:panel.php');
  	exit();
  }

?>
<form action="" method="POST" enctype="text/html">
<table width="100%">
<tr>
<td>Логин</td>
<td width="10"></td>
<td><input name="Login" type="text"></td>
</tr>
<tr>
<td>Пароль</td>
<td width="10"></td>
<td><input name="Password" type="text"></td>
</tr>
<tr>
<td></td>
<td width="10"></td>
<td><input name="Sub" type="submit" value="Отправить"></td>
</tr>
</table>
</form>