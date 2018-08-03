<html>
<head>
<link rel="stylesheet" type="text/css" href="css/recovery.css">
<title>ระบบฐานข้อมูลศิษย์เก่า มหาวิทยาลัยทักษิณ</title>
</head>
<body>
  <div class="header">
  <!--<h2 class="site-title">ระบบฐานข้อมูลศิษย์เก่า มหาวิทยาลัยทักษิณ</h2>-->
  <!--<div class="home"> <a href="main.html"><img height = "50px" src ="img/home.png"></a>-->
  </div>
 
<div class="form-wrapper">
  
  <form action="login.php" method="post">
    <h3><center>Recovery Password<center></h3>
  
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" required></input>
    </div>
    
    <div class="form-item">
		<input type="text" name="perid" required="required" placeholder="เลขที่บัตรประชาชน" required></input>
    </div>

    <div class="form-item">
    <input type="date" name="birthdate" required="required" required></input>
    </div>
    
    <div class="button-panel">
      <button type="button" class="button" name="check" value="check">ตรวจสอบ</button>
      <button type="reset" class="button" name="clear" value="clear">ล้างข้อมูล</button>
        
        <!--<input type="hidden" name="module" value="search">
        <input type="submit" name="btnSubmit" class="btn" value="ค้นหาข้อมูล">
        <input type="button" name="btnClear" class="btn" value="ล้างข้อมูล" onclick="window.location='./login.php?module=search';">-->
    </div>
  </form>
  
  <!--<div class="reminder">
    <p>Not a member? <a href="register.php">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p
  </div>>-->
  
</div>

</body>
</html>