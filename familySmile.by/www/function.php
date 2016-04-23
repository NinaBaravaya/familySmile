<?

function get_menu($link)
{
    $SQL = "SELECT  `id`, `title`,`link`, `parent_id` FROM `menu` WHERE `parent_id` IS NULL ";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $str='';


    for($i=0;$i<$count;$i++)
    {
        $inf=mysql_fetch_array($data);
        $str .='<li';

        if($inf['link'] == $link){
            $str .=' class="active"';
            $str .='>'.$inf['title'];
        }
        else $str .='><a href="'.$inf['link'].'">'.$inf['title'].'</a>';

        $SQLSubmenu = "SELECT  `id`, `title`,`link`, `parent_id` FROM `menu` WHERE `parent_id` =".$inf['id'];
        $datasub = mysql_query($SQLSubmenu);
        $countsub = mysql_affected_rows();

        $str .='<ul class="submenu">';
        for($y=0 ; $y < $countsub; $y++){
            $infsub = mysql_fetch_array($datasub);

            $str .='<li';
            if($infsub['link'] == $link){
                $str .=' class="sub_active"';
                $str .='>'.$infsub['title'];
            }
            else $str .='><a href="'.$infsub['link'].'">'.$infsub['title'].'</a></li>';
        }
        $str .='</ul>';
        $str.='</li>';
    }
    return $str;
}


function usluga_n($link){
    $SQL = "SELECT  `Text`, `link` FROM `usluga_text`";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $inf='';

    for($i=0;$i<$count;$i++)
    {
        $str=mysql_fetch_array($data);

        if($str['link'] == $link){
            $inf .=$str['Text'];
        }

    }
    return $inf;

}






function reviews_slider(){
    $SQL = "SELECT  `One_word` FROM `reviews_slider` LIMIT 0 , 4";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $inf='';

    for($i=0;$i<$count;$i++)
    {
        $str=mysql_fetch_array($data);
        $inf .='<li>'.$str['One_word'].'</li>';
    }
    return $inf;
}


function reviews_patient(){

    $num = 4;
    $page = $_GET['page'];//потому что <a href= page.php?page=1><<</a>
    $result = mysql_query("SELECT COUNT(*) FROM reviews_form");
    $posts = mysql_result($result, 0);
    $total = intval(($posts - 1) / $num) + 1;
    $page = intval($page);
    if (empty($page) or $page < 0) $page = 1;
    if ($page > $total) $page = $total;
    $start = $page * $num - $num;

    $SQL = "SELECT  `Name`,`Surname`,`Date`,`One_word`,`Path` FROM `reviews_form` LIMIT $start, $num";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $inf='';



    if ($page != 1) {$pervpage = '<li><a href= reviews.php?page=' .($page - 1). '><img src="images/prev.png" alt="Qoute"></a></li>';}
    // Проверяем нужны ли стрелки вперед
    if ($page != $total) { $nextpage = '<li><a href= reviews.php?page=' .  ($page + 1) . '><img src="images/next.png" alt="Qoute"></a></li>';}

    // Находим две ближайшие станицы с обоих краев, если они есть

    if ($page - 1 > 0) {$page1left = '<li><a href= reviews.php?page=' . ($page - 1) . '>' . ($page - 1) . '</a></li>';}
    if ($page + 1 <= $total) {$page1right = ' <li> <a href= reviews.php?page=' . ($page + 1) . '>' . ($page + 1) . '</a></li>';}
    $all='<ul class="pagination">'.$pervpage . $page1left . '<li class="active">' . $page . '</li>' . $page1right .$nextpage.'</ul>';
    // Вывод меню
    //echo $all;

    for($i=0;$i<$count;$i++)
    {
        $str=mysql_fetch_array($data);
        $inf .='<div class="otzyvs"><div class="otzyv_1"><span>'.$str['Name'].' '.$str['Surname'].'</span>';
        $inf .='<img src="'.$str['Path'].'" alt="Qoute" class="qoute-right">';
        $inf .='<span class="data">'.$str['Date'].'</span>';
        $inf .='<p>'.$str['One_word'].'<a href="#">развернуть</a></p>';
        $inf .= '</div></div>';
    }
    return $all.$inf;
}



function slider(){
    $SQL = "SELECT  `Path`, `Alt`, `Title` FROM `slider` LIMIT 0 , 5";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $inf='';

    for($i=0;$i<$count;$i++)
    {
        $str=mysql_fetch_array($data);
        $inf .='<li><img src="'.$str['Path'].'" alt="'.$str['Alt'].'" title="'.$str['Title'].'"></li>';
    }
    return $inf;
}


function price()
{
    $SQL = "SELECT  `Name`, `price` FROM `price`";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $str='';

    for($i=0;$i<$count;$i++)
    {
        $inf=mysql_fetch_array($data);
        if($inf['price'] == '') {

            $str .='<tr><th colspan="2">' .$inf['Name'].'</th></tr>';


        }

        else $str .= '<tr><td  class="one">' .$inf['Name'].'</td><td>'.$inf['price'].'</td></tr>';

    }
    return $str;
}

function uslugi(){

    $SQL = "SELECT  `Name`, `Path`, `Alt`, `Title` FROM `uslugi` LIMIT 0, 3";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $inf='';

    for($i=0;$i<$count;$i++)
    {
        $str=mysql_fetch_array($data);
        $inf .='<li class="span4 band"><a href="uslugi.php" title="Dental Hygienist"> <img src="' .$str['Path'].'" width="280" height="210" alt="' .$str['Alt'].'" title="' .$str['Title'].'">
                                <span class="zag_2" >' .$str['Name'].'</span>
                                <div class="next"><img src="img_glavnaya/next.png" width="79" height="28" alt="next"></div></a>
                        </li>';
    }
    return $inf;

}
/*
function title(){
    if ($_SERVER['SCRIPT_NAME'] == 'index_1.php'){//$_SERVER['SCRIPT_NAME'] вместо $str['link']

    }
    return 'Главная';

}*/

function title($link){
    $SQL = "SELECT  `link`, `title` FROM `menu`";
    $data = mysql_query($SQL);
    $count = mysql_affected_rows();
    $inf='';

    for($i=0;$i<$count;$i++)
    {
        $str=mysql_fetch_array($data);
        if ($str['link'] == $link){
            $inf .=$str['title'];
        }

    }
    return $inf;

}

?>




