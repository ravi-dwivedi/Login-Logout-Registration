<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="scripts/jquery.queryloader2.js" type="text/javascript"></script>
<script type="text/javascript">
	function validate1(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
	
	function validate()
    {
		
        document.getElementById("first").value.trim();
        if(document.getElementById("first").value.trim()==="")
        {
            alert("Please Enter your name");
            return false;
        }
		if(document.getElementById("pass1").value.trim()==="")
        {
            alert("Please Enter a Password");
            return false;
        }
		if(document.getElementById("pass1").value!=document.getElementById("pass2").value)
        {
            alert("Password's dont match");
            return false;
        }
		if(document.getElementById("name").value.trim()===""||document.getElementById("post").value.trim()===""||document.getElementById("city").value.trim()===""||document.getElementById("year").value.trim()==="")
		{
			alert("Please enter Full Details");
			return false;
		}
		
		if(document.getElementById("file1").value==="")
		{
			alert("File not Uploaded");
			return false;
		}
		
		if(document.getElementById("attendees").value==="")
		{
			alert("Please specify no. of attendees");
			return false;
		}
		var file = document.getElementById('file1').files[0]; 
var fileSize = file.size;
        if(fileSize>2*1024*1024)
		{
			alert("File too big");
			return false;
		}		
         var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(!document.getElementById("email").value.match(mailformat))
       {
           alert("You have entered an invalid email address!");
           return false; 
       }
		         
	     if(document.getElementById("email").value==="")
		 {
			 return false;
		 }
		 if(document.getElementById("contact1").value==="")
		 {
			 alert("Please specify Contact no.");
			 return false;
		 }
		 
    }
</script>
</head>
<body onload = 'document.getElementById("first").focus()' >
<!--WRAPPER-->
<div id="wrapper">
<!--LOGIN FORM-->
<form id="myForm" class="login-form" onsubmit="return validate();"  method="POST" enctype="multipart/form-data">

	<!--HEADER-->
    <div class="header">
    <!--TITLE-->
    <h1 align="center"> REGISTRATION   FORM</h1><!--END TITLE--><br />
    <!--DESCRIPTION--><span><b><h4 align="center">Fill out the form below to register with us!!.</h4><b></span><!--END DESCRIPTION-->
    <br />
    <br />
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="t1" class="input username" id="first" type="text"  onfocus="this.value=''"  placeholder="NAME"/><!--END USERNAME-->
    <br />
    <br />
    <input name="t2" type="text" class="input username" id="email" onfocus="this.value=''" placeholder="E-MAIL ID"/>
    
 <br />
         <br />    <input name="pass1" type="password" class="input username" id="pass1" onfocus="this.value=''" placeholder="PASSWORD" />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input name="pass2" type="password" class="input username" id="pass2" onfocus="this.value=''" placeholder="CONFIRM PASSWORD" />
<br /> 
         <br />    <input name="t3" type="text" class="input username" id="year" onfocus="this.value=''" placeholder="YEAR OF PASSING" onkeypress="validate1(event)"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="t4" class="input1 username">
            <option value="B.tech" >B.Tech</option>
            <option value="Faculty">Faculty</option>
    <option value="M.tech">M.Tech</option>
            <option value="M.sc">M.Sc</option>
            <option value="Ph.d">Ph.d</option>
         </select>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="t5" class="input2 username">
      <option value="Ch">APPLIED CHEMISTRY</option>
      <option value="M">APPLIED MATHEMATICS</option><option value="Ph">APPLIED PHYSICS</option>
        <option value="BT">BIO TECHNOLOGY</option>
          <option value="CHE">CHEMICAL ENGINEERING</option>
    
            <option value="CSE">COMPUTER SCIENCE & ENGINEERING</option>
            <option value="CI">CIVIL ENGINEERING</option>
            <option value="ECE">ELECTRONICS & COMMUNICATION ENGINEERING</option>
            <option value="hM">HUMANITIES & MANAGEMENT</option>
            <option value="IP">INDUSTRIAL ENGINEERING</option>
            <option value="IPE">INDUSTRIAL & PRODUCTION ENGINEERING</option>
            <option value="ICE">INSTRUMENTATION & CONTROL ENGINEERING</option>
            <option value="LX">LEATHER ENGINEERING</option>
        <option value="ME">MECHANICAL ENGINEERING</option>     
            <option value="TXT">TEXTILE ENGINEERING</option>
            
      </select>
         <br />
         <br />
         <input name="t6" type="text" class="input username" id="contact1" onfocus="this.value=''" onkeypress="validate1(event)" placeholder="MOBILE"/>
        
    <br /><br /><span4><b>GENDER</b></span4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="t7" type="radio" id="gender" value="Male" checked="checked"/><span3><b>MALE</b></span3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input name="t7" type="radio"  id="gender" value="Female"/><span3><b>FEMALE</b></span3>
    <br /><br /><span4><b>MARITAL STATUS</b></span4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="t8" type="radio" id="marital" value="Unmarried" checked="checked"/><span3><b>UNMARRIED</b></span3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input name="t8" type="radio"  id="marital" value="married"/><span3><b>MARRIED</b></span3>
  <br /><br /><span1><b>PROFESSIONAL DETAILS</b></span1><br /><br />
        <input name="t9" class="input username" id="post" type="text" placeholder="DESIGNATION" onfocus="this.value=''"  />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="t10" class="input username" id="name" type="text" placeholder="NAME OF COMPANY" onfocus="this.value=''"  />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input name="location" class="input username" id="city" type="text" placeholder="LOCATION OF COMPANY" onfocus="this.value=''"  />
        
    <br />
        <br />
        <span1><b>PREFRENCES</b></span1>
        <br />
        <br />
        <span4><b>ACCOMODATION </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;<b>MODE OF ARRIVAL</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;<b>NO. OF ATTENDEES</b></span4>
        <br />
        <br />
         <select name="accomo" class="input1 username" id="accomo">
        <option value="HOSTEL">HOSTEL</option>
        <option value="HOTEL">HOTEL (Own Cost)</option>
        <option value="NOT REQUIRED">NOT REQUIRED</option>
       </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                   <select name="transport" class="input1 username" id="transport" >
                   
        <option value="AIRPORT">AIRPLANE (Amritsar Airport)</option>
        
        <option value="BUS">BUS</option>
        <option value="OWN">OWN VEHICLE</option>
        <option value="TRAIN">TRAIN</option>
      </select>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="no.of attendees" type="text" class="input username" id="attendees" onfocus="this.value=''" onkeypress="validate1(event)" placeholder="NO. OF ATTENDEES"/>
    <br />
        <br />
        <br />
        <span><b>PLEASE UPLOAD A PHOTOGRAPH(<2Mb)</b></span><br />
       <input type="file" name="file" id="file1" class="button" /><br />    </div>
    <!--END CONTENT-->
    <br />
    <!--FOOTER-->
    <div class="footer">
    <!--REGISTER BUTTON--><input type="submit" name="submit" value="REGISTER" class="register" /><!--END REGISTER BUTTON-->
    <input type="button" value="BACK" class="register1" onClick="parent.location='index.php'"/><!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>

 <?php
    if(isset($_REQUEST['submit']))
 {
    if($_FILES['file']['error']==0)
    {
    $temp_name = $_FILES['file']['tmp_name'];
    $mime = $_FILES['file']['type'];
    }
    else
    {
        $temp_name = "empty.png";
        $mime = "image/png";
    }
    $handler = @fopen($temp_name,"r");
    $read = @fread($handler,filesize($temp_name));
    $email = md5($_REQUEST['t2']);
    $email = substr($email,0,20);
 $pass = md5($_REQUEST['pass1']);
 $pass = substr($pass,0,20);
 
    if($data=addslashes($read))
    {
        
     require_once('blogic.php');
       $obj = new Blogic();
    $str = "insert into aluminous values('$email','$_REQUEST[t1]','$_REQUEST[t2]',$_REQUEST[t3],'$_REQUEST[t4]','$_REQUEST[t5]',$_REQUEST[t6],'$_REQUEST[t7]','$_REQUEST[t8]','$_REQUEST[t9]','$_REQUEST[t10]','$data','$mime')";
    $res = $obj->GetResult($str);
    $str = "insert into login values('$email','$pass')";
    if($res = $obj->GetResult($str))
    {
    echo "<center><font color=green size=4>Registration successful</font></center>";
    }
    else
    {
        echo "<center><font color=red size=4>Registration unsuccessful !!! Try Again</font></center>";
    }
    }
    }
    ?>