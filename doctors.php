<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
    <style>
        
.doctor_img h3{
    margin: 5px;
    font-size:14px;
}
        
 .btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
    letter-spacing: 1px;
    font-size: 17px;
     margin-left:50px;
}       

        
    </style>
</head>
<?php
        
		   session_start();
  		   $conn = mysqli_connect("localhost","root","","finalprojectdemo") ;
		   
  ?>
<body>
  <div class="container-fluid">
        <div class="wrapper_white">
    
              <?php require_once('header.php'); ?>                  
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
                             $location=$data['location'];

                            
                            $fee=$data['fee'];

                            echo"
                            <div class='doctor_img'>
                                    <img src='images/$photo' alt='there is a image'>
                                        <h3><strong> $name</strong></h3>
                                        <h3>$qualification</h3>
                                        <h3>$specialist</h3>
                                        <h3>Fee:$fee</h3>
                                        <a href='doctor_detail.php?doctor_id=$doctor_id' class='btn btn-info'>Details here..</a>
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