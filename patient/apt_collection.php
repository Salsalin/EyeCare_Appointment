<html>
    
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
    $conn = mysqli_connect("localhost","root","","finalprojectdemo");
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
                        $patient_id=$_SESSION['patient_id'];
                        $sql="select * from apt where patient_id='$patient_id'";
                    
                      $result=mysqli_query($conn,$sql); 
                        while($data=mysqli_fetch_array($result)){
                            $name=$data['name'];
                            $date=$data['date'];
                            $time=$data['time'];
                     

                            echo"		
                                       <div class='appointment_doctor_design'>
                                        <h5><strong>Name : $name</strong></h5>
                                        <p>Date : $date </p>
                                        <p>Time : $time </p>
                        
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