<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html> 
<head>

<title>
BAhead-Log In or Sign In
</title>

<script src="signupscript.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"><!--
function checkPasswordMatch() {
    var password = $("#password1").val();
    var confirmPassword = $("#cpassword1").val();

    if (password != confirmPassword)
        $("#cpassword").html("*not matching..").css('color', 'red');
    else
        $("#cpassword").html("matched").css('color', 'green');
}
//--></script>
<style type="text/css">
@import "http://fonts.googleapis.com/css?family=Fauna+One|Muli";
.WebContainer{
    width:100%;
    min-width:1000px;
    height:auto;
}
.articles{
    width:0%; /*Takes 90% width from WebContainer*/
    height: auto;
    margin: auto;
}
body{ background: -webkit-linear-gradient(90deg, #FFEEEE 10%, #DDEFBB 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FFEEEE 10%, #DDEFBB 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FFEEEE 10%, #DDEFBB 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FFEEEE 10%, #DDEFBB 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FFEEEE 10%, #DDEFBB 90%); /* W3C */
	  }

#basetop{position:fixed;
left:-5px;
float:left;
top:0px;
background:    -moz-linear-gradient(#312626, #725555 50%, #312626);
background:    -o-linear-gradient(#312626, #725555 50%, #312626);
background:    -webkit-linear-gradient(#312626, #725555 50%, #312626);
background:    linear-gradient(#312626, #725555 50%, #312626);
border-radius:10px;
   }
		  .login1{position:fixed;
		          top:25px;
				  left:680px;
				  float:right;
				  font-family:Comic Sans MS;
				  color:white;}	

input[type=password] {
    border: 1px solid #00FF00 ;
    border-radius:4px;
  box-shadow:0 1px 1px 0 #a9a9a9;  
    -webkit-appearance: none;
	padding:5px;
	font-family:Comic Sans MS;
	color:black;
}			 
input[type=text] {
    border: 1px solid #00FF00 ;
    border-radius:4px;
    
	


box-shadow:0 1px 1px 0 #a9a9a9;


    -webkit-appearance: none;
	padding:5px;
	font-family:Comic Sans MS;
	color:black;
}
#SignUp input[type=password] {
    border: 1px solid #00FF00 ;
    border-radius:4px;
box-shadow:0 1px 1px 0 #a9a9a9;    
    -webkit-appearance: none;
	padding:4px;
	font-family:Comic Sans MS;
	color:black;
	font-size:20px;
}			 


#SignUp input[type=text] {
    border: 1px solid #00FF00 ;
    border-radius:4px;
 box-shadow:0 1px 1px 0 #a9a9a9;   
    -webkit-appearance: none;
	padding:4px;
	font-family:Comic Sans MS;
	color:black;
	font-size:20px;
}
			 
.login1 input[type=submit] {
    border: 1px solid #FF3300 ;
    border-radius: 4px;
    padding:2px;
	background-color:#FF3300;
    -webkit-appearance: none;
	font-family:Comic Sans MS;
	color:white;
}	
.login1 input[type=submit]:hover {
    border-bottom: 3px solid yellow ;
    border-radius: 4px;
    padding:3px;
	background-color:#FF3300;
    -webkit-appearance: none;
	font-family:Comic Sans MS;
	color:yellow;
}
.logo{position:fixed;
      top:32px;
	  left:75px;}	
#SignUp{position:absolute;
        top:95px;
		left:630px;
		
		color:white;
		font-family:'Fauna One',serif;
		font-weight:bold;
		font-size:20px;}
		
		#SignUp input[type=submit] {
    border: 3px solid red ;
    border-radius: 4px;
    padding:7px;
	background-color:red;
    -webkit-appearance: none;
	font-family:'Fauna One',serif;
	color:white;
}		
#SignUp input[type=submit]:hover {
    border-bottom: 3px solid yellow ;
    border-radius: 4px;
    padding:7px;
	background-color:red;
    -webkit-appearance: none;
	font-family:'Fauna One',serif;
	color:yellow;
}	
h1{color:#778899;}	

.sign{ border-spacing: 0;
    border-collapse: collapse;
	line-height:0.5em;
	color:#778899;}
p{line-height:1.4em;
	font-size:14px;
	color:#778899;}
	
	#SignUp input[type=radio] {
    
    
	padding:8px;
	font-family:Comic Sans MS;
	
	font-size:20px;
	color:#778899;
}
#signupform span{
color:green;
font-size:12px;
}
#email{
color:red;
font-size:12px;
}
#username{
color:red;
font-size:12px;
}
#password{
color:red;
font-size:12px;
}
#cpassword{
color:red;
font-size:12px;
}
</style>


</head>
<body>
<img border="0" id="basetop"  height="90" width="1330"></img>
<form class="login1"name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
 
  <tr>
    <td width="30"><div align="right">Username</div></td>
    <td width="30"><input name="username" type="text" size="10"/></td>
  
  
    <td width="30"><div align="right">Password</div></td>
    <td width="30"><input name="password" type="password" size="10"/></td>
  
  
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr> 
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err" style="position:fixed;top:48px;left:662px;
  padding:0;
  " >';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li style="float:left;color:red;list-style:star;padding-right:117px;
    
    ">',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
</table>
</form>

<div id="SignUp"> <h1>Create an account</h1> 
<table class="sign" border="0" > <tr> <form id="signupform"name="signupform"method="POST" action="index.php">
 <td> <input  type="text" name="fname"size="15" placeholder="First Name" required >&nbsp;&nbsp;<input type="text" name="lname"size="15"placeholder="Last Name" onchange="this.value = this.value.replace(/^\s+|\s+$/g, ''); " required > </td></tr> 
 <tr><td></br><input id='email1'type="text" name="email"size="36" placeholder="Email Id" onblur="validate('email', this.value)" required ></td><td>
<div id='email'></div>
</td> </tr>
 <tr><td> </br><input id="username1"type="text" name="user"size="36"placeholder="UserName" onblur="validate('username', this.value)"required ></td> <td>
<div id='username'></div>
</td></tr> 
 <tr><td> </br><input type="password" name="pass"size="36"placeholder="Password" id='password1' onblur="validate('password', this.value)"required title="minimum 8 digits" ></td> <td>
<div id='password'></div>
</td></tr>
 <tr><td></br><input type="password" id="cpassword1" name="cpass"size="36"placeholder="Confirm Password" onkeyup="checkPasswordMatch();" required title="minimum 8 digits" ></td> <td>
<div id='cpassword'></div>
</td></tr> 
<tr>  <td ></br><input  type="radio" name="sex" value="Female" required>Female<input type="radio" name="sex" value="Male"required>Male </td> </tr>
<tr> <td></br><p>*By clicking Create an account, you agree to our Terms and that</br> you have read our Data Policy, including our Cookie Use.</p></td> </tr>
 <tr> <td></br><input id="button" type="submit" name="submit2" value="Create an account"onclick="checkForm()"size="36"></td> </tr>
 <tr><td><?php
include_once"connection.php";

 function NewUser() 
 { $firstname = $_POST['fname']; 
 $lastname=$_POST['lname'];
 $userName = $_POST['user'];
 $email = $_POST['email']; 
 $password = $_POST['pass'];
 $gender=$_POST['sex'];
 $query = "INSERT INTO member (fname,lname,username,email,password,gender) VALUES ('$firstname','$lastname','$userName','$email','$password','$gender')"; 
 $data = mysql_query ($query)or die(mysql_error());
 if($data) { echo "<p>thank you for signup...</br> Login with your username and password.</p>"; 
 } }
 function SignUp() { if(!empty($_POST['user'])) 
	 //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
	 { $query = mysql_query("SELECT * FROM member WHERE username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
	 if(!$row = mysql_fetch_array($query) or die(mysql_error())) { newuser();
	 } else { echo "<p>SORRY...YOU ARE ALREADY REGISTERED USER...</p>"; 
	 } } } if(isset($_POST['submit2'])) 
	 { SignUp(); } ?></td></tr>
 </form> </table>  </div>





<img class="logo"height="65"></img>

</body>
</html>