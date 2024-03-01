<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Password Update</title>
  <?php
include './components/header.php';
?>
  </head>

<body style="background-color: #d2d6de;">
    <div class="container">

        <div class="row mt-5 login-page-row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5 login-page">
                <?php
                    if(isset($_SESSION['email_status']))
                        {
                            ?>
                                <div class="alert alert-success">
                                    <h5><?= $_SESSION['email_status']; ?></h5>
                                </div>
                            <?php
                                unset($_SESSION['email_status']);
                        }
                ?>
                <div class="col-md-12 mb-2 login-page-header">
                    <h2 class="text-center" style="color: #fff">Change Password</h2>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 text-center">
                            <img src="./static/img/logo.png" class="img-fluid" height="100" width="100" />
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>


                <form method="post" action="server.php" class="login-form">
                <?php
            include 'errors.php';
            ?>
                 <div class="form-group row">
                        <!-- <label for="inputEmail3" hidden class="col-sm-4 col-form-label">Reset Token</label> -->
                        <div class="col-sm-8">
                            <input type="text" hidden value="<?php if(isset($_GET['token'])){echo $_GET['token'];}?>" class="form-control" id="inputEmail3" placeholder="Token" name="reset_token"
                                readonly required />
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputEmail3" placeholder="New Password" name="student_pass1"
                               required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password"
                                name="student_pass2"  required/>
                        </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-sm-2">
                           
                        </div>
                        <div class="col-sm-8">
                        <button type="submit" name="update_password_btn" class="btn btn-success btn-block p-2">
                              <strong> Update Password</strong>
                            </button>
                        </div>
                        <div class="col-sm-2">
                            
                        </div>
                    </div>
                

                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
  <?php 
  include 'components/scripts.php';
  ?>

</body>

</html>