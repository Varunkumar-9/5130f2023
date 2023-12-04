<?php 
session_start();

?>
<?php
	

$uid=$_REQUEST['unm'];
$pwd=$_REQUEST['pass'];
	if($uid=="admin" && $pwd=="admin"){
		echo header("Location:adminhome.php");
	}
	else{
		echo header("Location:admin.php?msg1=fail");;
	
}
?>
</body>
</html>