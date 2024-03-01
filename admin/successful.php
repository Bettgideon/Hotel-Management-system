<?php
include 'server.php';
$admin_id = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Successful Tasks</title>
<?php include './includes/header.php'; ?>
</head>
  <body>
    <?php include './includes/navbar.php'; ?>
<div class="container-fluid">
  <div class="row m-3">
  <div class="col-md-1"></div>
    <div class="col-md-10">
<div class="table-responsive-lg p-3">
    <table class="table p-3" style='color:black; font-weight:normal'>
        <thead>
          <h5  style='color:blue; font-weight:normal'>
          Successful Tasks</h5>
            <tr >
              <!-- <th scope="col" class="table-primary">S.NO</th> -->
             
              <th scope="col" class="table-primary">delivery team</th>
              <th scope="col" class="table-primary">Student Name</th>

              <th scope="col" class="table-primary">Time of Request</th>
              <th scope="col" class="table-primary">Action</th>
            </tr>
          </thead>
          <tbody>
        
    <?php
    if($admin_id){
        $data_fetch_query = "SELECT request_status.id, request_status.orderID,request_status.status,request_status.food_description, 		
        request_status.admNo,request_status.timestamp,users_details.regNum,users_details.regNum,
        users_details.firstname,users_details.lastname,users_details.phonenumber,success_list.users_ordercode, success_list.description
        FROM ((request_status
        INNER JOIN users_details ON request_status.admNo = users_details.regNum)
        INNER JOIN success_list ON request_status.orderID = success_list.users_ordercode)
        
        WHERE request_status.status ='Successful' order by request_status.timestamp DESC;";
        $data_result = mysqli_query($db, $data_fetch_query);
        if ($data_result->num_rows > 0){
            while($row = $data_result->fetch_assoc()) {

            $help_code=$row["orderID"];
            $request_status=$row["status"];
            $request_info=$row["food_description"];
            $request_report=$row["description"];
            $fname=$row["firstname"];
            $lname=$row["lastname"];
            $tel=$row["phonenumber"];
            $name = $fname." ".$lname;
            
            echo "<tr> <td>" .$row["orderID"]."</td>";
            echo " <td>" .$row["firstname"]. " ".$row["lastname"]. "</td>";

            echo "<td>" .$row["timestamp"]."</td>";
        echo "<td>
        
        <form method ='POST' action='server.php'>

        <input type='submit' data-report='$request_report' data-info ='$request_info' data-status ='$request_status' data-phonenumber ='$tel' data-helpcode ='$help_code' data-name ='$name' value='View More Details' id='success_view' class='btn btn-info successful_task_view'>
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
    
  </div>
  <div class="col-md-1"></div>
</div>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black;font-weight:normal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Successful Task Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">order code:</label>
            <input type="text" class="form-control" readonly id="student_HelpId">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Student Name:</label>
            <input type="text" class="form-control"readonly id="student-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input type="text" class="form-control" readonly id="student-phone">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Request Status:</label>
            <input type="text" class="form-control" readonly id="request-status">
          </div>
     
         
          <div class="form-group">
            <label for="message-text" class="col-form-label">Task Description:</label>
            <textarea class="form-control" id="request_details" readonly ></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">delivery Report:</label>
            <textarea class="form-control" id="incident-report" readonly></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-success">Send message</button> -->
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

  </div>
  <div class="col-md-3"></div>
</div>
</div><!--close container-->

    <!--Bootstrap 4 scripts-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End Bootstrap 4 scripts-->
<!-- modal script -->
<script src="./static/js/app.js"></script>
<script src="./static/js/modal.js"></script>
  </body>
</html>
