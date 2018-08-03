<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>ระบบฐานข้อมูลศิษย์เก่า มหาวิทยาลัยทักษิณ</title>
        <script>
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('txt').innerHTML =
			h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
			if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			return i;
		}
		</script>
    </head>
    <script language="javascript" src="includes/jquery-1.8.2.min.js"></script>
    <script language="javascript" src="includes/function.min.js"></script>
    <body>
        <div class = "header" align="center">
        <td><a href="main.html"><img src="pic/logov2.png" height="85%" width="85%"></a></td>
            <!--<tr></tr>-->
             <!--<tr><center><h1>ระบบฐานข้อมูลศิษย์เก่า มหาวิทยาลัยทักษิณ</h1></center></tr>-->
         <tr><center><h3>==> ยินดีตอนรับศิษย์เก่าทุกท่าน มหาวิทยาลัยทักษิณ <==</h3></center></tr>
         </div>
            <div class="maxwrap">
            <nav align="right"><a href="#" class="leftnav">ลงทะเบียน</a> &nbsp; | &nbsp;<a href="post-login.php" class="leftnav">เข้าสู่ระบบ</a>&nbsp;&nbsp;</nav>
            <nav align="left"><a href="search_alumni.php" class="leftnav">ค้นหา</a> &nbsp; | &nbsp;<a href="file/manual.pdf" class="leftnav">คู่มือการใช้งาน</a>&nbsp;&nbsp;</nav></div>
    <!--<div class='wrap-inactive' style='width: 80px'; onMouseOver="this.className='wrap-inactive'" onMouseOut="this.className='wrap-inactive'"><a href='search_alumni.php'>ค้นหา</a></div>
    <div class='wrap-inactive' style='width: 120px'; onMouseOver="this.className='wrap-inactive'" onMouseOut="this.className='wrap-inactive'"><a href='href="file/manual.pdf'>คู่มือการใช้งาน</a></div>-->
    <div class='wrap-inactive' style='width: px'; 
    onMouseOver="this.className='wrap-inactive'" onMouseOut="this.className='wrap-inactive'"><a href='./index.php?module='></a></div>
         </div><br />
       <div id="themeWrapper">
            <center><Font color="0033FF">ลงทะเบียน </Font></center>
                <div class="container">
<table width='100%' cellpadding='2' cellspacing='2'><tr><td align='center' colspan='2' class='pageSubHeader'><font color="FF0000"></font><marquee>กรุณากรอกข้อมูลในช่องที่มีเครื่องหมาย *</marquee></font></td></tr>
    <tr><td colspan='2'><form enctype='multipart/form-data' name='regist' id='regist' action='./index.php?module=register' method='post'>
    <tr><td align='right' width='50%'>*วิทยาเขต : 
    </td><td align='left' width='60%'><select name='campus_id' style="width:320px" onchange="window.location='./index.php?module=search&lang=TH'+'&firstname='+document.profileform.firstname.value+'&lastname='+document.profileform.lastname.value+'&studentid='+document.profileform.studentid.value+'&startyear='+document.profileform.startyear.value+'&campus='+document.profileform.campus.value+'&faculty='+document.profileform.faculty.value+'&department='+document.profileform.department.value+'&major='+document.profileform.major.value+'&page=1';">
        <option value='10' >วิทยาเขตสงขลา</option>
        <option value='20' >วิทยาเขตพัทลุง</option>
        </option><option value='' selected='selected'>เลือกวิทยาเขต</option></select></td>
        </tr>
        <tr><td align='right'>*คณะ : </td><td align='left'>
        <select name='fac_id' style="width:320px" onchange="window.location='./index.php?module=register'+'&campus='+document.regist.CAMPUS_ID.value+'&faculty='+document.regist.FAC_ID.value+'&department='+document.regist.DEPT_ID.value+'&major='+document.regist.MAJOR_ID.value">
        <option value='' selected='selected'>เลือกคณะ</option>
        <option value='10'>มนุษยศาสตร์และสังคมศาสตร์</option>
        <option value='20'>วิทยาศาสตร์</option>
        <option value='30'>ศึกษาศาสตร์</option>
        <option value='40'>เทคโนโลยีและการพัฒนาชุมชน</option>
        <option value='50'>วิทยาการสุขภาพและการกีฬา</option>
        <option value='60'>ศิลปกรรมศาสตร์</option>
        <option value='70'>เศรษฐศาสตร์และบริหารธุรกิจ</option>
        <option value='81'>นิติศาสตร์</option>
        <option value='82'>นิติศาสตร์</option>
        <option value='90'>วิศวกรรมศาสตร์</option>
        <!--<option value='95'>พยาบาลศาสตร์</option>
        </select>--></td></tr>
        <!--<tr><td align='right'>*ภาควิชา : </td><td align='left'><select name='DEPT_ID' onchange="window.location='./index.php?module=register'+'&campus='+document.regist.CAMPUS_ID.value+'&faculty='+document.regist.FAC_ID.value+'&department='+document.regist.DEPT_ID.value+'&major='+document.regist.MAJOR_ID.value"><option value='XXX' selected='selected'>ไม่ระบุภาควิชา</option></select></td></tr>-->
        <tr><td align='right'>*สาขา : </td><td align='left'><select name='major_id' style="width:320px" onchange="window.location='./index.php?module=register'+'&campus='+document.regist.CAMPUS_ID.value+'&faculty='+document.regist.FAC_ID.value+'&department='+document.regist.DEPT_ID.value+'&major='+document.regist.MAJOR_ID.value">
            <option value='' selected='selected'>เลือกสาขาวิชา</option>

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
            <option value='4001'>สาขาวิชาวิทยาศาสตร์และเทคโนโลยีอาหาร</option>
            <option value='4002'>สาขาวิชาสัตวศาสตร์</option>
            <option value='4003'>สาขาวิชาเกษตรศาสตร์</option>
            <option value='4004'>สาขาวิชาเทคโนโลยีการเกษตรและการพัฒนาชุมชน</option>

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
            
        </select></td></tr>
        <tr><td align='right'>*รหัสนิสิต : </td><td align='left'><input type='text' name='student_id' id='student_id' width='30'></td></tr>
        <tr><td align='right'>*ระดับการศึกษา : </td><td align='left'><select style="width:320px" name='study_class'>
            <option value='' selected='selected'>เลือกระดับการศึกษา</option>
            <option value='03' >ประกาศนียบัตรบัณฑิต</option>
            <option value='02' >ประกาศนียบัตรบัณฑิตชั้นสูง</option>
            <option value='08' >ประกาศนียบัตรสูงกว่าปริญญาตรี</option>
            <option value='06' >ปริญญาตรี</option>
            <option value='99' >ปริญญาตรีต่อเนื่อง 2 ปี</option>
            <option value='01' >ปริญญาเอก</option>
            <option value='04' >ปริญญาโท</option>
            <option value='07' >อนุปริญญา</option>
            <option value='XX' >ไม่ระบุ</option>
            <tr><td align='right'>*รหัสประชาชน : </td><td align='left'><input type='text' name='CITIZEN_ID' id='citizen_id' width='30'></td></tr>
            <tr><td align='right'>*คำนำหน้าตอนเรียน : </td>
                <td align='left'><select style="width:320px" name='TITLE_ID'>
                    <option value='' selected='selected'>กรูณาเลือก</option>
                    <option value='97' >Dr.</option>
                    <option value='50' >MISS</option>
                    <option value='49' >MR.</option>
                    <option value='51' >MRS.</option>
                    <option value='63' >MS.</option>
                    <option value='92' >PHRA</option>
                    <option value='04' >จ่าสิบตรี</option>
                    <option value='87' >จ่าสิบตรีหญิง</option>
                    <option value='54' >จ่าสิบตำรวจ</option>
                    <option value='90' >จ่าสิบตำรวจหญิง</option>
                    <option value='05' >จ่าสิบเอก</option>
                    <option value='82' >จ่าสิบเอกหญิง</option>
                    <option value='70' >จ่าอากาศเอก</option>
                    <option value='19' >จ่าเอก</option>
                    <option value='80' >ดาบตำรวจ</option>
                    <option value='95' >ทันตแพทย์</option>
                    <option value='96' >ทันตแพทย์หญิง</option>
                    <option value='03' >นาง</option>
                    <option value='02' >นางสาว</option>
                    <option value='01' >นาย</option>
                    <option value='59' >นายดาบตำรวจ</option>
                    <option value='43' >นายแพทย์</option>
                    <option value='32' >นาวาตรี</option>
                    <option value='33' >นาวาตรีหญิง</option>
                    <option value='56' >นาวาอากาศตรี</option>
                    <option value='65' >นาวาอากาศตรีหญิง</option>
                    <option value='94' >นาวาอากาศเอก</option>
                    <option value='72' >นาวาอากาศโท</option>
                    <option value='73' >นาวาเอก</option>
                    <option value='42' >นาวาโท</option>
                    <option value='68' >พระ</option>
                    <option value='83' >พระครู</option>
                    <option value='62' >พระมหา</option>
                    <option value='88' >พระอธิการ</option>
                    <option value='75' >พลโท</option>
                    <option value='85' >พันจ่าอากาศเอก</option>
                    <option value='38' >พันจ่าเอก</option>
                    <option value='74' >พันจ่าเอกหญิง</option>
                    <option value='52' >พันจ่าโท</option>
                    <option value='28' >พันตรี</option>
                    <option value='29' >พันตรีหญิง</option>
                    <option value='12' >พันตำรวจตรี</option>
                    <option value='13' >พันตำรวจตรีหญิง</option>
                    <option value='16' >พันตำรวจเอก</option>
                    <option value='17' >พันตำรวจเอกหญิง</option>
                    <option value='14' >พันตำรวจโท</option>
                    <option value='15' >พันตำรวจโทหญิง</option>
                    <option value='40' >พันเอก</option>
                    <option value='30' >พันโท</option>
                    <option value='31' >พันโทหญิง</option>
                    <option value='22' >ร้อยตรี</option>
                    <option value='23' >ร้อยตรีหญิง</option>
                    <option value='06' >ร้อยตำรวจตรี</option>
                    <option value='07' >ร้อยตำรวจตรีหญิง</option>
                    <option value='10' >ร้อยตำรวจเอก</option>
                    <option value='11' >ร้อยตำรวจเอกหญิง</option>
                    <option value='08' >ร้อยตำรวจโท</option>
                    <option value='09' >ร้อยตำรวจโทหญิง</option>
                    <option value='26' >ร้อยเอก</option>
                    <option value='27' >ร้อยเอกหญิง</option>
                    <option value='24' >ร้อยโท</option>
                    <option value='25' >ร้อยโทหญิง</option>
                    <option value='69' >ว่าที่พันตรี</option>
                    <option value='64' >ว่าที่พันตำรวจตรี</option>
                    <option value='61' >ว่าที่พันตำรวจตรีหญิง</option>
                    <option value='67' >ว่าที่พันตำรวจเอก</option>
                    <option value='45' >ว่าที่พันตำรวจโท</option>
                    <option value='20' >ว่าที่ร้อยตรี</option>
                    <option value='21' >ว่าที่ร้อยตรีหญิง</option>
                    <option value='39' >ว่าที่ร้อยตำรวจตรี</option>
                    <option value='57' >ว่าที่ร้อยตำรวจเอก</option>
                    <option value='48' >ว่าที่ร้อยตำรวจโท</option>
                    <option value='78' >ว่าที่ร้อยตำรวจโทหญิง</option>
                    <option value='89' >ว่าที่ร้อยเอกหญิง</option>
                    <option value='37' >ว่าที่ร้อยโท</option>
                    <option value='55' >ว่าที่ร้อยโทหญิง</option>
                    <option value='60' >ว่าที่เรือตรี</option>
                    <option value='41' >สิบตำรวจตรี</option>
                    <option value='84' >สิบตำรวจตรีหญิง</option>
                    <option value='91' >สิบตำรวจเอก</option>
                    <option value='81' >สิบตำรวจเอกหญิง</option>
                    <option value='47' >สิบตำรวจโท</option>
                    <option value='58' >สิบตำรวจโทหญิง</option>
                    <option value='18' >สิบเอก</option>
                    <option value='93' >สิบโท</option>
                    <option value='36' >หม่อมราชวงศ์</option>
                    <option value='35' >หม่อมหลวง</option>
                    <option value='86' >เรือตรี</option>
                    <option value='79' >เรืออากาศตรี</option>
                    <option value='46' >เรืออากาศเอก</option>
                    <option value='34' >เรืออากาศเอกหญิง</option>
                    <option value='71' >เรืออากาศโทหญิง</option>
                    <option value='76' >เรือเอก</option>
                    <option value='53' >เรือเอกหญิง</option>
                    <option value='66' >เรือโท</option>
                    <option value='44' >แพทย์หญิง</option>
                    <option value='00' >ไม่ระบุคำนำหน้า </option>
                </select></td></tr>
                <tr><td align='right'>*ชื่อตอนเรียน (ไทย) : </td>
                <td align='left'><input type='text' name='FIRSTNAME_THAI' id='firstname_th' width='30'> <input type='text' name='LASTNAME_THAI' id='lastname_th' width='30'></td></tr>
                <tr><td align='right'>*ชื่อตอนเรียน(อังกฤษ) : </td>
                <td align='left'><input type='text' name='FIRSTNAME_ENG' id='firstname_en' width='30' > <input type='text' name='LASTNAME_ENG' id='lastname_en' width='30'></td></tr><tr>
                <tr><td align='right'>*เพศ : </td>
                <td align='left'><select name='GENDER_ID'><option value='M' >ชาย</option><option value='F' >หญิง</option></select></td></tr>
                <tr><td align='right'>*E-MAIL  : </td>
                <td align='left'><input type='text' name='EMAIL' id='email' width='30'></td></tr>
                <tr><td align='right'>*เบอร์โทรศัพท์  : </td>
                <td align='left'><input type='text' name='TELEPHONE' width='30'></td></tr>
                <tr>
                        <td align="right" height="25">สถานะ:&nbsp;</td>
                        <td id="bor">
                            <br /><br />
                            &nbsp;<input type="radio"  id="status" name="status" value="unemployed" onClick="education(this.value);" />&nbsp;ว่างงาน&nbsp;
                            &nbsp;<input type="radio"  id="status" name="status" value="study" onClick="education(this.value);" />&nbsp;ศึกษาต่อ&nbsp;
                            &nbsp;<input type="radio"  id="status" name="status" value="work" onClick="work(this.value);" />&nbsp;ทำงาน&nbsp;
                            &nbsp;<input type="radio"  id="status" name="status" value="studyandwork" onClick="edu_work(this.value);" />&nbsp;ศึกษาต่อและทำงาน&nbsp;
                            <br /><br />
                            <span id="txtHint1"><span id="txtHint1"><br />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" height="25">ช่วงเงินเดือน:&nbsp;</td>
                        <td align="left" id="bor">
                            <br />
                            &nbsp;<input type="radio" id="price" name="price" value="301 " />&nbsp;ต่ำกว่า 15,000 บาท<!--&nbsp;   
                            &nbsp;โปรดระบุ&nbsp;<input type="text" name="price1" id="price1" size="15" />&nbsp;บาท&nbsp;--><br />
                            &nbsp;<input type="radio" id="price" name="price" value="302" />&nbsp;15,000 - 20,000 บาท&nbsp;<br />
                            &nbsp;<input type="radio" id="price" name="price" value="303" />&nbsp;20,000 - 25,000 บาท&nbsp;<br />
                            &nbsp;<input type="radio" id="price" name="price" value="304" />&nbsp;25,000 - 30,000 บาท&nbsp;<br />
                            &nbsp;<input type="radio" id="price" name="price" value="305" />&nbsp;30,000 - 35,000 บาท&nbsp;<br />
                            &nbsp;<input type="radio" id="price" name="price" value="306" />&nbsp;35,000 - 40,000 บาท&nbsp;<br />
                            &nbsp;<input type="radio" id="price" name="price" value="307" />&nbsp;40,000 - 45,000 บาท&nbsp;<br />
                            &nbsp;<input type="radio" id="price" name="price" value="308" />&nbsp;45,000 - 50,000 บาท&nbsp;<br />
                            &nbsp;<input type="radio" id="price" name="price" value="309" />&nbsp;มากกว่า 50,000 บาท<!--&nbsp;   
                            &nbsp;โปรดระบุ&nbsp;<input type="text" name="price2" id="price2" size="15" />&nbsp;บาท&nbsp;-->
                            <br /><br />
                        </td>
                    </tr>
        <tr><td colspan='2' align='center'><br/></a></td></tr></table></form></td></tr></table></div>

        <br><center><button onClick = > ส่งข้อมูลเพื่อทำการตรวจสอบ </button>
        <button onClick ="window.location='./register.php?module=search';" > ล้างข้อมูล </button></center></br>       
        
   
    </div>
<div id="themeFooter">
  <div class="wrap blackbold14">
    <table width="100%" border="0">
      <tr>
        <?php 
         include(conn.php);

        ?>
    </table>
    </div>
    
	   
    </body>
</html>
