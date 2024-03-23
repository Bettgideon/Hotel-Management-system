<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <?php include './includes/header.php'; ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d2d6de;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #ffe6cc; 
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            text-align: center;
            margin-bottom: 15px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            text-align: right;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .register-link {
            text-align: center; /* Center the register link */
            margin-top: 20px; /* Add some space between forgot password and register links */
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Admin Login</h1>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </header>
        <form method="post" action="server.php" enctype="multipart/form-data" class="login-form">
            <div class="form-group">
                <?php include 'errors.php'; ?>
                <label for="admin_id">User ID:</label>
                <input type="text" id="admin_id" name="admin_id" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="admin_password">Password:</label>
                <input type="password" id="admin_password" name="admin_password" placeholder="Password" required>
            </div>
            <button type="submit" name="admin_login_btn">Sign in</button>
            
            <br>
           
        </form>
    </div>
    
    <?php include 'components/scripts.php'; ?>
</body>
</html>
