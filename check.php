<?php
require_once('blogic.php');
$obj = new Blogic();
session_start();
if(!empty($_SESSION['user'])&&!empty($_SESSION['pass']))
{   
    $str = "select * from login where Id='$_SESSION[user]' and password='$_SESSION[pass]'";
    $res = $obj->GetResult($str);
    $row=mysql_fetch_row($res);
    if(mysql_num_rows($res)==1)
    {
        echo "hello";
        $_SESSION['user']=$row[0];
        unset($_SESSION['pass']);  
       header("location:Home.php"); 
    }
    else
    {
      header("location:Login.php?i=1");  
    }
    }
    else
    {
       header("location:Login.php");
    }
?>