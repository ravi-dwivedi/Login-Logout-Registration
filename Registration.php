<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Committee</title>

<link href="css/style3.css" rel="stylesheet" />
<script>
function validate1()
{
  txt2 = document.getElementById("valid1");
  if(txt2.value==""||txt2.value==null)
  {
    txt2.style.background = "Yellow";
    txt2.focus();
    alert("Please Enter Email Address");
    return false;
  }
    if((txt2.value.toString().indexOf("@")<2)||((txt2.valueOf().toString().indexOf(".com"))<(txt2.valueOf().toString().indexOf("@"))))
    {
        txt2.value="";
        txt2.style.background = "yellow";
    txt2.focus();
    alert("Invalid Format of email");
    return false;   
    }
     txt4 = document.getElementById("valid2");
   if(txt4.value==""||txt4.value==null)
  {
    txt4.style.background = "Yellow";
    txt4.focus();
    alert("Please Enter Name");
    return false;
  }
    }
    
  function validate2(hello)
    {
    txt1 = document.getElementById(hello);
   if(txt1.value!=""||txt1.value!=null)
   {
    txt1.style.background = "white";
    return false;
    }
   } 
   
    </script>

</head>
<body>
<div id="container" style="margin-top: 75px;">
<FORM method="post" enctype="multipart/form-data">
<fielset>
	<legend>Personal Details</legend>
	<table>
               <tbody>
	                <tr>
				<th class="feature">Email Id</th>
				<th class="ravi1"><h2><input  type="text" name="t1" id="valid1" onkeyup="return validate2('valid1')"></th>
			
			</tr>
			<tr>
				<td class="feature">Name</td>
				<td class="ravi1"><input type="text" name="t2" id="valid2" onkeyup="return validate2('valid2')"></td>
				
			</tr>
           <tr><td class="feature">Image</td>
				<td class="ravi1"><input  type="file" name="image"></td>
				
			</tr> 
		</tbody>
	</table></fieldset><center><br /><br />
    <input align="center" onclick="return validate1()" type="submit" value="Insert" name="sub2" style="border: black;border: solid;background: silver;background: silver;width: 100px;height: 30px;"/>
    </form></center>
    <?php
    if(isset($_REQUEST['sub2']))
 {
    if(!empty($_REQUEST['t1'])&&!empty($_REQUEST['t2']))
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
    $handler = @fopen($temp_name,"r");
    $read = @fread($handler,filesize($temp_name));
    $email = md5($_REQUEST['t1']);
    $email = substr($email,0,20);
    $dateof  = "1/1/2000";
    if($data=addslashes($read))
    {
        
     require_once('blogic.php');
       $obj = new Blogic();
    $str = "insert into person values('$email','$_REQUEST[t2]','$dateof','$data','$mime')";
    $res = $obj->GetResult($str);
    $str = "insert into login (Id,Password,email) values('$email','$email','$_REQUEST[t1]')";
    $res = $obj->GetResult($str);
    echo "Registration successful";
    }
    }
    else
    {
        echo "<font size=6 color=red>First Complete the entries!!!</font>";
    }
} 
    ?>