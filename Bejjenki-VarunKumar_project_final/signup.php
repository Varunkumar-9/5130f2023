 <?php include("header.php"); 
 


  error_reporting(0);
						     
							  $msg1=$_GET['msg2'];
							 if($msg1=='duplicate')
							echo "<script type='text/javascript'>alert('User Id alread exists..!');</script>";

 
 ?>



			


 <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Create New Account</h2>
          <ol class="page-list">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li>Registration</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

     

<section class="registration-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="registration-block text-center">
            <div class="registration-block-inner">
              <h3 class="title">create  your account</h3>
              <form class="registration-form" action="signup2.php">
                <div class="frm-group">
                  <input type="text" name="name" id="f-name" placeholder="Name" required>
                </div>
				<div class="frm-group">
                  <input type="text" name="uid" id="website" placeholder="User Id" required>
                </div>
                <div class="frm-group">
                  <input type="password" name="pwd" id="pass" placeholder="Password" required>
                </div>
                <div class="frm-group">
                  <input type="email" name="email" id="name" placeholder="Email Id" required>
                </div>
                <div class="frm-group">
                  <input type="text" name="phno"  pattern="[0-9]{10,10}" id="website" placeholder="Contact Number" required>
                </div>
				
		
                
                <div class="frm-group">
                  <input type="submit" value="create new account">
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <?php include("footer.php"); ?>