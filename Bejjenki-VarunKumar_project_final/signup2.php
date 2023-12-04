<?php
			include("database.php");
	
                 $name = $_REQUEST["name"];
				 

				$uid= $_REQUEST["uid"];

				$pwd=$_REQUEST["pwd"];
				
      
				$email= $_REQUEST["email"];

				$contact=$_REQUEST["phno"];

				
				
               

				$sql1="select *from register where userid='$uid'";

				$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
				header("Location:signup.php?msg2=duplicate");
				
			}else{
				$q2 = "insert into register values('$name','$uid','$pwd','$email','$contact')";
				//echo $q2;
				

				if (mysqli_query($conn, $q2)) {
		
				header("Location:signin.php?msg=done");
				ob_end_flush();
				}

				else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
			}

?>
