 <?php include("header.php"); 
 error_reporting(0);
						     
							  $msg1=$_GET['msg1'];
							 if($msg1=='fail')
							echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";

							$msg1=$_GET['msg'];
							 if($msg1=='done')
							echo "<script type='text/javascript'>alert('Registered Successfully, Login Here.');</script>";


			?>


 <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">login</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>login</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

     

 <section class="login-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="login-block text-center">
            <div class="login-block-inner">
              <h3 class="title">User Login </h3>
              <form class="login-form" action="userloginchk.php">
                
                
                <div class="frm-group">
                  <input type="text" name="uid" id="f-name" required placeholder="User ID">
                </div>
                <div class="frm-group">
                  <input type="password" name="pwd" id="pass" required placeholder="Password">
                </div>
                <div class="frm-group">
                  <input type="submit" value="login ">
                </div>
              </form>
              <!-- <p><a href="#0">Haven't your any account in here?</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 <?php include("footer.php"); ?>