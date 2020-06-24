<?php include('header.php'); ?>
<div class="inner-banner"><img src="images/inner-banner.jpg" alt="img"></div>
    <!--Banner End--> 
  </header>
   <!--Main Start-->
 <div id="main" class="spacing"> 
    <section class="generic-heading-3">
      <div class="container">
        <h1>Contact Us</h1>
        <strong class="title-line"></strong> </div>
    </section>
    <!--Contact Page Start-->
    <section class="contact-page">
      <div class="contact-map">
        <div class="map_canvas active" style="margin-left:5%;margin-right:5%">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d242.94857825778152!2d77.59547522085752!3d13.024381845752197!3m2!1i1024!2i768!4f13.1!2m1!1sSun+Softronic+Systems%7C+%7C%2318%2F2%2CYES+Complex%2C+Opp+to+Navodaya+school%7C+%7CDinnur+main+Road%7CR.T.Nagar%7CBangalore%3A560032%7C!5e0!3m2!1sen!2sin!4v1434536715235" width="100%" height="400" frameborder="0" style="border:0"></iframe>
		</div>
      </div>
      
      <div class="contact-detail">
        <div class="container">
          <div class="row-fluid">
            <div class="span7">
              <form action="" method="post" class="contact-form">
                <h2>Contact Form</h2>
                <div class="form-box">
                  <div class="input-box-1">
                    <label>Name</label>
                    <input name="name" required pattern="[a-zA-Z ]+" type="text">
                  </div>
                  <div class="input-box-1">
                    <label>Email</label>
                    <input required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" name="email" type="text">
                  </div>
				  <div class="input-box-1">
                    <label>Phone No.</label>
                    <input required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" name="email" type="text">
                  </div>
                  
                  <div class="textarea-box">
                    <label>Message</label>
                    <textarea name="message" required cols="10" rows="10"></textarea>
                  </div>
                  <input name="" type="submit" value="Send Message">
                </div>
              </form>
            </div>
            <div class="span5">
              <address class="contact-address" >
              <strong>Contact Detail</strong>
              <div class="address-box"> <i class="fa fa-envelope-o"></i>
                <div class="text-box">
                  <p>Sun Softronic Systems</p>
				  <p>#18/2,YES Complex, Opp to Navodaya school</p>
                  <p>Dinnur main Road ,R.T.Nagar<br>Bangalore:56003</p>
                </div>
              </div>
              <div class="address-box"> 
                <div class="text-box">
                  <i class="fa fa-phone"></i>91 + 9035050684
                  
                </div>
              </div>
              <div class="social-box"> <strong>Connect with Us</strong>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
              </address>
            </div>
          </div>
        </div>
      </div><br><br><br>
    </section>
    <!--Contact Page End--> 
  
  <?php include('footer.php'); ?>
  <script>
  $('div.nav-collapse ul li').removeClass('active');
  $('div.nav-collapse ul li#7').addClass('active');
  $('div.nav-collapse ul li#t7').addClass('active');
  </script>