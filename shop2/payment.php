<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ตะกร้าสินค้า</title>
<style>
.button1{
 background-color:#06BFF4; /* Green */
    border: none;
    color: white;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1{border-radius: 12px;}
.bg{ width:100%;
	height:117;
	background-color:#06BFF4;
	display:block;
	margin:auto auto;
	color:#ffffff;
	font-family:"TH Sarabun New";
	text-align:center;
	font-weight:bold;
	font-size: 32px;
	}
</style>
</head>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/menuCss.css" rel="stylesheet" type="text/css">
<link href="css/slideshow.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<div class="bg_head" style=" background-color:#6699FF; padding:1px; width:100%;">
  <div align="right">
 <!--<h6><a href='indexlogin.php'>เข้าสู่ระบบ<span class="bg_head" style="--> 
 <span class="bg_head" style=" background-color:#6699FF; padding:1px; width:100%;">
 <input style="width:100px;height:32px;font-size:20px;" type="submit" value="เข้าสู้ระบบ">
 </span></span>&nbsp;&nbsp; </a></h6>     </div>
</div>  
<div class="bg_head" style=" background-color:#06BFF4; padding:3px; width:100%;">
	<h2><div align="center"> <font color="#FFFFFF"> ร้านสวัสดิการ มหาวิทยาลัยทักษิณ</font></h2>
 <!--<h3><br><a href='indexlogin.php'>ร้านสวัสดิการ&nbsp; </a>  </br></h3>   </div>
 
 
</div> <div class="bg"> --> 
</div> 
<table width="100%" border="0">
    <tr>
    <td width="70" height="50" bgcolor="#ffffff">&nbsp;</td>
    <td width="70" bgcolor="#ffffff"><img src="http://www.tsu.ac.th/50tsu/png/50th-TSU-Logo-color.png" width="316" height="182"></td>
    <td width="11" bgcolor="#ffffff">&nbsp;</td>
   <td width="780" bgcolor="#ffffff"><div id="menu" style="position:relative; z-index:10"> 
    <ul>
     <a href="main.php">
     <button class="button button1"><h5><strong>หน้าแรก</strong></h5></button></a>
     </ul>
   </div> 
	  
      <td width="11" bgcolor="#ffffff">&nbsp;</td>
      
   <td width="780" bgcolor="#ffffff"><div id="menu" style="position:relative; z-index:10"> 
   </div> 
	  <div id="menu"> 
	    <ul>
        <a href="basket.php">
     <button class="button button1"><h5><strong>ตะกร้าสินค้า</strong></h5></button></a>
        </ul>
	  </div>
         
   <td width="880" bgcolor="#ffffff"><div id="menu" style="position:relative; z-index:10"> 
   </div> 
	  <div id="menu"> 
	    <ul>
	      <a href="payment.php">
     <button class="button button1"><h5><strong>แจ้งชำระเงิน</strong></h5></button></a>
        </ul>
	  </div>
         
   <td width="780" bgcolor="#ffffff"><div id="menu" style="position:relative; z-index:10"> 
   </div> 
	  <div id="menu"> 
	    <ul>
	      <a href="paymentChanel.php">
     <button class="button button1"><h5><strong>วิธีชำระเงิน</strong></h5></button></a>
        </ul>
	  </div>
         
   <td width="780" bgcolor="#ffffff"><div id="menu" style="position:relative; z-index:10"> 
   </div> 
	  <div id="menu"> 
	    <ul>
	      <a href="contact.php">
     <button class="button button1"><h5><strong>ติดต่อเรา</strong></h5></button></a>
        </ul>
      </div>
		
</table>        
  <img src="images/29425105_1673667729357446_4729211828477886464_o.jpg" style="margin-top:2px" alt="Img" class="img">
    
</body>
</html><body>
		<div class="bg"> แจ้งการชำระเงิน </div>

</html>
<body>
	<center> <div id="content"> </marquee>
          	 <div class="article">
          	 
             <p class="info noprint"> <span class="date">2018-07-18 08:50:47</span>
		  <h4>กรุณาตรวจสอบความถูกต้องก่อนการบันทึกทุกครั้ง</h4>
          

<!-- start   form -->
<form id="form1" name="form1"  method="post" action="save_payment.php" onsubmit="return chk_form()">
   <table width="550" border="1">
        <tr><td width="90">เลขที่ใบสั่งซื้อ</td>    <td width="217"><input type="text" name="cus_id"  value=""></td>    </tr>
	  <tr><td width="70">ชื่อ-สกุล</td>
      <td width="217"><input type="text" name="cus_name" size='40' value=""></td>    </tr>
	 	  <tr><td width="70">อีเมล์</td>
      <td width="217"><input type="text" name="cus_email" size='40' value=""></td>    </tr>
  
	  <tr><td width="70">เบอร์โทรศัพท์</td>
	  <td width="217"><input type="text" name="cus_tel"  size='40' value=""></td>    </tr>
	    <tr><td width="71">วันที่ชำระเงิน</td>
	  <td width="217"><input type="text" name="cus_day"  size='40' value=""></td>    </tr>
      <tr><td width="71">เวลาที่ชำระเงิน</td>
	  <td width="217"><input type="text" name="cus_day"  size='40' value=""></td>    </tr>
      <td>  </td>
	  <td width="217">
            	    <label for="image">อัพโหลดสลิปโอนเงิน</label>
            		<div class="input-box">
                    <input type="file" name="image" id="image" /><p class="red">
               		</div>
            	            </td>  
      
        </tr>
    <tr>
      <td>จำนวนเงิน</td>
      <td><input type="text" name="cus_money" value=""></td>
    </tr>
    
  </table>
    <input type="submit" name="Submit" value="ส่งรายการชำระเงิน">
</form> </center>

<br></br>
		
 <footer>
    <div id ="p1">
    <div class="bg_head" style=" background-color:#06BFF4; padding:15px; width:100%;">
	<div align="center">
 <a href='indexlogin.php'>ที่อยู่ เลข ที่ 140 ม .4, ตำบล เขารูปช้าง อำเภอเมืองสงขลา สงขลา 90000 Tel.074 693 990 , 085-8433499&nbsp;&nbsp; </a>     </div>
		
</footer>  
    
</body>
</html>

