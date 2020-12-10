<?php
include "connection.php";
if (isset($_POST['submit'])) {
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $collage=$_POST['collage'];
  $year=$_POST['year'];
  $dept=$_POST['dept'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $event=$_POST['event'];
      $query="INSERT INTO register(first_name,last_name,collage,year,dept,email,contact,event)VALUES('$first_name','$last_name','$collage','$year','$dept','$email','$contact','$event')" or die(mysqli_error($con));
      
      $result=mysqli_query($con,$query);
      if ($result) {
        echo '<script>alert("REGISTER SUCCESSFUL")</script>';
      }
      else
      {
        echo '<script>alert("REGISTER NOT SUCCESSFUL")</script>';
      }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
      
      <div class="container-head">
          <div class="title">
          <center><h1>Event details</h1></center>
          </div>
      </div>
    
      <div class="container-body">
         <form method="POST" action="">
         
         <div class="form-row top">
           <div class="form-group col-md-6">
             <label for="inputEmail4">First Name</label>
             <input type="text" class="form-control" id="inputEmail4" name='first_name'>
           </div>
           <div class="form-group col-md-6">
             <label for="inputEmail4">Last Name</label>
             <input type="text" class="form-control" id="inputEmail4" name='last_name'>
           </div>
          </div>

          <div class="form-row top">
           <div class="form-group col-md-6">
             <label for="inputEmail4">Collage</label>
             <input type="text" class="form-control" id="inputEmail4" name='collage'>
           </div>
           <div class="form-group col-md-6">
             <label for="inputEmail4">YEAR</label>
             <div>
                      <select class="form-control" name="year">
                        <option>select</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        
                      </select>
                  </div>
           </div>
          </div>

        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">DEPARTMENT</label>
             <div>
                      <select class="form-control" name="dept">
                        <option>select</option>
                        <option>cse</option>
                        <option>ece</option>
                        <option>mech</option>
                        <option>eee</option>
                        
                      </select>
                  </div>
           </div>
           <div class="form-group col-md-6">
             <label for="inputPassword4">Email</label>
          <input type="email" class="form-control" id="inputPassword4" name="email">
           </div>
        </div>

        <div class="form-row top">
           <div class="form-group col-md-6">
             <label for="inputEmail4">Contact</label>
             <input type="text" class="form-control" id="inputEmail4" name='contact'>
           </div>
           <div class="form-group col-md-6">
             <label for="inputEmail4">Event</label>
             <input type="text" class="form-control" id="inputEmail4" name='event'>
           </div>
          </div>

          <div class="form-group row">
                <center class="col-sm-12">
                  <input  type="submit"  name="submit" Value="Submit" class="btn btn-primary">
                </center> 
            </div>

</body>
</html>