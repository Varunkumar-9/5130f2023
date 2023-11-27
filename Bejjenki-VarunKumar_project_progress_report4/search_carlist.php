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
            <li><a href="#"><i class="fa fa-home"></i>Search Cars</a></li>
            <li>Search Car Details</li>
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

              $budget = $_REQUEST["budget"];

			   $cp = explode("-",$budget);





	

$query="select *from car_details  where car_price between '$cp[0]' and '$cp[1]' ";

$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));

if(mysqli_num_rows($result)){
		
		while($r=mysqli_fetch_array($result))
			{

			?>
            
            <div class="col-md-6 col-12">
              <div class="car-item">
                <div class="thumb bg_img" data-background="pictures/<?php echo $r["car_pic"]?>"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title"><?php echo $r['car_model'] ?></h4>
                    <span class="price">Rs.<?php echo $r['car_price'] ?></span>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i><?php echo $r['car_company'] ?></li>
                      <li><i class="fa fa-tachometer"></i><?php echo $r['mileage'] ?>kmpl</li>
                      <li><i class="fa fa-sliders"></i><?php echo $r["transmsn_type"] ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
           <?php }
		  
		   
		   
		   } else{?>
			   
			  <center> <font color="red" size="+2"> No Records Found</font> </center>
			   
			   
			   
		 <?php  }?>
            
            
          </div>
          
        </div>
       <!-- widget end -->
            
          </aside>
        </div>
      </div>
    </div>
  </section>



 <?php include("footer.php");?>