<?php
include 'server.php';
$team_name = $_SESSION['team_name'];
$helpCode = $_SESSION['food_order_code'];
// Get Location from IP Address using PHP
// Use the IP Geolocation API to get the user’s location from IP using PHP.

// Call API via HTTP GET request using cURL in PHP.

// Retrieve IP data from API response.
// IP address 
//static ip address
//$ip = "165.105.70.4"; 

//Get IP Address of User in PHP
 $ip = $_SERVER['REMOTE_ADDR']; 

 // Convert API JSON response to array using json_decode() function.
$url = file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip);
//decode json data
$getInfo = json_decode($url); 

// print_r($getInfo);
    
//print the array to see the fields if you wish.

// echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
// echo $getInfo->geoplugin_countryName;
// echo "</td></tr><tr><td>CITY:</td><td>";
// echo $getInfo->geoplugin_city;
// echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
// echo $getInfo->geoplugin_region;
// echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
// echo $getInfo->geoplugin_request;
// echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
// echo $getInfo->geoplugin_countryCode;
// echo "</td></tr><tr><td>LATITUTE:</td><td>";
// echo $getInfo->geoplugin_latitude;
// echo "</td></tr><tr><td>LONGITUDE:</td><td>";
// echo $getInfo->geoplugin_longitude;
// echo "</td></tr><tr><td>TIMEZONE:</td><td>";
// echo $getInfo->geoplugin_timezone;
// echo "</td></tr><tr></table>";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
include './components/header.php';
?>
  <title>Assigned Tasks</title>
  </head>


  <body>
    <?php
    include './components/navbar.php';
    ?>
<div class="container mt-4">
<div class="table-responsive-md">
<table class="table">
  <?php
  include 'errors.php';
  ?>
  <caption>List of Tasks assigned to <?php  echo  $team_name; ?></caption>
  <thead>
      <h3>Assigned Tasks</h3>
    <tr class='bg-primary'>
      <th scope="col">delivery team</th>
      <th scope="col">Registration Number</th>
      <th scope="col">Student Name</th>
      <th scope="col">Request Status</th>
      <th scope="col">Time of Request</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        
        <?php
        if( $_SESSION['team_id']){
            $data_fetch_query = "SELECT request_status.helpID, request_status.ip_address, request_status.request_latitude, 
            request_status.request_longitude, request_status.status, request_status.admNo, request_status.timestamp,
            users_details.firstname,users_details.lastname,users_details.regNum,
            delivery_team_tasks.food_order_code, delivery_team_tasks.delivery_team_id, delivery_team_tasks.team_status
             FROM ((request_status
             INNER JOIN users_details ON request_status.admNo = users_details.regNum)
             INNER JOIN  delivery_team_tasks ON request_status.helpID =  delivery_team_tasks.food_order_code)
             WHERE delivery_team_tasks.delivery_team_id = '".$_SESSION['team_id']."' AND delivery_team_tasks.team_status ='Assigned' ORDER BY timestamp DESC ";
             
            $data_result = mysqli_query($db, $data_fetch_query);
            if ($data_result->num_rows > 0){
                while($row = $data_result->fetch_assoc()) {
                  $student_reg = $row["regNum"];
                  $task_code = $row["helpID"];
                  $_SESSION['food_order_code'] = $task_code;
             
            echo "<tr> <td>" .$row["helpID"].  "</td>";
            echo "<td>" .$row["regNum"]."</td>";
            echo "<td>" .$row["firstname"]." ".$row["lastname"]."</td>";
            echo "<td>" .$row["status"]."</td>";
            echo "<td>" .$row["timestamp"]."</td>";    
            echo "<td>
            <form method ='POST' action='server.php'>
            <input  type='text' hidden  name='task_code' value='$task_code'>        
            <input  type='text'  hidden name='student_reg' value='$student_reg'>
            <input type='submit' id='task-view-button' value='View Task' name='view-task-btn' class='btn btn-success'>
         
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

<!-- script to run modals -->
<script>

</script>

<script src="./static/js/modal.js"></script>
<script src="./static/js/app.js"></script>
<?php include './components/scripts.php';?>
  </body>
</html>
