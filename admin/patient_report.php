
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
             <div class="wrapper_white">
    <?php require_once('adminheader.php');?>
                  <div class="row">
                      <div class=" col-md-10 col-sm-offset-1">
                          <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                        <th class="col-xs-2">Customer Email</th>
                       
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Action</th>
                        </tr>
              
              <?php
                    
                        $sql="select * from registration where email!='admin@gmail.com'";
                        $result=mysqli_query($conn,$sql);
                        while($data=mysqli_fetch_array($result)){
                            
                            $patient_id=$data['patient_id'];
                           
                            $email=$data['email'];
                            $phone=$data['phone'];
                            $address=$data['address'];
                           
                        
                
                echo" 
                <tr>
                
                        <td>$email</td>
                       <td>$phone</td>
                        <td>$address</td>
                       
                       <td>
                       <a href='appointment_report.php?patient_id=$patient_id'>View |</a>   
                       <a href='appointment_delete.php?patient_id=$patient_id'> Delete</a>
                       
                      </td>
                        </tr>";
                            
                        }
              ?>
                
            
                     </table>
                    </div>
                      </div>        
                 </div>
                 
        <?php require_once('footer.php'); ?>           
                 
               </div>
            </div>   
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>