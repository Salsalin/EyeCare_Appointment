<html>


<?php
        
		   session_start();
  		   $conn = mysqli_connect("localhost","root","","finalprojectdemo") ;
		   
  ?>
    <body>
           <div class="container-fluid">
             <div class="wrapper_white">
    <?php require_once('header_appointment.php');?>	
                 <div class='container login_form'>
                     
<?php 
                      $patient_id=$_SESSION['patient_id'];
                     
              $sql="select * from doctors";
                        $result=mysqli_query($conn,$sql);     
        
	 		if(!empty($_POST['submit']))
			 
			{

				$name=trim($_POST['name']);
				$description=trim($_POST['description']);
               	$date=trim($_POST['testDate']);
                $time=trim($_POST['time']);
               
		$sql="insert into apt(name,description,date,time,patient_id) values('$name','$description','$date','$time','$patient_id')";
					
                 $result= mysqli_query($conn,$sql);
                     if(!$result)
                {					
						echo"error".mysqli_error();			
				         }
                else
                {
                    
                       echo"<script>alert('Thank you for your appointment. We will confirm you as soon as possible')</script>";
                	header("Location:http://localhost/practise/patient/book_appointment.php");
                   echo "<meta http-equiv='refresh' content='0'>";
            
                }
				
         }
    mysqli_close($conn);		        
		  
?>

 
      <form action='' method = 'POST' id='submit'>
          <div class="login-wrap">
                
					<fieldset>-
					<legend><h3>Appointment</h3></legend>
                        <div class='middle'> 
						
                              <div class="form-group">
                          
                                 <label class='label_design'>Doctorname:</label>
                                 <select name="name" id="name">
                            <?php 
                  
                    while($data=mysqli_fetch_array($result)):;?>
                    <option><?php echo $data[2];?></option>
                                 <?php endwhile;?>
                             </select>  
                            </div>

                                   <div class="form-group">
                               <br>     
                                <label class='label_design'>Date</label><br>
                            <input type='date' name="testDate" class="form-control" required>
                            </div>	
                                <div class="form-group">
                                <label class='label_design'>Time</label><br>
                                    <select class="selectpicker"  name='time' id='time' class="form-control" required>
                             <option>8.00 AM</option>
                             <option>8.15 AM</option>
                           <option>8.30 AM</option>
                            <option>8.45 AM</option>
                             <option>9.00 AM</option>
                  
                            <option>9.15 AM</option>
                             <option>9.30 AM</option>
                           <option>9.45 AM</option>
                            <option>10.00 AM</option>
                           
                            <option>10.15 AM</option>
                             <option>10.30 AM</option>
                           <option>10.45 AM</option>
                            <option>11.00 AM</option>
                             <option>11.15 AM</option>
                             <option>11.30 AM</option>
                           <option>11.45 AM</option>
                            <option>12.00 PM</option>  
                            <option>12.15 PM</option>
                             <option>12.30 PM</option>
                           <option>12.45 PM</option>
                            <option>1.00 PM</option> 
                            <option>1.15 PM</option>
                             <option>1.30 PM</option>
                           <option>1.45 PM</option>
                            <option>2.00 PM</option>
                            <option>2.15 PM</option>
                             <option>2.30 PM</option>
                           <option>2.45 PM</option>
                            <option>3.00 PM</option>           
                             <option>3.15 PM</option>
                             <option>3.30 PM</option>
                           <option>3.45 PM</option>
                            <option>4.00 PM</option>
                            <option>4.15 PM</option>
                             <option>4.30 PM</option>
                           <option>5.45 PM</option>
                            <option>6.00 PM</option>
                            <option>6.15 PM</option>
                             <option>6.30 PM</option>
                           <option>6.45 PM</option>
                            <option>7.00 PM</option>
                                        
                             <option>7.15 PM</option>
                             <option>7.30 PM</option>
                           <option>7.45 PM</option>
                            <option>8.00 PM</option>   
                            <option>8.15 PM</option>
                             <option>8.30 PM</option>
                           <option>8.45 PM</option>
                            <option>9.00 PM</option>        
                            </select>
                            </div>	
                            
                            
                                <div class="form-group">
                                <label class='label_design'>description</label>
                                    <textarea  type='text' name='description' rows="5"  id='description' class="form-control" placeholder="description" required></textarea>
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