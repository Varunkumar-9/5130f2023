<?php 
session_start();

?>
<?php
 include("database.php");
	

$uid=$_REQUEST['uid'];

$_SESSION['uid']=$uid;

$pwd=$_REQUEST['pwd'];

	$query="select *from register where userid='$uid' and passwrd='$pwd'";
	
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));
	
	if(mysqli_num_rows($result)){
		echo header("Location:userhome.php");
	}
	else{
		echo header("Location:signin.php?msg1=fail");;
	
}
?>
</body>
</html>