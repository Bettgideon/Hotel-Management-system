

<?php
require 'server.php.';

?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href=".\static\css\roomcss\roompics\book.css">  
</head>    
<body>
    <div class="container">
    
    <form action="" method="post" enctype="multipart/form-data">
        
            <div class="row">
                <div class="col">
                    <h3 class="title">Book A Room</h3>
                    <div class="inputBox">
                        <span>NAME:</span>
                        <input type="text" placeholder="name" name="name" class="input">
                    </div>
                    <div class="inputBox">
                        <span>phone number:</span>
                        <input type="text" name="number" placeholder="phone number" class="input">
                    </div>
                    <div class="inputBox">
                        <span>type of room:</span>
                        <input type="text" name="room_type" placeholder="type of room" class="input">
                    </div>
                    <div class="inputBox">
                        <span>ID FRONT Image:</span>
                        <input type="file" name="image"  accept=".jpg, .jpeg, .png" value="" />
                    </div>
                    
                    <div class="inputBox">
                        <span>Date:</span>
                        <input type="date" name="date" placeholder="january" class="input">
                    </div>
            
            </div>
        </div>
        <input type="submit"  name="submit" value="BOOK NOW" class="submit-btn">
     </form>
    </div>

       
    
</body>
</html>
