<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include './components/header.php';
?>
  <body style="background-color: #d2d6de;">
    <div class="container">
      <div class="row mt-5 login-page-row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-5 login-page">
          
        <div class="col-md-12 mb-2 login-page-header" >
            <h2 class="text-center" style="color: #fff">Delivery team Login</h2>

            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4 text-center">
                <img
                  src="./static/img/logo.png"
                  class="img-fluid"
                  height="100"
                  width="100"
                />
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>


          <form method="post" action="server.php" class="login-form">
            <div class="form-group row">
            <?php
            include 'errors.php';
            ?>
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >UserID</label
              >
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  id="inputEmail3"
                  placeholder="User ID"
                  name="delivery_user_id" required
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >Password</label
              >
              <div class="col-sm-10">
                <input
                  type="password"
                  class="form-control"
                  id="inputPassword3"
                  placeholder="Password"
                  name="delivery_password" required
                />
              </div>
            </div>

            <div class="form-group row">

            <div class="col-sm-6 mb-2">
                            <a name="forgot_password_btn" class="btn-block p-2 text-success" href="forgot-password.php" style="text-decoration:none ;">
                               Forgot Password ?
                            </a>
                        </div>
          
            <div class="col-sm-3"></div>
              <div class="col-sm-3">
                <button
                  type="submit"
                  name="delivery_login_btn"
                  class="btn btn-primary btn-block"
                >
                  Sign In
                </button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="./static/js/app.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
