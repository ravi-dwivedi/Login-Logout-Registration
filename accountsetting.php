<?php
session_start();
require_once('blogic.php');
    $obj = new Blogic();
if(isset($_SESSION['user']))
{
    $str = "select * from aluminous where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
    $str = "select * from Login where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row1 = mysql_fetch_row($res);
}
else
{
  header("location:Login.php");
}
?>
<script>
function validate1()
{
  txt1 = document.getElementById("valid1");
  if(txt1.value==""||txt1.value==null)
  {
    txt1.style.background = "yellow";
    txt1.focus();
    alert("Please Enter new or old user id");
    return false;
  }
  txt1 = document.getElementById("valid2");
  if(txt1.value==""||txt1.value==null)
  {
    txt1.style.background = "yellow";
    txt1.focus();
    alert("Please Enter you old password");
    return false;
  }
  txt1 = document.getElementById("ck1");
  if(txt1.checked)
  {
    txt2 = document.getElementById("valid3");
    txt3 = document.getElementById("valid4"); 
    if(txt2.value==""||txt1.value==null)
    {
        txt2.style.background = "yellow";
        txt2.focus();
        alert("Please Enter new Password");
        return false;
    }
    if(txt3.value==""||txt1.value==null)
    {
        txt3.style.background = "yellow";
        txt3.focus();
        alert("Please Enter Confirmation Password");
        return false;
    }
    if(txt3.value.toString()!=txt2.value.toString())
    {
    txt3.style.background = "yellow";
    txt3.focus();
    alert("Please Correct Confirmation Password");
    return false;  
    }  
    }
    }
    function validate2()
    {
        txt1 = document.getElementById("valid1");
  if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
  function validate3()
    {
        txt1 = document.getElementById("valid2");
  if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
      function validate4()
    {
        txt1 = document.getElementById("valid3");
  if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
      function validate5()
    {
        txt1 = document.getElementById("valid4");
        if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
    </script>
    
<div class="logo">
<div style="margin-left: 0px;">
      </div>
    </div>
<div  style="margin-top: 20px;margin-left: 1000px;"><a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<div  style="margin-top: 20px;margin-left: 1000px;"><a href="Home.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>

<FORM method="post" enctype="multipart/form-data">

<div id="container">
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr class="ravi1"><td class="feature" colspan="2">Email Id  :- </td>
<td colspan="3" class="feature"><input  type="text" name="t1" size="50" id="valid1" onkeyup="return validate2()" <?php if(!empty($row1[2])){echo "value=".$row1[2];}?>>
<input type="submit" name="sub1" value="availability"/></td></tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">Old Password  :- </td>
<td colspan="3" class="feature"><input type="password" name="t2" size="50" id="valid2" onkeyup="return validate3()"/></td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">&nbsp;</td>
<td colspan="3" class="feature"><input  type="checkbox" name="t3" size="50" id="ck1"/>Change Password</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">New Password  :- </td>
<td colspan="3" class="feature"><input  type="password" name="t4" size="50" id="valid3" onkeyup="return validate4()"/></td>
</tr>
            <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">Confirm New Password  :- </td>
<td colspan="3" class="feature"><input type="password" name="t5" size="50" id="valid4" onkeyup="return validate5()"/></td>
</tr>
            <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">New Image:- </td>
<td colspan="3" class="feature"><input  type="file" name="image" size="50"/></td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">&nbsp;</td>
<td colspan="3" class="feature"><input  type="checkbox" name="t7" size="50" id="ck2" value="p"/>Change Image</td>
</tr>
           <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">Date of Birth - </td>

<td class="ravi1"><SELECT Name="day"><?php
  
                                 $arr = explode("/",$row[2]);
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=1;$i<=31;$i++)
                                    {
                                        echo "<OPTION VALUE=$i";
                                  
                                            if($arr[0]==$i)
                                            echo " SELECTED";
                                        
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=1;$i<=12;$i++)
                                    {
                                       echo "<OPTION VALUE=$i";
                                       
                                            if($arr[1]==$i)
                                            echo " SELECTED";
                                        
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Month&nbsp;&nbsp;
                                        <SELECT Name="year"><?php
                                    echo "<OPTION selected>--Year--</OPTION>";
                                  for($i=1950;$i<=2013;$i++)
                                    {
                                       echo "<OPTION VALUE=$i";
                                        
                                            if($arr[2]==$i)
                                            echo " SELECTED";
                                        
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Year&nbsp;&nbsp;
</td>

</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="5"><center><input type="submit" value="Update" name="sub2" onclick="return validate1()"/></center></td>
</tr>
</table>
</FORM>
<br /><br />
<?php
if(isset($_REQUEST['sub2']))
 {
if($_FILES['image']['error']==0)
    {
    $temp_name = $_FILES['image']['tmp_name'];
    $mime = $_FILES['image']['type'];
    }
    else
    {
        $temp_name = "empty.png";
        $mime = "image/png";
    }
    
    $count =0;
    $handler = @fopen($temp_name,"r");
    $read = @fread($handler,filesize($temp_name));
    $str = "select * from Login where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    if($row = mysql_fetch_row($res))
    {
        $count =$count +1;
        if(!empty($_REQUEST['t1']))
        {
            $id = $_REQUEST['t1'];
            $id = md5($id);
            $id = substr($id,0,20);
     $str = "update person set Id='$id' where Id='$_SESSION[user]'";
     $res = $obj->GetResult($str);
     $str = "update Login set Id='$id', email='$_REQUEST[t1]' where Id='$_SESSION[user]'";
     $res = $obj->GetResult($str);
     $_SESSION['user'] = $id;
     }
     
    $date = $_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year'];
    
    $str = "update person set Date_of_Birth='$date' where Id='$_SESSION[user]'";
    
    if($res = $obj->GetResult($str))
    {
    }
    if(!empty($_REQUEST['t3']))
    {
        $old = $_REQUEST['t2'];
        $old = md5($old);
        $old=substr($old,0,20);
        if($old==$row1[1])
        {
          $pass = $_REQUEST['t4'];
        $pass = md5($pass);
        $pass = substr($pass,0,20);
    $str = "update Login set password='$pass' where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);  
    }
    else
    {
        echo "<center>Password not updated(Old password not correct)</center>";
    }
    }
    if(!empty($_REQUEST['t7']))
    {
    if($data=addslashes($read))
    {
    $str = "update person set Image='$data',Type='$mime' where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    }
    }
    
       echo "<center><Font size=5 color=green>Updated</font></center>";
    }
    
    if($count==0)
        echo "<center><Font size=5 color=red>Failed to update Try Later</font></center>";
    
  }  
?>
<?php
if(isset($_REQUEST['sub1']))
{
if(!empty($_REQUEST['t1'])&&$_REQUEST['t1']!=$_SESSION['user'])
{
    $str = "select * from Login where Id='$_REQUEST[t1]'";
    $res = $obj->GetResult($str);  
    $no=0;
    while($row=mysql_fetch_row($res))
    {
        $no = $no +1;
    }
    if($no>=1)
    {
     echo "<center><Font size=5 color=red>User Id already in use</font><br></center>";   
    }
    else
    {
        echo "<center><Font size=5 color=green>Available<br></Font></center>"; 
    }
}
else if(empty($_REQUEST['t1']))
{
    echo "<center><Font size=5 color=red>Please enter a user Id </font></center>";
}
else
{
    echo "<center><Font size=5 color=yellow>Same as Previous </font></center>";
}
}
?>