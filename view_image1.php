<?php

if(isset($_REQUEST['id']))
{
require_once('blogic.php');
        $obj = new Blogic();
        $str = "select * from aluminous where Id='$_REQUEST[id]'";
        $rs =$obj->GetResult($str);
        if(mysql_num_rows($rs)==1)
        {
            $row = mysql_fetch_array($rs);
            $mime=$row['Type'];
            header("Content-type:$mime");
            echo $row['Image'];
        }
        }
        else
        {
           header("location: Login.php");
        }
?>