<?php
include "connection.php";
if (isset($_POST['submit'])) {
  $title=$_POST['title'];
  $detail=$_POST['detail'];
  $organizer=$_POST['organizer'];
  $events=$_POST['events'];
  $dept=$_POST['dept'];
  $theme=$_POST['theme'];
  $contact=$_POST['contact'];
  $sdate=$_POST['sdate'];
  $edate=$_POST['edate'];
  $ldate=$_POST['ldate'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $etype=$_POST['etype'];
    $query="INSERT INTO event(title,detail,organizer,events,dept,theme,contact,sdate,edate,state,ldate,city,etype)VALUES('$title','$detail','$organizer','$events','$dept','$theme','$contact','$sdate','$edate','$state','$ltate','$city','$etype')" or die(mysqli_error($con));
      echo $query;
      $result=mysqli_query($con,$query);
      if ($result) {
        echo '<script>alert("REGISTER SUCCESSFUL")</script>';;
      }
      else
      {
        echo '<script>alert("REGISTER SUCCESSFUL")</script>';
      }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>EVENT</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
<form method="POST" action="">

      
      <div class="container-head">
          <div class="title">
          <center><h1>Event details</h1></center>
          </div>
      </div>
    
     
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" id="inputEmail3">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="detail" id="inputEmail3">

    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Organizer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="organizer">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Events</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="events">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Department</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="dept">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Themes</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="theme">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="contact">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" name="sdate">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" name="edate">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Last Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" name="ldate">
    </div>
  </div>

  <div class="form-group row">
    <label for="validationCustom04" class="col-sm-2 col-form-label">State</label>
     <div class="col-sm-10">
      <select class="custom-select" id="validationCustom04" name="state" required>
        <option selected disabled value="">Choose...</option>
        <option>tamilnadu</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="validationCustom04" class="col-sm-2 col-form-label">City</label>
     <div class="col-sm-10">
      <select class="custom-select" id="validationCustom04" name="city" required>
        <option selected disabled value="">Choose...</option>
        <option>trichy</option>
        <option>madurai</option>
      </select>
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Event Type</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="etype" id="gridRadios1" value="Intra" checked>
          <label class="form-check-label" for="gridRadios1">
            Intra
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="etype" id="gridRadios2" value="Inter">
          <label class="form-check-label" for="gridRadios2">
            Inter
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
  
</form>
</div>
</body>
</html>