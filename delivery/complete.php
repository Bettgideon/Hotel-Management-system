<?php
include 'server.php';
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
  <caption>List of Successful Tasks handled by <?php  echo  $_SESSION['team_name']; ?></caption>
  <thead>
      <h3>Successful Tasks</h3>
    <tr class='bg-primary'>
      <th scope="col">Delivery team</th>
      <th scope="col">Registration Number</th>
      <th scope="col">Student Name</th>
      <th scope="col">Description</th>
      <!-- <th scope="col">Request Status</th> -->
      <th scope="col">Time of Request</th>
      <th scope="col">Resolution</th>

    </tr>
  </thead>
  <tbody>
        
        <?php
        if( $_SESSION['team_id']){
            $data_fetch_query = "SELECT request_status.orderID, request_status.ip_address, request_status.food_description,request_status.request_latitude, 
            request_status.request_longitude, request_status.status, request_status.admNo, request_status.timestamp,
            users_details.firstname,users_details.lastname,users_details.regNum,
            delivery_team_tasks.food_order_code, delivery_team_tasks.delivery_team_id, delivery_team_tasks.team_status, success_list.users_ordercode, success_list.description
             FROM (((request_status
             INNER JOIN users_details ON request_status.admNo = users_details.regNum)
             INNER JOIN  delivery_team_tasks ON request_status.orderID =  delivery_team_tasks.food_order_code)
             INNER JOIN  success_list ON  request_status.orderID = success_list.users_ordercode)
             WHERE delivery_team_tasks.delivery_team_id = '".$_SESSION['team_id']."' AND delivery_team_tasks.team_status ='Successful' ORDER BY timestamp ASC ";
             
            $data_result = mysqli_query($db, $data_fetch_query);
            if ($data_result->num_rows > 0){
                while($row = $data_result->fetch_assoc()) {
                  $student_reg = $row["regNum"];
                  $task_code = $row["orderID"];
             
            echo "<tr> <td>" .$row["orderID"].  "</td>";
            echo "<td>" .$row["regNum"]."</td>";
            echo "<td>" .$row["firstname"]." ".$row["lastname"]. "</td>";
            echo "<td>" .$row["food_description"]."</td>";
            // echo "<td>" .$row["status"]."</td>";
            echo "<td>" .$row["timestamp"]."</td>";
            echo "<td>" .$row["description"]."</td> </tr>";
         
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


<?php include 'components/scripts.php';?>
  </body>
</html>
