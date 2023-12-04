 <?php include("aheader.php");?>


 <?php 
            error_reporting(0);

                 $msg=$_GET['msg'];

               if($msg=='done')
              echo "<script type='text/javascript'>alert('New Car Details Added Successfully');</script>";

            if($msg=='duplicate')
              echo "<script type='text/javascript'>alert('Car Model already available..!');</script>";
              
              //echo "Invalid Credentials";
            ?>


  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
          <ol class="page-list">
            <li><a href="#"><i class="fa fa-home"></i>Add Car Details</a></li>
            <li>Add New Car</li>
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
            <h3 class="title">Add Car Details</h3>
            <form class="car-search-form" action="addcar2.php" enctype="multipart/form-data" method="post">


			
              <div class="row">
                <div class="col-lg-12 form-group">
                  <select name="car_comp" required>
                    <option value="">Select Car Company</option>
					<option value="Maruti">Maruti</option>
					<option value="Hyundai">Hyundai</option>
                    <option value="Honda">Honda</option>
					<option value="Renault">Renault</option>
					<option value="Ford">Ford</option>
					<option value="Toyota">Toyota</option>
					<option value="KIA">Audi</option>
					<option value="Tata">Tata</option>
							</select>
				
			
                </div>
              </div>

			  	<div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon" type="text" name="car_model" required placeholder="Car Model">
                </div>
				</div>
              

			    	<div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon" type="number" name="car_price" required placeholder="Car Price">
                </div>
				</div>

				
              <div class="row">
                <div class="col-lg-12 form-group">
                  <select name="fuel_type" required>
                    <option value="">Select Fuel Type</option>
					<option value="Petrol">Petrol</option>
					<option value="Diesel">Diesel</option>
                    <option value="Electric">Electric</option>
				
							</select>
				
			
                </div>
              </div>


			    <div class="row">
                <div class="col-lg-12 form-group">
                  <select name="trans_type" required>
                    <option value="">Select Transmission Type</option>
					<option value="Manual">Manual</option>
					<option value="Automatic">Automatic</option>
				
							</select>
				
			
                </div>
              </div>
              


			 <div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon" type="number" name="seats" required placeholder="Seating Capacity (No. of Seaters)">
                </div>
				</div>


				
			  <div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon" type="number" name="cc" required placeholder="Engine Capacity (CC)">
                </div>
				</div>
              

			 <div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon" type="text" name="milg" required placeholder="Mileage (mpl)">
                </div>
				</div>

  <div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon"  type="text" name="merits" required placeholder="Merits">
                </div>
				</div>



  <div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon" type="text" name="demerits" required placeholder="DeMerits">
                </div>
				</div>


				  <div class="row">
                <div class="col-lg-12 form-group">
  
                  <input class="form-control has-icon"  type="file" name="file" required>
                </div>
				</div>



              <button type="submit" class="cmn-btn btn-radius">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

       




 <?php include("footer.php");?>