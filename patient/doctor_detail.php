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

    <?php
           session_start();
  		   $conn = mysqli_connect("localhost","root","","finalprojectdemo") ;
    ?>   
    
    
<body>
  <div class="container-fluid">
        <div class="wrapper_white" >
    
              <?php require_once('header_appointment.php'); ?>                  
    <div class="container">
        <div class='cl-md-6'>
               
    
                <?php
                          $doctor_id=$_GET['doctor_id'];
                         $sql = "SELECT * FROM doctors WHERE doctor_id=$doctor_id";
                            $result=mysqli_query($conn,$sql);
                         $data=mysqli_fetch_array($result);
                           $photo=$data['photo'];
                            $doctor_id=$data['doctor_id'];
                            $name=$data['name'];
                            $doctor_detail=$data['doctor_detail'];
                            $mobile=$data['mobile'];
                            $qualification=$data['qualification'];
                            $specialist=$data['specialist'];
                             $day=$data['day'];
                            $start_time=$data['start_time'];
                            $end_time=$data['end_time'];                             
                            $fee=$data['fee'];

                            echo"
                    <div class='row'>
                             <div class='col-sm-4 text-center' >
                                <strong>$name</strong><br>
                            
                                 <div class='doctor_img'>
                                <img src='images/$photo'>
                                </div>
                                </div>
                                <div class='col-sm-6'>
                                  <strong>About Doctor:<br></strong>$doctor_detail<br>
                                 <strong>Qualification:<br></strong>$qualification<br>
                                  <strong>Specialist:<br></strong>$specialist<br>
                                   <strong>Contact Number:<br></strong>$mobile<br>
                                   <strong>Visiting Days:<br></strong>$day<br>
                                  <strong>Working Hour:<br></strong>$start_time - $end_time<br>
                                  <strong>Fees:<br></strong>$fee<br><br><br>	
                                <a href='book_appointment.php' class='btn btn-info'>Book Appointment</a>
                                  </div>
                                  </div>
                            ";
                            
        ?> 
        </div>
        
            </div>
            <?php require_once('footer.php'); ?>
              </div>      
    </div>
    
    
    <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>