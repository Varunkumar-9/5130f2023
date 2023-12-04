 <?php include("uheader.php");?>

<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:  #ff6699;
  color: white;
}
</style>
 <?php 
            error_reporting(0);

                 $msg=$_GET['msg'];

               if($msg=='done')
              echo "<script type='text/javascript'>alert('New Car Details Added Successfully');</script>";
              
        
            ?>


  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
          <ol class="page-list">
            <li><a href="#"><i class="fa fa-home"></i>Compare Cars</a></li>
                    <li>Compare Car Details</li>
          </ol>
        </div>
      </div>
    </div>
  </section>




       
  <section class="car-search-section pt-120 pb-120">
    <div class="container">
      
      <div class="row mt-70">
        <div class="col-lg-8">
          <div class="car-search-result-area grid--view row mb-none-30">

 <?php 

error_reporting(0);


include("database.php");

              $car_comp = $_REQUEST["car_comp"];
              
              $car_model = $_REQUEST["car_model"];
              
              $car_comp2 = $_REQUEST["car_comp2"];
                                
              $car_model2 = $_REQUEST["car_model2"];


?>

<table id="customers">
  


	<?php

$query="select *from car_details  where car_company='$car_comp' and  car_model='$car_model' ";

$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result)){
			$sts=true;
		while($r=mysqli_fetch_array($result))
			{
					$car_img=$r['car_pic'];

				$car_price=$r['car_price'];

				$fuel_type=$r['fuel_type'];

				$transmsn_type=$r['transmsn_type'];

				$seats=$r['seats'];

				$engine=$r['engine'];

				$mileage=$r['mileage'];

				$merits=$r['merits'];
				
				$demerits=$r['demerits'];

			}
}else{

	$sts=false;
}



$query2="select *from car_details  where car_company='$car_comp2' and  car_model='$car_model2'  ";

$result2 = mysqli_query($conn,$query2) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result2)){
				$sts2=true;
		while($r2=mysqli_fetch_array($result2))
			{
					$car_img2=$r2['car_pic'];
					
				$car_price2=$r2['car_price'];

				$fuel_type2=$r2['fuel_type'];

				$transmsn_type2=$r2['transmsn_type'];

				$seats2=$r2['seats'];

				$engine2=$r2['engine'];

				$mileage2=$r2['mileage'];

				$merits2=$r2['merits'];
				
				$demerits2=$r2['demerits'];

			}
}else{

	$sts2=false;
}


if ($sts && $sts2){
			?>



             <tr><td></td>

    <td align ="center" > <img src="pictures/<?php echo $car_img ?>" width="500" height="500"></td>
    <td align ="center" > <img src="pictures/<?php echo $car_img2 ?>" width="500" height="500"></td>
  </tr>

    <tr><td><strong>Company Name</strong></td><td><strong><?php echo $car_comp ?></strong></td><td><strong><?php echo $car_comp2 ?></strong></td></tr>
 


    <tr><td><strong>Model</strong></td><td><strong><?php echo $car_model ?></strong></td><td><strong><?php echo $car_model2 ?></strong></td></tr>

   <tr><td><strong>Price</strong></td><td><strong>$ <?php echo $car_price ?></strong></td><td><strong>$ <?php echo $car_price2 ?></strong></td></tr>

    <tr><td><strong>Fuel Type</strong></td><td><strong><?php echo $fuel_type ?></strong></td><td><strong><?php echo $fuel_type2 ?></strong></td></tr>


        <tr><td><strong>Transmission Type</strong></td><td><strong><?php echo $transmsn_type ?></strong></td><td><strong><?php echo $transmsn_type2 ?></strong></td></tr>


            <tr><td><strong>Seats Capacity</strong></td><td><strong><?php echo $seats ?> Seater(s)</strong></td><td><strong><?php echo $seats2 ?> Seater(s)</strong></td></tr>



            <tr><td><strong>Engine Capacity</strong></td><td><strong><?php echo $engine ?> CC</strong></td><td><strong><?php echo $engine2 ?> CC</strong></td></tr>




            <tr><td><strong>Mileage</strong></td><td><strong><?php echo $mileage ?> mpl</strong></td><td><strong><?php echo $mileage2 ?> mpl</strong></td></tr>



            <tr><td><strong>Merits</strong></td><td><strong><?php echo $merits ?> </strong></td><td><strong><?php echo $merits2 ?> </strong></td></tr>

                       <tr><td><strong>DeMerits</strong></td><td><strong><?php echo $demerits ?> </strong></td><td><strong><?php echo $demerits2 ?> </strong></td></tr>


           <!-- car-item end -->
           <?php 



		   
		   } else{?>
			   
			  <center> <font color="red" size="+2"> No Records Found</font> </center>
			   
			   
			   
		 <?php  }?>
            
         </table>   

          </div>
          
        </div>
       <!-- widget end -->
            
          </aside>
        </div>
      </div>
    </div>
  </section>



 <?php include("footer.php");?>