<?php
session_start();
$row;
require_once('blogic.php');

    $obj = new Blogic();
    $str = "select * from aluminous";
    $res = $obj->GetResult($str);
    
  while($row = mysql_fetch_row($res))
  {
    echo "<a href='view_image1.php?id=$row[0]' height=150px width=150px style=margin-left:150px>$row[1]</a>";
  }
?>

