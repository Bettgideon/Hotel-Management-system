<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Registration</title>
  <?php include './components/header.php'; ?>
  <style>
    .container {
      width: 1000px;
      padding: 20px;
      background-color: #d2d6de;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
      background-color: #ffe6cc;
      padding: 20px;
      border-radius: 10px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #666;
    }

    .form-group input {
      width: calc(100% - 20px);
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .form-group::after {
      content: "";
      display: table;
      clear: both;
    }

    .text-center {
      text-align: center;
    }
  </style>
</head>

<body style="background-color: #d2d6de">
  <div class="container register-page-section">
    <div class="row mt-2 register-page-row">
      <div class="col-md-3"></div>
      <div class="col-md-6 mt-5 register-page">
        <div class="col-md-12 mb-2 register-page-header">
          <h2 class="text-center" style="color: #fff; background-color: #3DD498; width: 100%;">
            Hotel Management System User Signup Form
          </h2>
        </div>
        <form method="post" action="server.php" enctype="multipart/form-data" class="register-form" style="background-color: #3DD498; padding: 20px;">
          <div class="form-group">
            <label for="inputEmail4">Username</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="e.g CIM/00022/21" name="regno" required />
          </div>
          <div class="form-group">
            <label for="inputEmail3">First Name</label>
            <input type="text" class="form-control" id="inputEmail3" placeholder="First Name" name="firstname" required />
          </div>
          <div class="form-group">
            <label for="inputEmail7">Last Name</label>
            <input type="text" class="form-control" id="inputEmail7" placeholder="Last Name" name="lastname" required />
          </div>
          <div class="form-group">
            <label for="inputEmail9">Email</label>
            <input type="email" class="form-control" id="inputEmail9" placeholder="Email Address" name="emailaddress" required />
          </div>
          <div class="form-group">
            <label for="inputEmail11">Phone</label>
            <input type="number" class="form-control" id="inputEmail11" placeholder="0710118...." name="phone" required />
          </div>
          <div class="form-group">
            <label for="txtPassword">Password</label>
            <input type="password" class="form-control" id="txtPassword" onkeyup="CheckPasswordStrength(this.value)" placeholder="Password" name="password" required />
            <span id="password_strength"></span>
          </div>
          <div class="form-group">
            <label for="txtPassword2">Confirm Password</label>
            <input type="password" class="form-control" id="txtPassword2" placeholder="Confirm Password" onkeyup="CheckPasswordStrength2(this.value)" name="confirmpassword" required />
            <span id="password_strength_confirm"></span>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-success btn-block" name="register_btn" id="regBtn" style="background-color: #006400;">Register</button>
          </div>
          <div class="login-link text-center">
  <p class="lead">Already have an account?</p>
  <a href="./user.php" class="btn btn-primary">Login Here</a>
</div>

        </form>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) {
        event.preventDefault;
        document.getElementById("regBtn").classList.add('disabled');
  });
  function CheckPasswordStrength(password) {
   let password_strength = document.getElementById("password_strength");


    //TextBox left blank.
    if (password.length == 0) {
      password_strength.innerHTML = "";
      return;
    }

    //Regular Expressions.
    let regex = new Array();
    regex.push("[A-Z]"); //Uppercase Alphabet.
    regex.push("[a-z]"); //Lowercase Alphabet.
    regex.push("[0-9]"); //Digit.
    regex.push("[$@$!%*#?&]"); //Special Character.

    let passed = 0;

    //Validate for each Regular Expression.
    for (let i = 0; i < regex.length; i++) {
      if (new RegExp(regex[i]).test(password)) {
        passed++;
      }
    }

    //Validate for length of Password.
    if (passed > 2 && password.length > 8) {
      passed++;
    }

    //Display status.
    let color = "";
    let strength = "";
    switch (passed) {
      case 0:
      case 1:
        strength = "Weak";
        color = "red";
        break;
      case 2:
        strength = "Good";
        color = "darkorange";
        break;
      case 3:
      case 4:
        strength = "Strong";
        color = "green";
        break;
      case 5:
        strength = "Very Strong";
        color = "darkgreen";
        break;
    }
    password_strength.innerHTML = strength;
    password_strength.style.color = color;

    if(strength != 'Very Strong'){
      document.getElementById("regBtn").classList.add('disabled');
    }if (strength == 'Very Strong') {
      document.getElementById("regBtn").classList.remove('disabled');
    }
  }
  // second password Input
  function CheckPasswordStrength2(password) {
   let password_strength_2 = document.getElementById("password_strength_confirm");


    //TextBox left blank.
    if (password.length == 0) {
      password_strength_2.innerHTML = "";
      return;
    }

    //Regular Expressions.
    let regex = new Array();
    regex.push("[A-Z]"); //Uppercase Alphabet.
    regex.push("[a-z]"); //Lowercase Alphabet.
    regex.push("[0-9]"); //Digit.
    regex.push("[$@$!%*#?&]"); //Special Character.

    let passed = 0;

    //Validate for each Regular Expression.
    for (let i = 0; i < regex.length; i++) {
      if (new RegExp(regex[i]).test(password)) {
        passed++;
      }
    }

    //Validate for length of Password.
    if (passed > 2 && password.length > 8) {
      passed++;
    }

    //Display status.
    let color = "";
    let strength = "";
    switch (passed) {
      case 0:
      case 1:
        strength = "Weak";
        color = "red";
        break;
      case 2:
        strength = "Good";
        color = "darkorange";
        break;
      case 3:
      case 4:
        strength = "Strong";
        color = "green";
        break;
      case 5:
        strength = "Very Strong";
        color = "darkgreen";
        break;
    }
    password_strength_2.innerHTML = strength;
    password_strength_2.style.color = color;

    if(strength != 'Very Strong'){
      document.getElementById("regBtn").classList.add('disabled');
    }if (strength == 'Very Strong') {
      document.getElementById("regBtn").classList.remove('disabled');
    }


  }

document.getElementById('regBtn').addEventListener('click',function(e){
 
let pass1 = document.getElementById('txtPassword').value;
let pass2 = document.getElementById('txtPassword2').value;

if(pass1 !== pass2){
  e.preventDefault();
  Toastify({
  text: "Passwords Do Not Match! ⚠ ",
  className: "warning",
  style: {
    background: "#ffc107",
    color: 'black',
  }
}).showToast();
}else if (pass1 === pass2) {
  Toastify({
  text: "Passwords Matched",
  className: "success",
  style: {
    background: "#28a745",
    color: 'white',
  }
}).showToast();
} 

});
</script>
<?php
include 'components/scripts.php';
?>
  </body>
</html>
