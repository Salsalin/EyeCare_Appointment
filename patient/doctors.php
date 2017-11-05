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
        <div class="wrapper_white">
    
              <?php require_once('header_appointment.php'); ?>                  
    <div class="container">
         <div class='container kids_content'>
         <div class='row'>
    <div class='col-md-12'>
                <?php
                        $sql="select * from doctors";
                        $result=mysqli_query($conn,$sql);
                        while($data=mysqli_fetch_array($result)){
                            $photo=$data['photo'];
                            $doctor_id=$data['doctor_id'];
                            $name=$data['name'];
                            $doctor_detail=$data['doctor_detail'];
                            $qualification=$data['qualification'];
                            $specialist=$data['specialist'];
                            $fee=$data['fee'];

                            echo"
                            <div class='doctor_img'>
                                <a href='doctor_detail.php?doctor_id=$doctor_id'>
                                    <img src='images/$photo' alt='there is a image'>
                                    </a>
                                        <p><strong> $name</strong></p>
                                        <p>$qualification</p>
                                        <p>$specialist</p>
                                        <p>Fee:$fee</p>
                                </div>			
                            ";
                        }
        ?>
        </div>
        </div>
        </div>
        
        
        
        
              </div>       
        <?php require_once('footer.php'); ?>
    </div>
    
    
    <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>