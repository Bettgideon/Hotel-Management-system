<?php
include 'server.php';
$task_code = $_SESSION['orderID'];
$student_ip = $_SESSION['ip_address'];
$student_lat = $_SESSION['request_latitude'];
$student_long = $_SESSION['request_longitude'];
$request_Status = $_SESSION['status'];
$student_Adm = $_SESSION['admNo'];
$delivery_Lat =  $_SESSION['delivery_lat'];
$delivery_Long=   $_SESSION['delivery_long'];
$description = $_SESSION['taskDescription'];
$locationDetails= $_SESSION['directions'];
?>
<!DOCTYPE html>
<html lang="en">
<?php include './components/header.php'; ?>
  <body>
    <?php include './components/navbar.php'; ?>
<div class="container mt-4">
  <form method="post" action="server.php" class="border border-info rounded p-4" style='color:black; font-weight:normal'>
<?php
include 'errors.php';
?>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <h3 style="font-weight: bold;color: blue;text-align: center;">Request Details</h3>
  </div>
  <div class="col-md-4"></div>
</div>
    <div class="row">
      <div class="col">
        <label for="student_name">Task Code</label>
        <input type="text" class="form-control" name='task_code' readonly placeholder="Task Code" value="<?php echo $task_code; ?>" >
      </div>
      <div class="col">
        <label for="student_name">IP Address</label>
        <input type="text" class="form-control" name='ip_address' readonly placeholder="IP Address" value='<?php echo $student_ip;?>'>
      </div>
    </div>
<br>
    <div class="row">
      <div class="col">
        <label for="student_name">Latitude</label>
        <input type="text" class="form-control" name='task_latitude' readonly placeholder="Latitude"  value='<?php echo $student_lat; ?>'>
      </div>
      <div class="col">
        <label for="student_name">Longitude</label>
        <input type="text" class="form-control" name='task_longitude' readonly placeholder="Longitude"  value='<?php echo $student_long; ?>'>
      </div>
    </div>
<br>
<div class="row">
  <div class="col">
    <label for="student_name">Status</label>
    <input type="text" class="form-control" name='task_status' readonly placeholder="Task Status"  value='<?php echo $request_Status; ?>'>
  </div>
  <div class="col">
        <label for="student_reg">Registration Number</label>
        <input type="text" readonly class="form-control" name='reg_num' readonly placeholder="Username" value='<?php echo $student_Adm; ?>'>
      </div>
</div>
<br>
<div class="row">
  <div class="col">
    <label for="task_description">Description</label>
    <input type="text" class="form-control" name='task_description' readonly placeholder="Description"  value='<?php echo $description; ?>'>
    
  </div>
  <div class="col">
    <label for="task_description">Manual Directions</label>
    <input type="text" class="form-control" name='task_directions' readonly placeholder="Manual Directions"  value='<?php echo $locationDetails; ?>'>
    
  </div>
</div>
<br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3 m-1">
      <?php
      if($_SESSION['active']){
        echo '<button type="submit" disabled name="request_respond_btn" class="btn btn-primary btn-block">Responding...</button>';
      }else{
        echo '<button type="submit" name="request_respond_btn" class="btn btn-primary btn-block">Respond To Task </button>';
      }
      ?>
     
      
    </div>
    <div class="col-md-3">
    <button type="submit" name='view-map-btn'class="btn btn-warning btn-block">View Map</button>
    </div>
    <div class="col-md-3"></div>
  </div>
  </form>
</div>


<?php include 'components/scripts.php';?>
<!-- End Bootstrap 4 scripts-->
<!-- modal script -->
<!-- <script src="./static/js/app.js"></script> -->
  </body>
</html>