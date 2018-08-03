<?php
//include("conn.php");
//$mysqli->set_charset("utf8");
    //ตั้งค่าการเชื่อมต่อฐานข้อมูล
   /* $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "alumni";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $mysqli = new mysqli($servername, $username, $password, $dbname);
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
    $mysqli->set_charset("utf8");

//กรณีมี Error เกิดขึ้น
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
        //เรียกข้อมูลจาก ตาราง chart 
        $get_data = $mysqli->query("SELECT * FROM prepaststudent WHERE ");
        
        while($data = $get_data->fetch_assoc()){
            
            $result[] = $data;
        }*/
		error_reporting(E_ALL & ~E_NOTICE);
		$hostname_crm = "localhost";
	    $database_crm = "alumni";
	    $username_crm = "root";
	    $password_crm = "";+
	    $crm = mysqli_connect($hostname_crm, $username_crm,$password_crm) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysqli_set_charset($crm,'utf8');
	//////
	
	$conn=mysqli_connect($hostname_crm,$username_crm,$password_crm);
	$db=mysqli_select_db($conn,$database_crm);
	mysqli_set_charset($conn,'utf8');
	$r = "SELECT * FROM prepaststudent";
	$t = mysqli_query($conn,$r);
	/*while($f=mysqli_fetch_array($t)){
	echo $f['std_name']."<br>";
	}*/
	$pagesize=20;
	
?>
    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>ระบบฐานข้อมูลศิษย์เก่า มหาวิทยาลัยทักษิณ</title>
        
    </head>
    <body>
            <center><tr><a href="main.html"><img src="pic/logov2.png" height="90%" width="90%"></a></tr></center>
            <!--<div class="pageHeader">ค้นหาข้อมูลศิษย์เก่า</div>-->
          
        <!--   <div id="themeHeader">
                
                  <br>
                  <br>
             เลือกภาษา <a href="?lang=TH" target="_parent"><img src="css/images/th.png" align="absmiddle" border="0"/></a>&nbsp;<a href="?lang=EN" target="_parent"><img src="css/images/en.png" align="absmiddle" border="0"/></a></div>-->
                <!--<div style="clear: both"></div>-->
            </div>
        </div>
        
    	<div id="themeNavBar">
        	<div class="maxwrap">
            <p align="center"><a href='search_alumni.php'>ค้นหา</a>&nbsp; | &nbsp;<a href='href="file/manual.pdf'>คู่มือการใช้งาน</a>&nbsp; | &nbsp;<a href="register.php">ลงทะเบียน</a>&nbsp; | &nbsp;<a href="post-login.php">เข้าสู่ระบบ</a>&nbsp;&nbsp;</p>
            </div></div>

<!--<div class='wrap' style='width: 80px'; onMouseOver="this.className='wrap'" onMouseOut="this.className='wrap'"><a href='#'>ค้นหา</a></div>-->
<!--<div class='wrap-inactive' style='width: 95px'; onMouseOver="this.className='wrap-inactive'" onMouseOut="this.className='wrap-inactive'"><a href='./index.php?module=register'>ลงทะเบียน</a></div>-->
<!--<div class='wrap-inactive' style='width: 120px'; onMouseOver="this.className='wrap-inactive'" onMouseOut="this.className='wrap-inactive'"><a href='href="file/manual.pdf'>คู่มือการใช้งาน</a></div><div class='wrap-inactive' style='width: px'; onMouseOver="this.className='wrap-inactive'" onMouseOut="this.className='wrap-inactive'"><a href='./index.php?module='></a></div>-->	
            </div>
         </div><br />
<script type="text/javascript" src="./includes/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./includes/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./includes/jquery.fancybox-1.3.4.css" media="screen" />
    <div id="themeWrapper">
            <div class="pageHeader" align="center">ค้นหาข้อมูลศิษย์เก่า</div>
</div>
                <form name="profileform" action="search_alumni.php" method="POST" id="profileform">
			  <table cellpadding="2" cellspacing="2" width="100%" align="center">
                    	<tr valign="top">
                        	<td class="black14" align="center">
                            	<table cellpadding="2" cellspacing="2">
                                	<tr><td align="right">ชื่อ - สกุล : <input style="width:250px" class="text-200" type="text" id="name" name="name" /></td><td> <a href="javascript: submitform()"><!--<img src="icon/go.gif" alt="ค้นหา" width="21" height="17" border="0" align="absmiddle"/>--></a>	<!--</td></tr>-->                   
                                	<tr><td align="right">รหัสนิสิต : <input style="width:250px" type="text" class="text-200" id="studentid" name="studentid" value="" /></td></tr> 
                                    </td></tr>
									
									<tr><td align="right">สาขา : 
										<select style="width:250px" class="cbb-200" id="major" name="major" onchange="window.location='./index.php?module=search&lang=TH'+'&firstname='+document.profileform.firstname.value+'&lastname='+document.profileform.lastname.value+'&studentid='+document.profileform.studentid.value+'&startyear='+document.profileform.startyear.value+'&campus='+document.profileform.campus.value+'&faculty='+document.profileform.faculty.value+'&department='+document.profileform.department.value+'&major='+document.profileform.major.value+'&page=1';">
                                            <option>กรุณาเลือก</option> 
                                            <option>------------มนุษยศาสตร์และสังคมศาสตร์------------</option>
                                            <option name="major" value='นิเทศศาสตร์'>สาขาวิชานิเทศศาสตร์</option>
                                            <option name="major" value='ภาษาไทย'>สาขาวิชาภาษาไทย</option>
                                            <option name="major" value='การจัดการทรัพยากรมนุษย์'>สาขาวิชาการจัดการทรัพยากรมนุษย์</option>
                                            <option name="major" value='ภูมิศาสตร์'>สาขาวิชาภูมิศาสตร์</option>
                                            <option name="major" value='รัฐประศาสนศาสตร์'>สาขาวิชารัฐประศาสนศาสตร์</option>
                                            <option name="major" value='การบริหารและพัฒนาชุมชน'>สาขาวิชาการบริหารและพัฒนาชุมชน</option>
                                            <option name="major" value='บรรณารักษ์และสารสนเทศศึกษา'>สาขาวิชาบรรณารักษ์และสารสนเทศศึกษา</option>
                                            <option name="major" value='ประวัติศาสตร์'>สาขาวิชาประวัติศาสตร์</option>
                                            <option name="major" value='ภาษาจีน'>สาขาวิชาภาษาจีน</option>
                                            <option name="major" value='ภาษาญี่ปุ่น'>สาขาวิชาภาษาญี่ปุ่น</option>
                                            <option name="major" value='ภาษามลายู'>สาขาวิชาภาษามลายู</option>
                                            <option name="major" value='ภาษาอังกฤษ'>สาขาวิชาภาษาอังกฤษ</option>

                                            <option>------------วิทยาศาสตร์------------</option>
                                            <option name="major" value='คณิตศาสตร์'>สาขาวิชาคณิตศาสตร์</option>
                                            <option name="major" value='จุลชีววิทยา'>สาขาวิชาจุลชีววิทยา</option>
                                            <option name="major" value='ชีววิทยา'>สาขาวิชาชีววิทยา</option>
                                            <option name="major" value='ฟิสิกส์'>สาขาวิชาฟิสิกส์</option>
                                            <option name="major" value='วิทยาการคอมพิวเตอร์'>สาขาวิชาวิทยาการคอมพิวเตอร์</option>
                                            <option name="major" value='วิทยาศาสตร์การเพาะเลี้ยงสัตว์น้ำ'>สาขาวิชาวิทยาศาสตร์การเพาะเลี้ยงสัตว์น้ำ</option>
                                            <option name="major" value='วิทยาศาสตร์สิ่งแวดล้อม'>สาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม</option>
                                            <option name="major" value='สถิติ'>สาขาวิชาสถิติ</option>
                                            <option name="major" value='เคมี'>สาขาวิชาเคมี</option>
                                            <option name="major" value='เคมีอุตสาหกรรม'>สาขาวิชาเคมีอุตสาหกรรม</option>
                                            <option name="major" value='เทคโนโลยีสารสนเทศ'>สาขาวิชาเทคโนโลยีสารสนเทศ</option>
                                            <option name="major" value='เทคโนโลยีและการจัดการพลังงาน'>สาขาวิชาเทคโนโลยีและการจัดการพลังงาน</option>

                                            <option>------------ศึกษาศาสตร์------------</option>
                                            <option name="major" value='เทคโนโลยีและสื่อสารการศึกษา'>สาขาวิชาเทคโนโลยีและสื่อสารการศึกษา(4ปี)</option>
                                            <option name="major" value='วัดและประเมินทางการศึกษา'>สาขาวิชาการวัดและประเมินทางการศึกษา(4ปี)</option>
                                            <option name="major" value='ศึกษาปฐมวัย'>สาขาวิชาการศึกษาปฐมวัย(5ปี)</option>
                                            <option name="major" value='พลศึกษา'>สาขาวิชาพลศึกษา(5ปี)</option>
                                            <option name="major" value='สังคมศึกษา'>สาขาวิชาสังคมศึกษา(5ปี)</option>
                                            <option name="major" value='ภาษาอังกฤษ'>สาขาวิชาภาษาอังกฤษ(5ปี)</option>
                                            <option name="major" value='ภาษาไทย'>สาขาวิชาภาษาไทย(5ปี)</option>
                                            <option name="major" value='คณิตศาสตร์'>สาขาวิชาคณิตศาสตร์(5ปี)</option>
                                            <option name="major" value='วิทยาศาสตร์-ฟิสิกส์'>สาขาวิชาวิทยาศาสตร์-ฟิสิกส์(5ปี)</option>
                                            <option name="major" value='วิทยาศาสตร์-เคมี'>สาขาวิชาวิทยาศาสตร์-เคมี(5ปี)</option>
                                            <option name="major" value='วิทยาศาสตร์-ชีววิทยา'>สาขาวิชาวิทยาศาสตร์-ชีววิทยา(5ปี)</option>
                                            <option name="major" value='ศิลปศึกษา'>สาขาวิชาศิลปศึกษา(5ปี)</option>

                                            <option>------------เทคโนโลยีและการพัฒนาชุมชน------------</option>
                                            <option name="major" value='วิทยาศาสตร์และเทคโนโลยีอาหาร'>สาขาวิชาวิทยาศาสตร์และเทคโนโลยีอาหาร</option>
                                            <option name="major" value='สัตวศาสตร์'>สาขาวิชาสัตวศาสตร์</option>
                                            <option name="major" value='เกษตรศาสตร์'>สาขาวิชาเกษตรศาสตร์</option>
                                            <option name="major" value='เทคโนโลยีการเกษตรและการพัฒนาชุมชน'>สาขาวิชาเทคโนโลยีการเกษตรและการพัฒนาชุมชน</option>

                                            <option>------------วิทยาการสุขภาพและการกีฬา------------</option>
                                            <option name="major" value='การแพทย์แผนไทย'>สาขาวิชาการแพทย์แผนไทย</option>
                                            <option name="major" value='วิทยาศาสตร์การกีฬา'>สาขาวิชาวิทยาศาสตร์การกีฬา</option>
                                            <option name="major" value='สาธารณสุขศาสตร์'>สาขาวิชาสาธารณสุขศาสตร์</option>
                                            <option name="major" value='สุขศาสตร์อุตสาหกรรมและความปลอดภัย'>สาขาวิชาสุขศาสตร์อุตสาหกรรมและความปลอดภัย</option>

                                            <option>------------ศิลปกรรมศาสตร์------------</option>
                                            <option name="major" value='ดุริยางคศาสตร์สากล'>สาขาวิชาดุริยางคศาสตร์สากล</option>
                                            <option name="major" value='ดุริยางคศาสตร์ไทย'>สาขาวิชาดุริยางคศาสตร์ไทย</option>
                                            <option name="major" value='ทัศนศิลป์'>สาขาวิชาทัศนศิลป์</option>
                                            <option name="major" value='ศิลปะการออกแบบ'>สาขาวิชาศิลปะการออกแบบ</option>
                                            <option name="major" value='ศิลปะการแสดง'>สาขาวิชาศิลปะการแสดง</option>

                                            <option>------------เศรษฐศาสตร์และบริหารธุรกิจ------------</option>
                                            <option name="major" value='เศรษฐศาสตร์'>สาขาเศรษฐศาสตร์</option>
                                            <option name="major" value='การบัญชี'>สาขาวิชาการบัญชี</option>
                                            <option name="major" value='การตลาด'>สาขาวิชาบริหารธุรกิจบัณฑิต(การตลาด)</option>
                                            <option name="major"value='การประกอบการและการจัดการ'>สาขาวิชาการประกอบการและการจัดการ</option>
                                            <option name="major"value='การจัดการธุรกิจการค้าสมัยใหม่'>สาขาวิชาการจัดการธุรกิจการค้าสมัยใหม่</option>

                                            <option value="นิติศาสตร์">------------นิติศาสตร์ วิทยาเขตสงขลา------------</option>

                                            <option value="นิติศาสตร์">------------นิติศาสตร์ วิทยาเขตพัทลุง------------</option>

                                            <option>------------วิศวกรรมศาสตร์------------</option>
                                            <option name="major" value='วิศวกรรมยางและพอลิเมอร์'>สาขาวิชาวิศวกรรมยางและพอลิเมอร์</option>
                                            <option name="major" value='วิศวกรรมพลังงาน'>สาขาวิชาวิศวกรรมพลังงาน</option>
                                            <option name="major" value='วิศวกรรมเมคคาทรอนิกส์'>สาขาวิชาวิศวกรรมเมคคาทรอนิกส์</option>
						                                	</select>
                                    <!--<input style="width:250px" type="text" class="text-200" id="major" name="major" value="" /></td></tr>-->
                                    </td></tr>
				  
				  					<tr><td align="right">คณะ : <select style="width:250px" class="cbb-200" id="faculty" name="faculty" onchange="window.location='./index.php?module=search&lang=TH'+'&firstname='+document.profileform.firstname.value+'&lastname='+document.profileform.lastname.value+'&studentid='+document.profileform.studentid.value+'&startyear='+document.profileform.startyear.value+'&campus='+document.profileform.campus.value+'&faculty='+document.profileform.faculty.value+'&department='+document.profileform.department.value+'&major='+document.profileform.major.value+'&page=1';">
                                          <option>กรุณาเลือก</option>
                                          <option name="faculty" value="มนุษย์ศาสตร์และสังคมศาสตร์">คณะมนุษย์ศาสตร์และสังคมศาสตร์</option>
                                          <option name="faculty" value="คณะเศรษฐศาสตร์และบริหารธุรกิจ">คณะเศรษฐศาสตร์และบริหารธุรกิจ</option>
                                          <option name="faculty" value="นิติศาสตร์">คณะนิติศาสตร์</option>
                                          <option name="faculty" value="ศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
                                          <option name="faculty" value="วิทยาศาสตร์">คณะวิทยาศาสตร์</option>  
                                          <option name="faculty" value="วิทยาการสุขภาพและการกีฬา">คณะวิทยาการสุขภาพและการกีฬา</option>
                                          <option name="faculty" value="เทคโนโลยีและการพัฒนาชุมชน">คณะเทคโนโลยีและการพัฒนาชุมชน</option>
                                          <option name="faculty" value="วิศวกรรมศาสตร์"> คณะวิศวกรรมศาสตร์</option>
                                          <option name="faculty" value="พยาบาลศาสตร์"> คณะพยาบาลศาสตร์</option>
                                          <option name="faculty" value="ศึกษาศาสตร์"> คณะศึกษาศาสตร์</option>
																					</select><!--<input style="width:250px" type="text" class="text-200" id="faculty" name="faculty" value="" /></td></tr>-->
                                    </td></tr>
                                </table>
								<div class="buttonPane">
                        <div style="align-content:center" class="redbold14">*ในการค้นหาไม่ต้องใส่ข้อมูลให้ครบทุกช่อง&nbsp;<br />&nbsp;&nbsp;&nbsp;</div>
                    	<input type="hidden" name="module" value="search"></br>
                        <input type="submit" name="btnSubmit" class="btn" value="ค้นหาข้อมูล" />&nbsp;
                        <input type="button" name="btnClear" class="btn" value="ล้างข้อมูล" onclick="window.location='./search_alumni.php?module=search';" />&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/> 
                    </div>
                          </td>
                        	<!--<td class="black14" align="center">
                            	<table cellpadding="2" cellspacing="2">
                                	<tr><td align="right">
                                    	วิทยาเขต : 
										<select style="width:250px" class="cbb-200" id="campus" name="campus" onchange="window.location='./index.php?module=search&lang=TH'+'&firstname='+document.profileform.firstname.value+'&lastname='+document.profileform.lastname.value+'&studentid='+document.profileform.studentid.value+'&startyear='+document.profileform.startyear.value+'&campus='+document.profileform.campus.value+'&faculty='+document.profileform.faculty.value+'&department='+document.profileform.department.value+'&major='+document.profileform.major.value+'&page=1';">
                                        	<option value='9999'>ALL</option> 
											<option value='10'>วิทยาเขตสงขลา</option>
                                            <option value='20'>วิทยาเขตพัทลุง</option>
                                	<tr><td align="right">
										คณะ : 
										<select style="width:250px" class="cbb-200" id="faculty" name="faculty" onchange="window.location='./index.php?module=search&lang=TH'+'&firstname='+document.profileform.firstname.value+'&lastname='+document.profileform.lastname.value+'&studentid='+document.profileform.studentid.value+'&startyear='+document.profileform.startyear.value+'&campus='+document.profileform.campus.value+'&faculty='+document.profileform.faculty.value+'&department='+document.profileform.department.value+'&major='+document.profileform.major.value+'&page=1';">
                                        	<option value='9999'>ALL</option>
                                          <option value="10">คณะมนุษย์ศาสตร์และสังคมศาสตร์</option>
                                          <option value="70">คณะเศรษฐศาวตร์และบริหารธุรกิจ</option>
                                          <option value="81">คณะนิติศาสตร์</option>
                                          <option value="82">คณะนิติศาสตร์</option>
                                          <option value="60">คณะศิลปกรรมศาสตร์</option>
                                          <option value="20">คณะวิทยาศาสตร์</option>  
                                          <option value="50">คณะมวิทยาการสุขภาพและการกีฬา</option>
                                          <option value="40">คณะเทคโนโลยีและการพัฒนาชุมชน</option>
                                          <option value="90"> คณะวิศวกรรมศาสตร์</option>
                                          <option value="95"> คณะพยาบาลศาสตร์</option>
                                          <option value="30"> คณะศึกษาศาสตร์</option>
																					</select>
                                    </td></tr>
                                	<tr><td align="right">
                                    	สาขา : 
										<select style="width:250px" class="cbb-200" id="major" name="major" onchange="window.location='./index.php?module=search&lang=TH'+'&firstname='+document.profileform.firstname.value+'&lastname='+document.profileform.lastname.value+'&studentid='+document.profileform.studentid.value+'&startyear='+document.profileform.startyear.value+'&campus='+document.profileform.campus.value+'&faculty='+document.profileform.faculty.value+'&department='+document.profileform.department.value+'&major='+document.profileform.major.value+'&page=1';">
                                            <option value='9999'>ALL</option> 
                                            <option>------------มนุษยศาสตร์และสังคมศาสตร์------------</option>
                                            <option value='1001'>สาขาวิชานิเทศศาสตร์</option>
                                            <option value='1002'>สาขาวิชาภาษาไทย</option>
                                            <option value='1003'>สาขาวิชาการจัดการทรัพยากรมนุษย์</option>
                                            <option value='1004'>สาขาวิชาภูมิศาสตร์</option>
                                            <option value='1005'>สาขาวิชารัฐประศาสนศาสตร์</option>
                                            <option value='1006'>สาขาวิชาการบริหารและพัฒนาชุมชน</option>
                                            <option value='1007'>สาขาวิชาบรรณารักษ์และสารสนเทศศึกษา</option>
                                            <option value='1008'>สาขาวิชาประวัติศาสตร์</option>
                                            <option value='1009'>สาขาวิชาภาษาจีน</option>
                                            <option value='1010'>สาขาวิชาภาษาญี่ปุ่น</option>
                                            <option value='1011'>สาขาวิชาภาษามลายู</option>
                                            <option value='1012'>สาขาวิชาภาษาอังกฤษ</option>

                                            <option>------------วิทยาศาสตร์------------</option>
                                            <option value='2001'>สาขาวิชาคณิตศาสตร์</option>
                                            <option value='2002'>สาขาวิชาจุลชีววิทยา</option>
                                            <option value='2003'>สาขาวิชาชีววิทยา</option>
                                            <option value='2004'>สาขาวิชาฟิสิกส์</option>
                                            <option value='2005'>สาขาวิชาวิทยาการคอมพิวเตอร์</option>
                                            <option value='2006'>สาขาวิชาวิทยาศาสตร์การเพาะเลี้ยงสัตว์น้ำ</option>
                                            <option value='2007'>สาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม</option>
                                            <option value='2008'>สาขาวิชาสถิติ</option>
                                            <option value='2009'>สาขาวิชาเคมี</option>
                                            <option value='2010'>สาขาวิชาเคมีอุตสาหกรรม</option>
                                            <option value='2011'>สาขาวิชาเทคโนโลยีสารสนเทศ</option>
                                            <option value='2012'>สาขาวิชาเทคโนโลยีและการจัดการพลังงาน</option>

                                            <option>------------ศึกษาศาสตร์------------</option>
                                            <option value='3001'>สาขาวิชาเทคโนโลยีและสื่อสารการศึกษา(4ปี)</option>
                                            <option value='3002'>สาขาวิชาการวัดและประเมินทางการศึกษา(4ปี)</option>
                                            <option value='3003'>สาขาวิชาการศึกษาปฐมวัย(5ปี)</option>
                                            <option value='3004'>สาขาวิชาพลศึกษา(5ปี)</option>
                                            <option value='3005'>สาขาวิชาสังคมศึกษา(5ปี)</option>
                                            <option value='3006'>สาขาวิชาภาษาอังกฤษ(5ปี)</option>
                                            <option value='3007'>สาขาวิชาภาษาไทย(5ปี)</option>
                                            <option value='3008'>สาขาวิชาคณิตศาสตร์(5ปี)</option>
                                            <option value='3009'>สาขาวิชาวิทยาศาสตร์-ฟิสิกส์(5ปี)</option>
                                            <option value='3010'>สาขาวิชาวิทยาศาสตร์-เคมี(5ปี)</option>
                                            <option value='3011'>สาขาวิชาวิทยาศาสตร์-ชีววิทยา(5ปี)</option>
                                            <option value='3012'>สาขาวิชาศิลปศึกษา(5ปี)</option>

                                            <option>------------เทคโนโลยีและการพัฒนาชุมชน------------</option>
                                            <option value='3001'>สาขาวิชาเทคโนโลยีและสื่อสารการศึกษา(4ปี)</option>
                                            <option value='3002'>สาขาวิชาการวัดและประเมินทางการศึกษา(4ปี)</option>
                                            <option value='3003'>สาขาวิชาการศึกษาปฐมวัย(5ปี)</option>
                                            <option value='3004'>สาขาวิชาพลศึกษา(5ปี)</option>
                                            <option value='3005'>สาขาวิชาสังคมศึกษา(5ปี)</option>
                                            <option value='3006'>สาขาวิชาภาษาอังกฤษ(5ปี)</option>
                                            <option value='3007'>สาขาวิชาภาษาไทย(5ปี)</option>
                                            <option value='3008'>สาขาวิชาคณิตศาสตร์(5ปี)</option>
                                            <option value='3009'>สาขาวิชาวิทยาศาสตร์-ฟิสิกส์(5ปี)</option>
                                            <option value='3010'>สาขาวิชาวิทยาศาสตร์-เคมี(5ปี)</option>
                                            <option value='3011'>สาขาวิชาวิทยาศาสตร์-ชีววิทยา(5ปี)</option>
                                            <option value='3012'>สาขาวิชาศิลปศึกษา(5ปี)</option>

                                            <option>------------วิทยาการสุขภาพและการกีฬา------------</option>
                                            <option value='5001'>สาขาวิชาการแพทย์แผนไทย</option>
                                            <option value='5002'>สาขาวิชาวิทยาศาสตร์การกีฬา</option>
                                            <option value='5003'>สาขาวิชาสาธารณสุขศาสตร์</option>
                                            <option value='5004'>สาขาวิชาสุขศาสตร์อุตสาหกรรมและความปลอดภัย</option>

                                            <option>------------ศิลปกรรมศาสตร์------------</option>
                                            <option value='6001'>สาขาวิชาดุริยางคศาสตร์สากล</option>
                                            <option value='6002'>สาขาวิชาดุริยางคศาสตร์ไทย</option>
                                            <option value='6003'>สาขาวิชาทัศนศิลป์</option>
                                            <option value='6004'>สาขาวิชาศิลปะการออกแบบ</option>
                                            <option value='6005'>สาขาวิชาศิลปะการแสดง</option>

                                            <option>------------เศรษฐศาสตร์และบริหารธุรกิจ------------</option>
                                            <option value='7001'>สาขาเศรษฐศาสตร์</option>
                                            <option value='7002'>สาขาวิชาการบัญชี</option>
                                            <option value='7003'>สาขาวิชาบริหารธุรกิจบัณฑิต(การตลาด)</option>
                                            <option value='7004'>สาขาวิชาการประกอบการและการจัดการ</option>
                                            <option value='7005'>สาขาวิชาการจัดการธุรกิจการค้าสมัยใหม่</option>

                                            <option value="8101">------------นิติศาสตร์ วิทยาเขตสงขลา------------</option>

                                            <option value="8201">------------นิติศาสตร์ วิทยาเขตพัทลุง------------</option>

                                            <option>------------วิศวกรรมศาสตร์------------</option>
                                            <option value='8001'>สาขาวิชาวิศวกรรมยางและพอลิเมอร์</option>
                                            <option value='8002'>สาขาวิชาวิศวกรรมพลังงาน</option>
                                            <option value='8003'>สาขาวิชาวิศวกรรมเมคคาทรอนิกส์</option>
						                                	</select>
                                    </td></tr>
                                	<tr>
                                	  <td align="right">ปีที่เข้าศึกษา :
                                	    <select style="width:250px" class="cbb-200' id="startyear="startyear"" name="startyear" onchange="window.location='./index.php?module=search&lang=TH'+'&firstname='+document.profileform.firstname.value+'&lastname='+document.profileform.lastname.value+'&studentid='+document.profileform.studentid.value+'&startyear='+document.profileform.startyear.value+'&campus='+document.profileform.campus.value+'&faculty='+document.profileform.faculty.value+'&department='+document.profileform.department.value+'&major='+document.profileform.major.value+'&page=1';>
                                          <option value='9999'>ALL</option> 
                                	      <option value='10' >2510</option>
                                          <option value='11' >2511</option>
                                          <option value='12' >2512</option>
                                          <option value='13' >2513</option>
                                          <option value='14' >2514</option>
                                          <option value='15' >2515</option>
                                          <option value='16' >2516</option>
                                          <option value='17' >2517</option>
                                          <option value='18' >2518</option>
                                          <option value='19' >2519</option>
                                          <option value='20' >2520</option>
                                          <option value='21' >2521</option>
                                          <option value='22' >2522</option>
                                          <option value='23' >2523</option>
                                          <option value='24' >2524</option>
                                          <option value='25' >2525</option>
                                          <option value='26' >2526</option>
                                          <option value='27' >2527</option>
                                          <option value='28' >2528</option>
                                          <option value='29' >2529</option>
                                          <option value='30' >2530</option>
                                          <option value='31' >2531</option>
                                          <option value='32' >2532</option>
                                          <option value='33' >2533</option>
                                          <option value='34' >2534</option>
                                          <option value='35' >2535</option>
                                          <option value='36' >2536</option>
                                          <option value='37' >2537</option>
                                          <option value='38' >2538</option>
                                          <option value='39' >2539</option>
                                          <option value='40' >2540</option>
                                          <option value='41' >2541</option>
                                          <option value='42' >2542</option>
                                          <option value='43' >2543</option>
                                          <option value='44' >2544</option>
                                          <option value='45' >2545</option>
                                          <option value='46' >2546</option>
                                          <option value='47' >2547</option>
                                          <option value='48' >2548</option>
                                          <option value='49' >2549</option>
                                          <option value='50' >2550</option>
                                          <option value='51' >2551</option>
                                          <option value='52' >2552</option>
                                          <option value='53' >2553</option>
                                          <option value='54' >2554</option>
                                          <option value='55' >2555</option>
                                          <option value='56' >2556</option>
                                          <option value='57' >2557</option>
                                          <option value='58' >2558</option>
                                          <option value='59' >2559</option>
                                          <option value='60' >2560</option>
                                      </select></td>
                              	  </tr>   
                                </table>                     
                            </td>
                        </tr>
				  </table>-->

                    <!--<div class="buttonPane">
                        <div style="align-content:center" class="redbold14">*ในการค้นหาไม่ต้องใส่ข้อมูลให้ครบทุกช่อง&nbsp;<br />&nbsp;&nbsp;&nbsp;</div>
                    	<input type="hidden" name="module" value="search"></br>
                        <input type="submit" name="btnSubmit" class="btn" value="ค้นหาข้อมูล" />&nbsp;
                        <input type="button" name="btnClear" class="btn" value="ล้างข้อมูล" onclick="window.location='./search_alumni.php?module=search';" />&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/> 
                    </div>-->
                </form>
                <!--<div class="buttonPane">
                        <div style="align-content:center" class="redbold14">*ในการค้นหาไม่ต้องใส่ข้อมูลให้ครบทุกช่อง&nbsp;<br />&nbsp;&nbsp;&nbsp;</div>
                    	<input type="hidden" name="module" value="search"></br>
                        <input type="submit" name="btnSubmit" class="btn" value="ค้นหาข้อมูล" />&nbsp;
                        <input type="button" name="btnClear" class="btn" value="ล้างข้อมูล" onclick="window.location='./search_alumni.php?module=search';" />&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/> 
                    </div>-->
               <div id="themeFooter">
    </table>    
    <table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="40" class="title-list">ลำดับ</td>
    <td width="auto" class="title-list">รหัสนิสิต</td>
    <td width="auto" class="title-list">ชื่อ-สกุล</td>
    <td width="auto" class="title-list">สาขา</td>
    <td width="auto" class="title-list">คณะ</td>
	<td width="auto" class="title-list">จบการศึกษา</td>
    </tr>
    
<?php
    $name = $_POST['name'];
    $studentid = $_POST['studentid'];
    $faculty = $_POST['faculty'];
    $major = $_POST['major'];
	//echo $firstname;
	if($name!=""){
        $w1="std_name LIKE '$name%'";
    }else if($studentid!=""){
            $w1="std_id LIKE '$studentid%'";
    }else if($faculty!=""){
            $w1="faculty LIKE '$faculty%'";
    }else if($major!=""){
        $w1="major LIKE '$major%'";
    }else if($studentid!="" && $faculty=""){
        $w1="major LIKE '$studentid%' AND '$major%'";
    }
    else{
            $w1 = "1 ";
    }
    $sql="SELECT * FROM prepaststudent WHERE $w1";
    //$query = mysql_query($sql);
    $query =  mysqli_query($conn,$sql);
    //$totalrecord = mysqli_num_rows($query);
	
?>

<?php 

while ($row=mysqli_fetch_array($query)) {
$i++;
?>

<tr >
    <td height="25" align="center" valign="top" class="boderbottom-table"><?=$i;?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['std_id']; ?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['std_name']; ?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['major']; ?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['faculty']; ?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['graduation_term']; ?></td>
  </tr>  
 
	 
	 <?php
	}
?>
 </table>
	<script language="javascript">globalalert('');</script>
 
    </body>
</html>
<script type="text/JavaScript">
<!--
function submitform()
{
  document.profileform.submit();
}


//-->
</script>