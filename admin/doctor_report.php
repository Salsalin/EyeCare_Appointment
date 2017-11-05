
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
                    <table class="table table-bordered table-striped table-condensed">
                        <tr>
                        <th class="col-xs-2">Image</th>
                       <th>Title</th>
                        <th>Mobile</th>
                        <th>Specialist</th>
                        <th>Action</th>
                        </tr>
              
              <?php
                    
                        $sql="select * from doctors";
                        $result=mysqli_query($conn,$sql);
                        while($data=mysqli_fetch_array($result)){
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
                <tr>
                <td>
                <div class='doctor_report_img'><img src='images/$photo'></div></td>
                       <td>$name</td>
                       <td>$mobile</td>
                       <td>$specialist</td>
                       <td><a href='doctor_edit.php?doctor_id=$doctor_id'>Edit |</a>  <a href='doctor_delete.php?doctor_id=$doctor_id'> Delete</a></td>
                        <tr>";
                            
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