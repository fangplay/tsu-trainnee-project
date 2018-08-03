<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ระบบฐานข้อมูลศิษย์เก่า มหาวิทยาลัยทักษิณ</title>
</head>
<body>
  <div class="header">
  <!--<h2 class="site-title">ระบบฐานข้อมูลศิษย์เก่า  มหาวิทยาลัยทักษิณ</h2>
  <div class="home"> <a href="main.html"><img height = "50px" src ="img/home.png"></a>-->
  </div>
 
<div class="form-wrapper">
  
  <form action="login.php" method="post">
    <h3><center>Login<center></h3>
  
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  
  <div class="reminder">
    <p>Not a member? <a target="_blank" href="register.php">Sign up now</a></p>
    <p><a target="_blank" href="user_recov.php">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>