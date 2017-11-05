<html>

<?php
        
		   session_start();
  		   $conn = mysqli_connect("localhost","root","","finalprojectdemo") ;
		   
  ?>
    <body>
           <div class="container-fluid">
             <div class="wrapper_white">
    <?php require_once('header.php');?>	
    	<div class='container login_form'>
            <?php

	 		if(!empty($_POST['submit']))
			
			{

				$username=trim($_POST['username']);
                $gender=trim($_POST['gender']);
				$email=trim($_POST['email']);
                $password1=trim($_POST['password1']);
		        $password2=trim($_POST['password2']);
				$phone=trim($_POST['phone']);
				$address=trim($_POST['address']);
				$city=trim($_POST['city']);
			if($password1==$password2)
            {		
		$sql="insert into registration(username,gender,email,password,phone,address,city) values('$username','$gender','$email','$password1','$phone','$address','$city')";
					
                  mysqli_query($conn,$sql);
                   echo"<script>alert('Entry successfully')</script>";
                	header("Location:http://localhost/practise/login.php");
                   echo "<meta http-equiv='refresh' content='0'>";
            }
                
				
             	else
			{
         echo"<script>alert('password does not match')</script>";
		  echo "<meta http-equiv='refresh' content='0'>";
			}
		
         }
    mysqli_close($conn);		        
		  
?>


      <form action='' method = 'POST' id='submit'>
          <div class="login-wrap">

					<fieldset>
					<legend><h3>Patient Registration</h3></legend>
                        <div class='middle'>
						
                            <div class="form-group">
                                <label class='label_design'>Username</label>
                                <input  type='text' name='username' id='username' class="form-control" required>
                            </div>
                            
                        <label class='label_design'>Gender</label><br>
                            <label class="radio-inline"><input type="radio" name="gender" value="male" > Male</label>
                            <label class="radio-inline"> <input type="radio" name="gender" value="female"> Female<br></label><br><br>
      
                            <div class="form-group">
                                <label class='label_design'>Email</label>
                                <input  type='text' name='email' id='email' class="form-control"  required>
                            </div>
							
							<div class="form-group">
                                <label class='label_design'>Password</label>
                                <input type='password' name='password1' id='password1' class="form-control" required>
                            </div>	
                            
                            <div class="form-group">
                                <label class='label_design'>Confirm Password</label>
                                <input type='password' name='password2' id='password2' class="form-control" required>
                            </div>	
							
                            <div class="form-group">
                                <label class='label_design'>Phone</label>
                                <input type='phone' name='phone' id='phone' class="form-control"  required>
                            </div>			
					        
				            <div class="form-group">
                                <label class='label_design'>Address</label>
                                <input type='text' name='address' id='address' class="form-control" required>
                            </div>
								
							
							<div class="form-group">
                                <label class='label_design'>City</label>
                                <input type='text' name='city' id='city' class="form-control"  required>
                            </div>		
								
																		
                             <input type="submit" value='submit' name='submit' class="btn btn-primary btn-lg" required>
                                       
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