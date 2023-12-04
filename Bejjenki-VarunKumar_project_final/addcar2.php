<?php
			include("database.php");
	
                 $car_comp = $_REQUEST["car_comp"];
				 

				$car_model= $_REQUEST["car_model"];

				$car_price=$_REQUEST["car_price"];
				
				$fuel_type= $_REQUEST["fuel_type"];

				$trans_type=$_REQUEST["trans_type"];


				$seats= $_REQUEST["seats"];

				$cc=$_REQUEST["cc"];
				
				$milg= $_REQUEST["milg"];

				$merits=$_REQUEST["merits"];

				$demerits=$_REQUEST["demerits"];

				$target_dir = "pictures/";
				$target_file = $target_dir . basename($_FILES["file"]["name"]);
				$img=basename($_FILES["file"]["name"]);
				
				
               

				$sql1="select *from car_details where car_company='$car_comp' and car_model='$car_model' ";

				$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
				header("Location:add_car.php?msg=duplicate");
				
			}else{



if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {



				$q2 = "insert into car_details(car_company,car_model,car_price,fuel_type,transmsn_type,seats,engine,mileage,merits,demerits,car_pic) values('$car_comp','$car_model','$car_price','$fuel_type','$trans_type','$seats','$cc','$milg','$merits','	$demerits','$img')";
	

				if (mysqli_query($conn, $q2)) {
		
				header("Location:add_car.php?msg=done");
				ob_end_flush();
				}

				else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
			}

		}

?>
