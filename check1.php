<?php
require_once('blogic.php');
$obj = new Blogic();
session_start();

if(!empty($_SESSION['email']))
{   

    $str = "select * from login where email='$_SESSION[email]'";
    $res = $obj->GetResult($str);
    $row=mysql_fetch_row($res);
    if(mysql_num_rows($res)==1)
  {
    
$to      =  $row[2];
$subject = "Admin - Password reset";
$message = "From :- abc.com";
$message .=PHP_EOL;

  $time = date('h:i:s');
  $time=str_replace(":","",$time);
  $time = md5($time);
  $time=substr($time,0,7);
  $temptime = md5($time);
  $temptime = substr($temptime,0,20);
  $str = "update login set password='$temptime' where email='$_SESSION[email]'";
  $res = $obj->GetResult($str);
  $row=mysql_fetch_row($res);
  
$message = $message." email = ".$row[2]." Password = ".$time;
$headers = 'From: abc.com' . "\r\n".
    'X-Mailer: PHP/' . phpversion();
    
if(mail($to, $subject, $message, $headers))
{
    header("location:Forget.php?i=1"); 
}
else
{
   header("location:Forget.php?i=2"); 
}
 unset($_SESSION['email']); 
}
else
    {
        header("location:Forget.php?i=3");  
      
    }
    }
     else
    {
      header("location:Login.php");
    }
?>