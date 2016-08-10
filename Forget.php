<style type="text/css">
#container{
    z-index: 5;
    border: black;
    background: silver;
    border-width: medium;
    border-style: solid;
    cursor: e-resize;
    width: 500px;
    height: 160px;
    text-align: center;
   margin-top: 12%;
    padding: 50px;
    -moz-border-radius: 40px;
        -webkit-border-radius: 40px;
          opacity:0.7;
  filter:alpha(opacity=70);
}
#valid1,#valid2{
background: #C0F0E4; border: black; font-family: cursive; z-index: auto;width: 250px;border-width: medium;border-style: solid;height: 30px;azimuth: center;overflow: auto;
}
.feature {
	width: 300px; text-align: left;
	font-size: 24px; font-weight: normal; color: #DD0736; 
}
.ravi12{
	background: rgba(255,255,255,0.05);
}
</style><script>
function validate()
{

  txt2 = document.getElementById("valid2");
  if(txt2.value==""||txt2.value==null)
  {
    txt2.style.background = "Yellow";
    txt2.focus();
    alert("Please Enter your E-mail Id");
    return false;
  }
   if((txt2.value.toString().indexOf("@")<2)||((txt2.valueOf().toString().indexOf(".com"))<(txt2.valueOf().toString().indexOf(".com"))))
    {
        txt2.value="";
        txt2.style.background = "yellow";
    txt2.focus();
    alert("Invalid Format of email");
    return false;   
    }
    }</script><center>
<body id="body1">
<div id="container">
<form>
<table>
<tr>
<td class="feature" colspan="2">your password will be sent to your email</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td class="feature">email-Id</td>
<td class="ravi12"><input type="" id="valid2" name="email"/></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td>
<td class="feature" ><center><input type="submit" name="sub" value=" Send AT Mail " onclick="return validate()"/></center></td></tr>
<tr><td>&nbsp;</td><td align="right"><a href="Login.php">Back to Login</a></td></tr>
</table>
</form>
</div></center>
<br /><br /><br />
<?php
if(isset($_REQUEST['sub']))
{
if(!empty($_REQUEST['email']))
{
    session_start();
    $p = ($_REQUEST['email']);
    $_SESSION['email'] = $p;
    header("location:check1.php");
    }
}
?>
<?php
if(!empty($_REQUEST['i']))
{
    if($_REQUEST['i']==1)
    echo "<font color=green size=6><center>Check your mail and go to <a href=Login.php>Login</a></center></font>";
    else if($_REQUEST['i']==2)
    echo "<font color=red size=6><center>Error in sending mail Try again!!</center></font>";
    else if($_REQUEST['i']==3)
    echo "<font color=red size=6><center>Invalid username and password</center></font>";
}
?>
</body>

