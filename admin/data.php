
<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the room table
$sql_room = "SELECT * FROM room";
$result_room = $conn->query($sql_room);

$room_data = array();
if ($result_room->num_rows > 0) {
    while($row = $result_room->fetch_assoc()) {
        $room_data[] = $row;
    }
}

// Query to retrieve data from the requests_status table
$sql_requests_status = "SELECT * FROM requests_status";
$result_requests_status = $conn->query($sql_requests_status);

$requests_status_data = array();
if ($result_requests_status->num_rows > 0) {
    while($row = $result_requests_status->fetch_assoc()) {
        $requests_status_data[] = $row;
    }
}

// Query to retrieve data from the failed_list table
$sql_failed_list = "SELECT * FROM failed_list";
$result_failed_list = $conn->query($sql_failed_list);

$failed_list_data = array();
if ($result_failed_list->num_rows > 0) {
    while($row = $result_failed_list->fetch_assoc()) {
        $failed_list_data[] = $row;
    }
}

$conn->close();

// Combine all data into a single array
$data = array(
    'room_data' => $room_data,
    'requests_status_data' => $requests_status_data,
    'failed_list_data' => $failed_list_data
);

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
