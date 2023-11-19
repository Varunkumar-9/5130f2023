 <?php include("aheader.php");?>

<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 18px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

</head>


  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
          <ol class="page-list">
            <li><a href="#"><i class="fa fa-home"></i> View Cars</a>
            <li>View Car Details</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

<br><br><br><br><br><br><br><br><br>

  <section class="search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-area">
            <h3 class="title">View Car Details</h3>
  


			<div class="row">
                <div class="col-lg-12 form-group">


<table id="customers" align="center">
  <tr>
    <th> Company&nbsp;Name</th>
    <th> Model</th>
<th> Price (Rs)</th>
      <th>Fuel&nbsp;Type</th>
      <th>Transmission&nbsp;Type</th>

	  <th> Seating&nbsp;Capacity</th>
      <th>Engine&nbsp;Capacity (CC)</th>
      <th>Mileage (kmpl)</th>
	        <th>Picture</th>
     
  </tr>
                 
                </div>
				</div>
	
				
             
      <?php 

error_reporting(0);


include("database.php");


	

$query="select *from car_details  ";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{

			?>


	<tr><td><strong><?php echo $r['car_company'] ?></strong></td>
		<td><strong><?php echo $r['car_model'] ?></strong></td>
        <td><strong><?php echo $r['car_price'] ?> </strong></td>
		<td><strong><?php echo $r["fuel_type"]?></strong></td>
   <td><strong><?php echo $r["transmsn_type"] ?></strong></td>
<td><strong><?php echo $r['seats'] ?> Seater(s)</strong></td>
<td><strong><?php echo $r['engine'] ?></strong></td>
  <td><strong><?php echo $r['mileage'] ?>  </strong></td>

<td><strong><img src="pictures/<?php echo $r["car_pic"]?>" width="100" height="100"></strong></td>

  


</tr>

<?php }} ?>


          </table>
              
             
          
          </div>
        </div>
      </div>
    </div>
  </section>
<br><br><br><br><br><br><br><br><br><br><br>

 <?php include("footer.php");?>