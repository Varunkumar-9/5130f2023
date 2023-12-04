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
  <br><br><br><br><br><br><br><br><br>

 <section class="search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-area">
            <h3 class="title">Search</h3>
            <form class="car-search-form" action="search_carlist.php" method="post">


			
              <div class="row">
                <div class="col-lg-12 form-group">
                  <select name="budget" required>
                    <option value="">Select Car Budget</option>
					<option value="15000-20000">15k-20k</option>
					<option value="20000-30000">20k-30k</option>
                    <option value="30000-35000">30k-35k</option>
					<option value="35000-40000">35k-40k</option>
					<option value="40000-50000">40k-45k</option>
	
							</select>
				
			
                </div>
              </div>

			



              <button type="submit" class="cmn-btn btn-radius">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

       




 <?php include("footer.php");?>