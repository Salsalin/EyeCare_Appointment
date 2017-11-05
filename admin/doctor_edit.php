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
    <div class="container login-form">
               
    
                <?php
                             $doctor_id=$_GET['doctor_id']; 
                         $sql = "SELECT * FROM doctors WHERE doctor_id=$doctor_id";
        
        
                            $result=mysqli_query($conn,$sql);
                           $data=mysqli_fetch_assoc($result);
                           $photo=$data['photo'];
                            $doctor_id=$data['doctor_id'];
                            $name=$data['name'];
                            $doctor_detail=$data['doctor_detail'];
                            $mobile=$data['mobile'];
                            $qualification=$data['qualification'];
                            $specialist=$data['specialist'];
                            $location=$data['location'];
                            $day=$data['day'];
                            $start_time=$data['start_time'];
                            $end_time=$data['end_time'];
                            $fee=$data['fee'];
    
            
                if(!empty($_POST['submit'])){

				$name=trim($_POST['name']);
                $doctor_detail=trim($_POST['doctor_detail']);
                $mobile=trim($_POST['mobile']);
				$qualification=trim($_POST['qualification']);
				$specialist=trim($_POST['specialist']);
                $location=trim($_POST['location']);
                
                $day=trim($_POST['day']);  
                $start_time=trim($_POST['start_time']);  
                $end_time=trim($_POST['end_time']);   
				$fee=trim($_POST['fee']);
					
					$sql="update doctors set
                               
								name='$name',
                                doctor_detail='$doctor_detail',
                                 mobile='$mobile',
								qualification='$qualification',
								specialist='$specialist',
                                location='$location',
                                day='$day',
                              start_time='$start_time',
                              end_time='$end_time',
								fee='$fee' where doctor_id=$doctor_id";
                                
					
                  $result=mysqli_query($conn,$sql);
                                
                          
if ($result)
{
      echo"<script>alert('Record updated successfully')</script>";
} 
         else
         {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn); 
                            }

          ?>
    
  
 <form action='' method = 'POST' id='submit'>
          <div class="login-wrap">
              
           		<fieldset>
					<legend><h3>Update Doctor Management</h3></legend>
                        <div class='middle'>
                    
                            
                             <div class="form-group">
                                <label class='label_design'>Name</label>
                                 <input  type='text' name='name' id='name' class="form-control" value="<?php echo $data['name']?>">
                            </div>
                           <div class="form-group">
                                <label class='label_design'>Doctor Details</label>
                                <input  type='text' name='doctor_detail' id='doctor_detail' value="<?php echo $data['doctor_detail']?>" class="form-control">
                            </div>
                            
                               <div class="form-group">
                                <label class='label_design'>Contact Number</label>
                                <input  type='text' name='mobile' id='mobile'value="<?php echo $data['mobile']?>"  class="form-control" >
                            </div>

                            <div class="form-group">
                                <label class='label_design'>Qualification</label>
                                <input  type='text' name='qualification' id='qualification' value="<?php echo $data['qualification']?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class='label_design'>Specialist</label>
                                <input type='text' name='specialist' id='specialist' value="<?php echo $data['specialist']?>" class="form-control" >
                            </div>	
                            
                            <div class="form-group">
                                <label class='label_design'>Location</label>
                                <input type='text' name='location' id='location' value="<?php echo $data['location']?>" class="form-control" >
                            </div>	
                            
                              <div class="form-group">
                                <label class='label_design'>Visiting Days</label>
                                <input type='text' name='day' id='day' value="<?php echo $data['day']?>" class="form-control" >
                            </div>	
                            
                            
                                 <div class="form-group">
                                <label class='label_design'>Start Working Hour</label>
                                <input type='text' name='start_time' id='start_time' value="<?php echo $data['start_time']?>" class="form-control" >
                            </div>
                            
                                 <div class="form-group">
                                <label class='label_design'>End Working Hour</label>
                                <input type='text' name='end_time' id='end_time' value="<?php echo $data['end_time']?>" class="form-control" >
                            </div>
                            
					        
				            <div class="form-group">
                                <label class='label_design'>Fees</label>
                                <input type='text' name='fee' id='fee' value="<?php echo $data['fee']?>" class="form-control">
                            </div>
																		
                             <input type="submit" value='Update' name='submit' class="btn btn-primary btn-lg " required>
                                       
						</div>
				</fieldset>   
                   
          </div>
       </form>
         </div>
    
     <?php require_once('footer.php'); ?>
              
        </div>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                 </body>
 </html>