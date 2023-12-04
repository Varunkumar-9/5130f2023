 <?php include("uheader.php");?>



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
  <br><br><br><br><br><br><br><br><br>

 <section class="search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-area">
            <h3 class="title">Compare Cars</h3>
            <form class="car-search-form" action="compare_carlist.php" method="post">

 <div class="content-block">
                  <h3 class="title">First Car</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                    <select name="car_comp"  required>
                    <option value="">Select Car Company</option>
					<option value="Maruti">Maruti</option>
					<option value="Hyundai">Hyundai</option>
                    <option value="Honda">Honda</option>
					<option value="Renault">Renault</option>
					<option value="Ford">Ford</option>
					<option value="Toyota">Toyota</option>
					<option value="KIA">KIA</option>
					<option value="Tata">Tata</option>
							</select>

                    </div>
                    <div class="col-lg-6 form-group">
					
                <select name="car_model" required>
                    <option value="">Select Car Model</option>

					<?php 

error_reporting(0);


include("database.php");


	

$query="select *from car_details  ";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{

			?>
					<option value="<?php echo $r['car_model'] ?>"><?php echo $r['car_model'] ?></option>
					
<?php }} ?>
							</select>



                    
                    </div>
                  </div>
                </div>
			
			 <div class="content-block">
                  <h3 class="title">Second Car</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                    <select name="car_comp2" required>
                    <option value="">Select Car Company</option>
					<option value="Maruti">Maruti</option>
					<option value="Hyundai">Hyundai</option>
                    <option value="Honda">Honda</option>
					<option value="Renault">Renault</option>
					<option value="Ford">Ford</option>
					<option value="Toyota">Toyota</option>
					<option value="KIA">KIA</option>
					<option value="Tata">Tata</option>
							</select>

                    </div>
                    <div class="col-lg-6 form-group">
                <select name="car_model2" required>
                    <option value="">Select Car Model</option>

<?php 

$query="select *from car_details  ";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{

			?>
					<option value="<?php echo $r['car_model'] ?>"><?php echo $r['car_model'] ?></option>
					
<?php }} ?>

			
							</select>



                    
                    </div>
                  </div>
                </div>
              <div class="row">
               
			
              <button type="submit" class="cmn-btn btn-radius">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

       




 <?php include("footer.php");?>