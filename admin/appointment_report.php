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
    
              <?php require_once('adminheader.php'); ?>                  
    <div class="container">
        <div class='cl-md-6'>
               
    
                <?php

                          $patient_id=$_GET['patient_id'];
                          $sql="select * from apt where patient_id='$patient_id'";
                    
                      $result=mysqli_query($conn,$sql); 
                        while($data=mysqli_fetch_array($result)){
                            $name=$data['name'];
                            $date=$data['date'];
                            $time=$data['time'];
                            $description=$data['description'];
                     

                            echo"		
                                       <div class='appointment_doctor_design'>
                                        <p><strong>Doctor Name : </strong><br>$name</p>
                                        <p><strong>Date :</strong><br> $date </p>
                                        <p><strong>Time :</strong><br> $time </p>
                                         <p><strong>Description :</strong><br> $description </p>
                                        
                        
                            		</div>
                            ";
                        } 
                            
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