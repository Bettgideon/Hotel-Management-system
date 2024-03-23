<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
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
            max-width: 1100px; /* Adjusted maximum width */
            width: 140%; /* Adjusted width */
            padding: 20px;
            background-color: #ffe6cc; 
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header h2 {
            text-align: center;
            margin-bottom: 20px; /* Increased margin */
            color: #000000; /* Black color for the header */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 14px; /* Reduced font size */
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px; /* Reduced font size */
        }

        ::placeholder {
            font-size: 12px; /* Reduced placeholder font size */
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
            <h2>Password Reset</h2>
        </header>
        <form method="POST" action="server.php" class="login-form">
            <div class="form-group row">
                <?php include 'errors.php'; ?>
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email Address</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter your Email Address" name="delivery_email" required />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <button type="submit" name="password_reset_btn" class="btn btn-info btn-block p-2">
                        <strong>Reset Password</strong>
                    </button>
                </div>
                <div class="col-sm-3"></div>
            </div>
            <hr>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <?php include 'components/scripts.php'; ?>
</body>
</html>
