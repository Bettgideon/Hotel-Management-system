<?php
include 'server.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
<?php include './includes/header.php'; ?>
</head>
  <body>
  <?php include './includes/navbar.php'; ?>
  <div class="container mt-3">
    <!-- First Row -->
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-xl-4 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="./inqueue.php">Requests In Queue</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-arrows-rotate fa-2x" style="color:#e83e8c"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card 1 -->
        
        <!-- Card 2 -->
        <div class="col-xl-4 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="./analytics.php">Statistics</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="./analytics.php">
                                <i class="fas fa-chart-bar fa-2x" style="color: #e83e8c;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card 2 -->
        
        <!-- Card 3 -->
        <div class="col-xl-4 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="./booked.php">Booked Rooms</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fas fa-hotel fa-2x" style="color: #e83e8c;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card 3 -->
    </div>
    <!-- End of First Row -->
    
    <!-- Second Row -->
    <div class="row justify-content-center">
        <!-- Card 4 -->
        <div class="col-xl-4 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="./successful.php">Successful Requests</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-check-double fa-2x" style="color:#e83e8c"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card 4 -->
        
        <!-- Card 5 -->
        <div class="col-xl-4 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="./failed.php">Failed Requests</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-triangle-exclamation fa-2x" style="color:#e83e8c"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card 5 -->
        
        <!-- Card 6 -->
        <div class="col-xl-4 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="./team.php">Delivery Staff</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-person fa-2x" style="color:#e83e8c"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card 6 -->
        
        <!-- Card 7 -->
        <div class="col-xl-4 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="./moderators.php">Moderators (Admins)</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-user-ninja fa-2x" style="color:#e83e8c"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card 7 -->
    </div>
    <!-- End of Second Row -->
</div>

</div>
</div>

    </div>
</div>

  </div>
</div>




    <!--Bootstrap 4 scripts-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End Bootstrap 4 scripts-->
<!-- modal script -->
<script src="./static/js/app.js"></script>
  </body>
</html>
<?php include './includes/footer.php'; ?>