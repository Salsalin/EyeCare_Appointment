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
  if(!empty($_POST['login']))
  {
	  
	  
	      //session_start();
	  $email= trim($_POST['email']);
	  $password= trim($_POST['password']); 
       				  
			   $query = " select * from registration where email = '$email' and password = '$password'  " ;
					  
					 
                       $result = mysqli_query($conn, $query);

                       $count = mysqli_num_rows($result);
						 
                            if($count==0)
							{
								echo "<script>alert('username and password doesnot matched')</script>";
												
							}
						  
						 
						 else 
						 {
							    // $data=mysqli_fetch_assoc($result);
					            // $_SESSION["id"]=$data['id'];
					  
					            //$_SESSION["type"]=$data['type'];
                             
                
        // Register $myusername, $mypassword and redirect to file "admin.php"
                                    
							 if($email=='admin@gmail.com')
                             {
                              
                                   
                                   echo"<script>alert('Entry Successfully')</script>";
							header("Location:http://localhost/practise/admin/adminindex.php");
                            echo "<meta http-equiv='refresh' content='0'>";	
                             }
                             else
                                 
                             {  
                                 echo"<script>alert('Entry successfully')</script>";
                                   $data=mysqli_fetch_array($result);
									  $_SESSION['patient_id']=$data['patient_id'];                                   
                      header("Location:http://localhost/practise/patient/book_appointment.php");
                            echo "<meta http-equiv='refresh' content='0'>";	
                             }
						   
                         }
                        
  
              mysqli_close($conn);
			        
		  
		 }
?>


      <form action='' method = 'POST' id='login'>
          <div class="login-wrap">

            <fieldset>
			
               <legend><h3>LogInForm</h3></legend>  
					
                <div class="form-group">
                  <label class ="label design" style="color:#004d66;font-size:15px;">Email:</label><br>
                      <input type= "text" name='email' id='email' class ="form-control" required>
				</div>	  
					
				<div class="form-group">	
                 <label class = "label design" style="color:#004d66; font-size:15px;">Password:</label>
                     <input type= "password" name='password' id ='password' class ="form-control" required>
                </div>
                
                
                      <input  type= "submit" name='login' class ="btn btn-primary btn-lg" value="LogIn" required><br>
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