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
            <div class="span9 ">
              <form action="" method="post" class="contact-form" id="contact-form">
                <h2>Contact Form</h2>
                <div class="form-box">
                  <div class="input-box-1">
                    <label>Name</label>
                    <input name="name" required pattern="[a-zA-Z ]+" type="text">
                  </div>
                  <div class="input-box-1">
                    <label>Email</label>
                    <input id="email" name="email" type="text">
                  </div>
		  <div class="input-box-1">
                    <label>Phone No.</label>
                    <input maxlength="10" id="phoneno" name="phoneno" onkeypress='return isNumberKey(event)' type="text">
                  </div>
                  
                  <div class="textarea-box">
                    <label>Message</label>
                    <textarea name="message" required cols="10" rows="10"></textarea>
                  </div>
                  <input name="" type="submit" value="Send Message">
                </div>
              </form><br>
	      <div class="row"><div class="span12">
	      <div id="su_success" class="alert alert-success " style="display:none;">
	       <a href="#" class="close" data-dismiss="alert">&times;</a>
	       Your Query has been submitted successfully
	      </div>
	      <div id="er_danger" class="alert alert-danger " style="display:none;">
	       <a href="#" class="close" data-dismiss="alert">&times;</a>
	       Something Went wrong try again.
	      </div></div></div>
            </div>
           
          </div>
		  <address class="contact-address" >
              <strong>Contact Details</strong>
			  </address>
		  <div class="row">
		 
		   <div class="span4">
              <address class="contact-address" >
              <strong>INDIA</strong>
              <div class="address-box">
	     
	       <i class="fa fa-envelope-o"></i>
                <div class="text-box">
                  
				  <p>#19/3&4,YES Complex, <br>Opp to Navodaya school</p>
                  <p>Dinnur main Road ,R.T.Nagar<br>Bangalore:560032</p>
	
                 
                </div>
              </div>
              <div class="address-box"> <i class="fa fa-phone"></i>
                <div class="text-box">
                  <p>Phone: +918023530687</p>
                </div>
              </div>
	      
             
              </address>
            </div>
			<div class="span4">
              <address class="contact-address" >
              <strong>US</strong>
              
              
	      <div class="address-box">
	       <i class="fa fa-envelope-o"></i>
                <div class="text-box">
                  <p>No 92, Robert Treat Drive,<br>Milford 0640 Connecticut.</p><bR>
                 
                </div>
              </div>
	      <div class="address-box"> <i class="fa fa-phone"></i>
                <div class="text-box">
                  <p>Phone: +1-408-9216617</p>
                </div>
              </div>
             
              </address>
            </div>
			<div class="span4">
              <address class="contact-address" >
              <strong>Qatar</strong>
              
           
	      
             <div class="address-box">
	       <i class="fa fa-envelope-o"></i>
                <div class="text-box">
                  <p>#3, Building 20, Old Airport,<br>Near Oryx Rotana Hotel, Doha , Qatar.</p>
                 
		 
                </div> </div>
				<div class="address-box"> <i class="fa fa-phone"></i>
                <div class="text-box">
                  <p>Phone: +97470181111</p>
                </div>
              </div>
              
              </address>
            </div></div>
        </div>
      </div><br><br><br>
    </section>
    <!--Contact Page End--> 
  
  <?php include('footer.php'); ?>
  <script>
  function isValidEmail(emailText) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailText);
}
function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
     return false;
  return true;
}
  $('div.nav-collapse ul li').removeClass('active');
  $('div.nav-collapse ul li#7').addClass('active');
  $('div.nav-collapse ul li#t7').addClass('active');
  $('form#contact-form').submit(function(event) {
	  event.preventDefault();
	  var j="0";
	  var email=$('#email').val();
	  var phoneno=$('#phoneno').val();
	  if (email=="") { 
		alert("Enter Email"); j="1";
	    }else if (!isValidEmail(email)) { 
		alert("Enter Valid Email");j="1";
	    }else if(phoneno.length<"10")
		{
			alert("Enter Valid Phone No");j="1";
		}
		if(j=="0"){ 
		
	  
   $.ajax({
	   
                        type : 'POST',
                        url : 'phpmailer/sendmail.php',
                        data : $("#contact-form").serialize(),
                        success : function(result) {
    $("#contact-form").find("input[type=text], textarea").val("");
                            //if (result == 'true') {
                               $("#su_success").show();
                           // } else {
                           //    $("#er_danger").show();
                           // }
    
                        },
                        error : function() {
                           
    
                            alert("Try Again");
                        }
                    });
                    
		            return false;
		}
	    });
  </script>