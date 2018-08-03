//diaplay data form database beta
<?php
    error_reporting(E_ALL & ~E_NOTICE);
    $hostname_crm = "localhost";
    $database_crm = "alumni";
    $username_crm = "root";
    $password_crm = "";+
    $crm = mysqli_connect($hostname_crm, $username_crm,$password_crm,$database_crm) or trigger_error(mysql_error(),E_USER_ERROR); 
    mysqli_set_charset($crm,'utf8');
    $conn=mysqli_connect($hostname_crm,$username_crm,$password_crm,$database_crm);
	//$db=mysqli_select_db($conn,$database_crm);
	mysqli_set_charset($conn,'utf8');
	$r = "SELECT * FROM prepaststudent";
	$t = mysqli_query($conn,$r);
?>
    <table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="45" class="title-list">ลำดับ</td>
    <td width="auto" class="title-list">รหัสนิสิต</td>
    <td width="auto" class="title-list">ชื่อ-สกุล</td>
    <td width="auto" class="title-list">สาขา</td>
    <td width="auto" class="title-list">คณะ</td>
	<td width="auto" class="title-list">จบการศึกษา</td>
    </tr>
    
<?php
    //$name = $_POST['name'];
    //$studentid = $_POST['studentid'];
    //$faculty = $_POST['faculty'];
    //$major = $_POST['major'];
	//echo $firstname;
	/*if($name!=""){
        $w1="std_name LIKE '%$name%'";
    }else if($studentid!=""){
            $w1="std_id LIKE '%$studentid%'";
    }else if($faculty!=""){
            $w1="std_faculty LIKE '%$faculty%'";
    }else if($major!=""){
        $w1="std_major LIKE '%$major%'";
    }
    else{
            $w1 = "1";
    }*/
   $sql="SELECT * FROM prepaststudent WHERE std_major LIKE 'วิทยาศาสตร์'";
    //$sql="SELECT * FROM prepaststudent";
    //$query = mysql_query($sql);
    $query =  mysqli_query($conn,$sql);
    //$totalrecord = mysqli_num_rows($query);

//$row=mysqli_fetch_array($query);
while ($row=mysqli_fetch_array($query)) {
$a++;

?>

<!--<tr>
    <td height="25" align="center" valign="top" class="boderbottom-table"><?=$a;?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['std_id'];?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['std_name'];?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['major'];?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['faculty'];?></td>
    <td valign="top" class="boderbottom-table">&nbsp;<?=$row['graduation_term'];?></td>
  </tr>
  </table>-->
 	 
<?php
	}
?>