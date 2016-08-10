<?php
session_start();
if(isset($_SESSION['user']))
{
require_once('blogic.php');
        $obj = new Blogic();
        $str = "select * from aluminous where Id='$_SESSION[user]'";
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