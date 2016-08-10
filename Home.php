<?php
session_start();
$row;
require_once('blogic.php');
if(isset($_SESSION['user']))
{
    $obj = new Blogic();
    $str = "select * from aluminous where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
}
else
{
    header("location:Login.php");
}
?>
<html>
<head>
<title>
Home
</title>
</head>
<body>
<table border="1px" align="center" width="80%" cellpadding="0" cellspacing="0">
<tr>
<td>

<table width="100%">
<tr >
<td> <a href="accountsetting.php">accountsetting</a></td>
        <td width="30%" align="right" valign="bottom"><center><a href="Logout.php">Logout</a></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
</table>
</td>
</tr>
<tr>
<td height="600px">
<table border="1" width="100%" >
<tr>
<td valign="top"><br />&nbsp;&nbsp;<img src="view_image.php" height="120px" width="120px" ></img>
<br /><br />
<center><font size="6px">
<?php echo "Name =".$row[1];?><br />
Good Morning <br />
Thanks for visiting <br />
We have new information on the notice board</font></center>
</td>
<td width="20%">News:</td>
</tr></table>
</td>
</tr>
<tr>
<td height="100px">
<table width="100%">
<tr >
<td width="100px"></td>
<td width="200px" align="center"><font face="chiller" size="6"></font></td>
<td width="100px"></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
