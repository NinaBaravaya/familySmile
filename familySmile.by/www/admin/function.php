<?php
function MyText($T)
{
	$temp=$T;
	$temp=trim($temp);
	$temp=stripcslashes($temp);
	$temp=htmlspecialchars($temp,ENT_QUOTES);
	
	return $temp;
}

function Autorize()
{
	if(isset($_SESSION['Login']))
	{
		//работаем
	}
	else 
	{
		header('Location:action.php');
        exit();
		
	}
}
?>