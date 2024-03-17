<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Password Reset</title>
    <?php
    include './components/header.php';
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            background-color: #ffe6cc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }

        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Password Reset</h2>
        <?php
        if(isset($_SESSION['email_status'])) {
            ?>
            <div class="alert alert-warning" role="alert">
                <strong><?= $_SESSION['email_status']; ?></strong>
            </div>
            <?php
            unset($_SESSION['email_status']);
        }
        ?>
        <form method="POST" action="server.php">
            <?php include 'errors.php'; ?>
            <div class="form-group">
                <label for="inputEmail3">Username</label>
                <input type="text" class="form-control" id="inputEmail3" placeholder="e.g CIM/0001/021" name="student_username" required />
            </div>
            <div class="form-group">
                <label for="inputEmail3">Email Address</label>
                <input type="email" class="form-control" id="inputEmail3" placeholder="Enter your Email Address" name="student_email" required />
            </div>
            <button type="submit" class="btn btn-primary" name="password_reset_btn">Reset Password</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <?php 
    include 'components/scripts.php';
    ?>
</body>
</html>
