<?php
session_start(); // Start the session

// Check if the room name parameter is set in the URL
if(isset($_GET['room_name'])) {
    $room_name = $_GET['room_name'];
} else {
    $room_name = ''; // Default value if parameter is not set
}

// Check if the user's information is stored in the session
if(isset($_SESSION['name']) && isset($_SESSION['phone'])) {
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
} else {
    $name = ''; // Default value if name is not set in session
    $phone = ''; // Default value if phone number is not set in session
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./static/css/roomcss/roompics/book.css">  
</head>    
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <h3 class="title">Book A Room</h3>
                    <div class="inputBox">
                        <span>NAME:</span>
                        <input type="text" placeholder="name" name="name" class="input" value="<?php echo $name; ?>">
                    </div>
                    <div class="inputBox">
                        <span>Phone number:</span>
                        <input type="text" name="number" placeholder="phone number" class="input" value="<?php echo $phone; ?>">
                    </div>
                    <div class="inputBox">
                        <span>Type of room:</span>
                        <input type="text" name="room_type" placeholder="type of room" class="input" value="<?php echo $room_name; ?>">
                    </div>
                    <div class="inputBox">
                        <span>Date:</span>
                        <input type="date" name="date" placeholder="january" class="input">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" value="BOOK NOW" class="submit-btn" style="color: white;">
        </form>
    </div>
</body>
</html>
