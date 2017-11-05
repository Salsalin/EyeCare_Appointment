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
      $sql = "DELETE FROM registration WHERE patient_id=$patient_id";

            if (mysqli_query($conn, $sql)) {
                
                echo"<script>alert('Records deleted successfully')</script>";
                echo"<script>location.href='patient_report.php'</script>";	
			     echo "<meta http-equiv='refresh' content='0'>";
                
          } else {
           echo "Error deleting record: " . mysqli_error($conn);
          }

     mysqli_close($conn);
            
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