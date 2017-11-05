    

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
    
<body>
  <div class="container-fluid">
        <div class="wrapper_white">
    
              <?php require_once('adminheader.php'); ?>                  
    <div class="container">
            <!--sliderpart start here -->
                <div id="my_carousel" class="carousel slide" data-ride="carousel">
                     <!-- slide Indicators start -->
                    <ol class="carousel-indicators">
                        <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my_carousel" data-slide-to="1"></li>
                        <li data-target="#my_carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- slide Indicators stop -->
                  <!-- Image & content of slider start -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/specialtycontactfitting-slideshow.jpg" alt="slider1" class="img-responsive">
                    
                        </div>
                        <div class="item">
                            <img src="images/frame.png" alt="slider2">
                    
                        </div>
                        
                          <div class="item">
                            <img src="images/girl with alphabet.jpg" alt="slider3">
                    
                        </div>
                        
                   </div>
                <!-- Image & content of slider stop -->
                  <!-- left right controls start -->
                      <a class="left carousel-control" href="#my_carousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#my_carousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  <!-- left right controls start -->  
                </div>
                </div>
                 <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="box">
                            <h4 style="margin-left:2px;margin-top:0px;">Book Online Appointments</h4>
                         <p style="font-size:12px;">Our motto "delevering a million miles" means we keep customers at the center of all our decisions.This customer focus has helped in delivering exceptional value to our clients and has made us the logistics partner of choice for some of the most trusted brands in Banagladesh. </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="box">
                         <h4 style = "text-align:center;">About Us</h4>
            <p style="font-size:12px;">Online Eye Care Appointment is the leader in eye care delivery system being at the forefront of vision care technology revolution having state of the art specialized ophthalmic care,  treatment & surgery with one-stop mall for eye care products. </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="box">
                    <h4 style = "text-align:center;">Our Doctors</h4>
            <p style="font-size:12px;">Online Eye Care Appointment is staffed by highly qualified ophthalmologist who are carefully selected for their character, competence and compassion.
and who are  professors, teachers and mentors in the country's top universities. </p>
                        </div>
                    </div>
                </div>
                     <h3>Welcome To Eye Care Appointment System</h3>
            </div>
                     
        <?php require_once('footer.php'); ?>
              </div>
    </div>
    
    
    <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>