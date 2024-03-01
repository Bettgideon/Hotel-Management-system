<?php
include 'server.php';
$admin_id = $_SESSION['admin_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
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
                            <h5 style='color:blue; font-weight:normal'>Booked Rooms</h5>
                            <tr>
                                <th scope="col" class="table-primary">Name</th>
                                <th scope="col" class="table-primary">Number</th>
                                <th scope="col" class="table-primary">Room Type</th>
                                <th scope="col" class="table-primary">Image</th>
                                <th scope="col" class="table-primary">Date</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        if ($admin_id) {
                            $data_fetch_query = "SELECT name, number, room_type, image, date FROM room";
                            $data_result = mysqli_query($db, $data_fetch_query);

                            if ($data_result->num_rows > 0) {
                                while ($row = $data_result->fetch_assoc()) {
                                    $name = $row["name"];
                                    $number = $row["number"];
                                    $room_type = $row["room_type"];
                                    $image = base64_encode($row["image"]); // Assuming image is stored as BLOB

                                    echo "<tr>
                                            <td>" . $name . "</td>
                                            <td>" . $number . "</td>
                                            <td>" . $room_type . "</td>
                                            <td><img src='http://localhost:8888/hotel management 1/admin/static/images/upload/. $image; ' alt='Image' style='width: 80px; height: 80px;'>
                                            </td>
                                            <td>" . $row["date"] . "</td>
                                        </tr>";
                                }
                            } else {
                                echo "<td colspan='5'>" . "No Requests Found" . "</td>";
                            }
                        } else {
                            echo "<td colspan='5'>" . "No Data Found" . "</td>";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- Bootstrap and other scripts -->
</body>
</html>
