
<!DOCTYPE html>
<html>
<head>
<title>เข้าสู่ระบบ</title>
<meta charset="UTF-8">
<link href="css/menuCss.css" rel="stylesheet" type="text/css">
<link href="css/slideshow.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/css.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
body{
.w3-btn {width:150px;}	<!-- ปุ่มสั่งซื้อ -->
	margin:0;}
a {
	font-family: TH SarabunPSK;
}
body,td,th {
	font-size: 24px;
	font-family: "TH SarabunPSK";
	color: #000;
}
a:link {
	color: #FFF;
	font-weight: bold;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: none;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
	font-family: "TH SarabunPSK";
}
body {
	background-color: #FFF;
}
.btn-custom {
  background-color: hsl(110, 56%, 16%) !important;
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#398f28", endColorstr="#193f11");
  background-image: -khtml-gradient(linear, left top, left bottom, from(#398f28), to(#193f11));
  background-image: -moz-linear-gradient(top, #398f28, #193f11);
  background-image: -ms-linear-gradient(top, #398f28, #193f11);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #398f28), color-stop(100%, #193f11));
  background-image: -webkit-linear-gradient(top, #398f28, #193f11);
  background-image: -o-linear-gradient(top, #398f28, #193f11);
  background-image: linear-gradient(#398f28, #193f11);
  border-color: #193f11 #193f11 hsl(110, 56%, 11%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
  -webkit-font-smoothing: antialiased;
}

form[name= regis]{
	-webkit-box-shadow: 1px 1px #EAFFEA;
	-moz-box-shadow: 1px 1px #EAFFEA;
	box-shadow: 1px 1px #EAFFEA;
	width:80%;
	height:80%;
	background-color:#EAFFEA;
}
form[name= login]{
	-webkit-box-shadow: 1px 1px #EAFFEA;
	-moz-box-shadow: 1px 1px #EAFFEA;
	box-shadow: 1px 1px #EAFFEA;
	width:80%;
	height:80%;
	background-color:#EAFFEA;
}
input[type=email], select {
    width: auto auto;
	padding: 3px 7px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
	margin:auto auto;
	
}
input[type=text], select {
    width: auto auto;
	padding: 3px 7px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
	margin:auto auto;
	
}
input[type=password], select {
    width: auto auto;
	padding: 3px 7px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box ;
	margin:auto auto;
}
input[name=submit] {
    width: 30%;
    background-color: #09b757;
    color: white;
    padding: 3px 2px;
    margin: 1px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}
input[name=reset] {
    width: 30%;
    background-color:#9e9999;
    color: white;
    padding: 3px 2px;
    margin: 1px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}
input[name=submit]:hover {
    background-color: #33CCFF;
}
input[name=reset]:hover {
    background-color: #FF3366;
}
.bg{ width:100%;
	height:117;
	background-color:#CCCCCC;
	display:block;
	margin:auto auto;
	color:#006600;
	font-family:"TH Sarabun New";
	text-align:center;
	font-weight:bold;
	font-size: 32px;
	}
.img {
    max-width: 100%;
    height: auto;
	margin:auto auto;
}
<!--
     .TableLine {
   border-top-style: none;
   border-right-style: none;   
   border-bottom-style: none;
   
   border-left-style: dotted;   
   border-left-width: 1px;
   border-left-color: #06BFF4;
      }
-->
</style>

</head>
<body> 

<script>

  var bFbStatus = true;
  var fbID = "";
  var fbName = "";
  var fbEmail = "";

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '983860321769926',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.0'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

/*
function statusChangeCallback(response)
{
		if(bFbStatus == false)
		{
			fbID = response.authResponse.userID;

			  if (response.status == 'connected') {
				getCurrentUserInfo(response)
				location.href='index.php';
			  } else {
				FB.login(function(response) {
				  if (response.authResponse){
					getCurrentUserInfo(response)
				  } else {
					console.log('Auth cancelled.')
				  }
				}, { scope: 'email' });
			  }
		}


		bFbStatus = true;
}*/

function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status == 'connected') {
      getCurrentUserInfo(response)
	  //window.location = "checklogin.php";
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

function getCurrentUserInfo() {
	
    FB.api('/me?fields=id,name,email', function(response) {
		
		<!-- Test log in for ajax-->
		$.ajax({
		  url:'ajax.php',
		  data: {fbpost:response},
		  type:'POST',
		  success: function(banthaiherb_response){
			  if(banthaiherb_response==1){
				  //alert("Login complete เข้าระบบเรียบร้อยแล้ว!");
				  window.location.href="index.php";
			  }else{
			  	  alert(banthaiherb_response);
			  }
		  }
		});
		  
  console.log(response);
  
  });
    
}


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {	
		  
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
  
 /* 
 jQuery(document).ready(function() {
    alert("test load");
  });*/
</script>


<div class="bg_head" style=" background-color:#6699FF; padding:1px; width:100%;">
  <div align="right">
 <!--<h6><a href='indexlogin.php'>เข้าสู่ระบบ<span class="bg_head" style="--> 
 <span class="bg_head" style=" background-color:#6699FF; padding:1px; width:100%;">
 
 <input style="width:100px;height:32px;font-size:20px;" type="submit" value="ผู้ดูแลระบบ">
 <input style="width:100px;height:32px;font-size:20px;" type="submit" value="เข้าสู้ระบบ">
 
  <a href="Pageadmin.php"><input style="width:100px;height:32px;font-size:20px;" type="submit" value="ผูู้ดูแลระบบ"></a>
 <a href="main.php"><input style="width:100px;height:32px;font-size:20px;" type="submit" value="เข้าสู้ระบบ"></a>

 </span></span>&nbsp;&nbsp; </a></h6>     </div>
</div>  
<div class="bg_head" style=" background-color:#06BFF4; padding:3px; width:100%;">
	<h1><div align="center"> <font color="#FFFFFF"> ร้านสวัสดิการ มหาวิทยาลัยทักษิณ</font></h1>
 <!--<h3><br><a href='indexlogin.php'>ร้านสวัสดิการ&nbsp; </a>  </br></h3>   </div>
     <div class="bg"> เข้าสู่ระบบ</div><!--<br> -->
<center> 
<table align="center" width="70%" border="0" >  
	<tr>
	  <td width="35%"><center>
	    <form name="login" method="post" action="checklogin.php" ><br>
        
    <h2><font color="#006600"><strong>  เข้าสู่ระบบด้วย Email Address  </strong></font></h2>
        <table>
            <tr><td align="right">อีเมล์ :&nbsp;</td><td><input type="email" id="email" name="email" required  placeholder="example@domain.com" required autofocus></td></tr>
            <tr><td align="right">รหัสผ่าน :&nbsp;</td><td><input type="password" id="pass" name="pass" required  placeholder="รหัสผ่าน" maxlength="8" required autofocus></td></tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr><td colspan="2" align="center"><input type="submit" name="submit" value="ยืนยัน">&nbsp;
                &nbsp;<input type="reset" name="reset" value="รีเซ็ต"></td></tr>
            <tr><td colspan="2">&nbsp;</td></tr>
        </table>
    </form>
    </center>
    </td>
    
    <center>
   		<form name="login">
       
        </form></center>
        
	</tr>
    <tr><td>
		<script>
    function check_form(name_form){
        var format_mail=/^([a-zA-Z]{1,})+([a-zA-Z0-9\_\-\.]{1,})+@([a-zA-Z0-9\-\_]{1,})+([.]{1,1})+([a-zA-Z0-9\-\_\.]{1,})$/;	
        if(!(format_mail.test(name_form.email.value)))
        {
            alert("รูปแบบอีเมล์ไม่ถูกต้อง");
            name_form.email.focus();
            return false;
        }
    }
    
    </script>
	<center>
    <form name="login" method="post" action="checklogin.php" >
        <form name="regis" method="post" action="register.php" onSubmit="return check_form(this)" autocomplete="off" > 
	   <h2><font color="#006600"><strong>  สมัครสมาชิก  </strong></font></h2>
       <table>
       	<tr><td align="right">อีเมล์ :&nbsp;</td><td><input type="email" id="email" name="email" required  placeholder="example@gmail.com" required autofocus></td></tr>
        <tr><td align="right">รหัสนิสิต :&nbsp;</td><td><input type="email" id="email" name="email" required  placeholder="582021480" required autofocus></td></tr>
        <tr><td align="right">ชื่อ:&nbsp;</td><td><input type="text" id="fname" name="fname" required  placeholder="ชื่อ" required autofocus></td></tr>
        <tr><td align="right">สกุล:&nbsp;</td><td><input type="text" id="lname" name="lname" required  placeholder="สกุล" required autofocus></td></tr>
        <tr><td align="right">เบอร์โทรศัพท์:&nbsp;</td><td><input type="text" id="lname" name="lname" required  placeholder="เบอร์โทรศัพท์" required autofocus></td></tr>
        <tr><td align="right">รหัสผ่าน :&nbsp;</td><td><input type="password" id="pass" name="pass" required  placeholder="รหัสผ่าน" maxlength="8" required autofocus></td></tr>
        <tr><td align="right">ยืนยันรหัสผ่าน :&nbsp;</td><td><input type="password" id="cfpass" name="cfpass" required  placeholder="ยืนยันรหัสผ่าน" maxlength="8" required autofocus></td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2" align="center"><input type="submit" name="submit" value="สมัคร">&nbsp;
        	&nbsp;<input type="reset" name="reset" value="รีเซ็ต"></td></tr>
            <tr><td colspan="2">&nbsp;</td></tr>
       </table>
 		</form>
	</center>
  </td></tr>
  </table>
</center>

    </br></br>
</body>
</html>