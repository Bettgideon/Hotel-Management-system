<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Team Login</title>
    <?php include './components/header.php'; ?>
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
            width: 500px;
            padding: 20px;
            background-color: #ffe6cc; 
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header h2 {
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
            padding: 10px; /* Adjust padding as needed */
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
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h2>Delivery Team Login</h2>
        </header>
        <form method="post" action="server.php" class="login-form">
            <div class="form-group row">
                <?php include 'errors.php'; ?>
                <label for="delivery_user_id" class="col-sm-2 col-form-label">UserID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="delivery_user_id" placeholder="User ID" name="delivery_user_id" required />
                </div>
            </div>
            <div class="form-group row">
                <label for="delivery_password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="delivery_password" placeholder="Password" name="delivery_password" required />
                </div>
            </div>
            <div class="form-group row text-center"> <!-- Updated class to center the button -->
                <div class="col-sm-6 mb-2">
                    <a name="forgot_password_btn" class="btn-block p-2 text-success" href="forgot-password.php" style="text-decoration:none;">Forgot Password?</a>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button type="submit" name="delivery_login_btn" class="btn btn-primary btn-block">Sign In</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./static/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
