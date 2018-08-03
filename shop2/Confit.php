<? //ติดต่อ database

$db_hostname='localhost'; //ชื่อ host
$db_username='root'; //ชื่อ user เข้า db
$db_password=''; //กรอกรหัสผ่าน db
$db_name="Shop"; //ชื่อ db ที่เรา create ไว้
$conn=mysql_connect($db_hostname,$db_username,$db_password) or die("Unable to Connect"); // คอนเน็ตดาต้าเบส
mysql_select_db( $db_name ); //เลือก databas
mysql_query("SET NAMES TIS620"); 


?>