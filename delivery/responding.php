<?php
include 'server.php';
$delivery_Lat =  $_SESSION['delivery_lat'];
$delivery_Long=   $_SESSION['delivery_long'];
$delivery_ip  = $_SESSION['ipaddress'];
$team_name = $_SESSION['team_name'];
$code = $_SESSION['HELPCODE'];
?>
<!DOCTYPE html>
<html lang="en">
<?php
include './components/header.php';
?>
  <body>
    <?php
    include './components/navbar.php';
    ?>


<div class="container mt-4">
<table class="table">
  <?php
  include 'errors.php';
  ?>
  <caption>Tasks that <?php echo $team_name; ?> is Responding to.</caption>
  <thead>
      <h3>Responding</h3>
    <tr class='bg-primary'>
      <th scope="col">delivery team</th>
      <th scope="col">Registration Number</th>
      <th scope="col">Student Name</th>
      <th scope="col">Description</th>
      <!-- <th scope="col">Request Status</th> -->
      <th scope="col">Time of Request</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        
        <?php
        if( $_SESSION['team_id']){
            $data_fetch_query = "SELECT request_status.helpID, request_status.ip_address,request_status.food_description, request_status.request_latitude, 
            request_status.request_longitude, request_status.status, request_status.admNo, request_status.timestamp,
            users_details.firstname,users_details.lastname,users_details.regNum,
            delivery_team_tasks.food_order_code, delivery_team_tasks.delivery_team_id, delivery_team_tasks.team_status
             FROM ((request_status
             INNER JOIN users_details ON request_status.admNo = users_details.regNum)
             INNER JOIN  delivery_team_tasks ON request_status.helpID =  delivery_team_tasks.food_order_code)
             WHERE delivery_team_tasks.delivery_team_id = '".$_SESSION['team_id']."' AND delivery_team_tasks.team_status ='Responding' ORDER BY timestamp DESC ";
             
            $data_result = mysqli_query($db, $data_fetch_query);
            if ($data_result->num_rows > 0){
                while($row = $data_result->fetch_assoc()) {
                  $student_reg = $row["regNum"];
                  $task_code = $row["helpID"];
                  $fname = $row["firstname"];
                  $lname = $row["lastname"];
                  $rstatus = $row["status"];
                  $time = $row["timestamp"];
                 $_SESSION['HELPCODE'] =  $task_code;
             
            echo "<tr> <td>" .$row["helpID"].  "</td>";
            echo "<td>" .$row["regNum"]."</td>";
            echo "<td>" .$row["firstname"]." ".$row["lastname"]."</td>";
            echo "<td>" .$row["food_description"]."</td>";
            // echo "<td>" .$row["status"]."</td>";
            echo "<td>" .$row["timestamp"]."</td>";
            echo "<td>
            
            <form method ='POST' action='server.php'>
            <input  type='text' hidden name='task_code' value='$task_code'>
            <input  type='text' hidden  name='student_reg' value='$student_reg'>
            <input  type='text' hidden  name='fname' value=' $fname'>
            <input  type='text' hidden name='lname' value=' $lname'>
            <input  type='text'  hidden name='delivery_ip' value='$delivery_ip'>
            <input  type='text' hidden  name='delivery_longitude' value='$delivery_Long'>
            <input  type='text' hidden  name='delivery_latitude' value='$delivery_Lat'>
            <input  type='text' hidden  name='r_timestamp' value='$time'>
    
            <input type='submit' value='View Task' name='view-task-btn' class='btn btn-warning m-1'>
            <input type='button' data-id='$task_code' value='Successful' id='success-Button' name='success-task-btn' class='btn btn-success m-1 success-button'>
            <input type='button' data-val='$task_code' value='Failed' id='failed-Button' name='failed-task-btn' class='btn btn-danger m-1 failure-button'>
         
            </form>
            </td> </tr>";
         
            }
            
            }else{
            echo "<td>"."No Requests Found"."</td>";
            }
            
            } else{
                echo "<td>"."No Data Found"."</td>";
            }
    
    ?>
              </tbody>
</table>
</div>
    <!--Modal -->
    <div class="modal fade successModalClass"  id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Great! You Succeeded 😃</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server.php">
     
          <div class="form-group">
          <label for="recipient-name"  class="col-form-label">delivery team </label>
            <input type="text" name='task_code' readonly required class="form-control" id="code-value" >
            <label for="recipient-name" class="col-form-label">Please tell us what happened: </label>
            <textarea class="form-control"name='incident_desc' required id="message-text"></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name='success-task-btn' class="btn btn-success">Send and Exit</button>
      </div>
        </form>
      </div>
   
    </div>
  </div>
</div>
<!--End of Modal-->

  <!--Failed Modal -->
  <div class="modal fade" id="failedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Oh no! You Failed 😢</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server.php">
     
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">delivery team </label>
            <input type="text" name='task_code' readonly required class="form-control" id="helpCode" value="">
            <label for="recipient-name" class="col-form-label">Please tell us what happened: </label>
            <textarea class="form-control"name='incident_desc' required id="message-text"></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name='failed-task-btn' class="btn btn-success">Send and Exit</button>
      </div>
        </form>
      </div>
   
    </div>
  </div>
</div>
<!--End of Modal-->
<script src="./static/js/modal.js"></script>
<?php include 'components/scripts.php';?>
  </body>
</html>
