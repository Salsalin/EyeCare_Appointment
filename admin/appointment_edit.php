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
    
              <?php require_once('header.php'); ?>                  
    <div class="container login-form">
               
    
                <?php
                             $patient_id=$_GET['patient_id']; 
                         $sql = "SELECT * FROM registration WHERE patient_id=$patient_id";
        
        
                            $result=mysqli_query($conn,$sql);
                           $data=mysqli_fetch_assoc($result);
                           $patient_id=$data['patient_id'];
                         $username=$data['username'];
                         $gender=$data['gender'];
                        $email=$data['email'];
                         $pasword=$data['password'];
                        $phone=$data['phone'];
                        $address=$data['address'];
                        $city=$data['city'];
    
            
                if(!empty($_POST['submit'])){

                         
				$username=trim($_POST['username']);
                $gender=trim($_POST['gender']);
				$email=trim($_POST['email']);
                $password1=trim($_POST['password1']);
		        $password2=trim($_POST['password2']);
				$phone=trim($_POST['phone']);
				$address=trim($_POST['address']);
				$city=trim($_POST['city']);
                
					
					$sql="update doctors set
                               
								name='$name',
                                doctor_detail='$doctor_detail',
                                 mobile='$mobile',
								qualification='$qualification',
								specialist='$specialist',
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
																		
                             <input type="submit" value='Update' name='submit' class="form-group btn btn-default" required>
                                       
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