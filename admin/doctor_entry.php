<html>



<?php
        
		   session_start();
  		   $conn = mysqli_connect("localhost","root","","finalprojectdemo") ;
		   
  ?>
    <body>
           <div class="container-fluid">
             <div class="wrapper_white">
    <?php require_once('adminheader.php');?>	
    	<div class='container login_form'>
            <?php

            
             		if(!empty($_POST['submit'])){

				   $dir='../images/';
					$file=$_FILES['photo']['name'];
					$pic=$dir.$file;
					$upload=move_uploaded_file($_FILES['photo']['tmp_name'],$pic);

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
					
					$sql="insert into doctors values(
								'',
								'$pic',
								'$name',
                                '$doctor_detail',
                                 '$mobile',
								'$qualification',
								'$specialist',
                                '$location',
                                '$day',
                                '$start_time',
                                '$end_time',
								'$fee'
					)";
                  $result=mysqli_query($conn,$sql);
                
                if(!$result)
                {					
						echo"error".mysqli_error();			
				         }
                else
                {
                echo"<script>alert('Entry successfully')</script>";
                echo"<script>location.href='doctor_entry.php'</script>";	
			     echo "<meta http-equiv='refresh' content='0'>";
                }
                
}             
            
       mysqli_close($conn);         
?>


      <form action='' method = 'POST' id='submit' enctype='multipart/form-data'>
          <div class="login-wrap">
              
           		<fieldset>
					<legend><h3>Create Doctor Management</h3></legend>
                        <div class='middle'>

							<div class="form-file">
                                <label >Photo</label>
                                <input type="file" name='photo' id='file'>
                            </div>
                             <br>
                             <div class="form-group">
                                <label class='label_design'>Name</label>
                                <input  type='text' name='name' class="form-control"  required>
                            </div>
                           <div class="form-group">
                                <label class='label_design'>Doctor Details</label>
                                <input  type='text' name='doctor_detail' class="form-control" required>
                            </div>
                            
                               <div class="form-group">
                                <label class='label_design'>Contact Number</label>
                                <input  type='text' name='mobile' class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class='label_design'>Qualification</label>
                                <input  type='text' name='qualification' class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class='label_design'>Specialist</label>
                                <input type='text' name='specialist' class="form-control"  required>
                            </div>	
                            
                            <div class="form-group">
                                <label class='label_design'>Location</label>
                                <input type='text' name='location' class="form-control"  required>
                            </div>	

                            
                            <div class="form-group">
                                <label class='label_design'>Visiting Days</label>
                                <input type='text' name='day' class="form-control" required>
                            </div>			
					        
					        
                             <div class="form-group">
                                <label class='label_design'>Start Working Time</label>
                                <input type='text' name='start_time' class="form-control"  required>
                            </div>			
					        
                             <div class="form-group">
                                <label class='label_design'>End Working Time</label>
                                <input type='text' name='end_time' class="form-control"  required>
                            </div>			
					        
				            <div class="form-group">
                                <label class='label_design'>Fees</label>
                                <input type='text' name='fee' class="form-control" required>
                            </div>
																		
                             <input type="submit" value='SUBMIT' name='submit' class=" btn btn-primary btn-lg " required>
                                       
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