<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href=".\static\css\roomcss\rooms.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/.\static\css\roomcss\bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel=”stylesheet” href=”.\static\css\roomcss\bootstrap.css”>
    <link rel=”stylesheet” href=”.\static\css\roomcss\bootstrap-responsive.css”>
    <link rel="stylesheet" type="text/css" href=".\static\css\roomcss\style.css">  
    <title>Rooms & Rates</title>
  </head>
  <body>
              <!-- HEADER -->
    <header class ="d-flex flex-row justify-content-between p-4">
      <span class="landingpage-header-logo p-2">
          HOTELFRENZ
      </span>
      <nav class="">
        <ul class="nav justify-content-end">
            <li class="nav-item header-nav-item">
              <a class=" class-home nav-link active" href="dashboard.php">HOME</a>
            </li>
            <!--
            <li class="nav-item header-nav-item">
              <a class=" class-room nav-link" href="room.html">ROOMS & SUITES</a>
            </li>
            <li class="nav-item header-nav-item">
              <a class="  class-fac nav-link" href="facilities.html">FACILITIES</a>
            </li>
            <li class="nav-item header-nav-item ">
                <a class=" class-contact nav-link" href="contactUs.html">CONTACT US</a>
              </li>
-->
          </ul>
      </nav>
  </header>
              <!-- SPECIAL OFFER -->
    <div id="contact_one">
      <div class="contact_one_text">
        <h1>OUR ROOMS</h1>
      </div>
      <div class="specialoffer">
        <img
          src="https://res.cloudinary.com/dtyrfo0fx/image/upload/v1591633734/hng%20granite/specialoffer.svg"
          alt="Special Offer on Booking 80% on more than 4 days"/>
      </div>
    </div>
              <!-- ROOMS -->
    <section class="rooms">
      <div class="content">
          <h2>More than just a Hotel...</h2>
          <p>
              Come experience a time of pleasantries in a serene and peaceful environment, with a view that makes 
              you live in the moment,Come ans experience magic... Make a wish
           </p>
   </div>
      <div class="cards">
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed1.jpg" alt="">
              <div class="read-text">
                <div>
                   <h5>Deluxe Room</h5>
                   <p>N150,000/night</p>
                  </div>
                  <div class="book"><a href="#">5%discount</a></div>
              </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed2.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Single room</h5>
                     <p>N80,000/night</p>
                    </div>
                  <div class="book"><a href="#">5%discount</a></div>
                    
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed3.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Double Room</h5>
                     <p>N120,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed4.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Child Room</h5>
                     <p>N140,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed5.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Couple Room</h5>
                     <p>N120,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed6.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Elegant Room</h5>
                     <p>N140,000/night</p>
                    </div>
                    <div class="book"><a href="#">2.5%discount</a></div>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed7.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Personal Room</h5>
                     <p>N80,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div>
                </div>
          </div>
       <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed8.jpeg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Presidential Room</h5>
                     <p>N300,000/night</p>
                  </div>
                   <div class="book"><a href="#">25%discount</a></div>
                </div>
          </div>
      </div>
      <section id="book-session">
		<div class="book">
   			         <a href="booking.php" class="book_btn ">Book A room</a>
		</section>

</body>
</html>

           <!-- DISCOUNT -->
<section>
      <h3>Discounts</h3>
<div class="discount">
  <div class="details">
    <img src=".\static\css\roomcss\roompics\img\honeymoon.jpg" alt="" /> <br />
    <span>Discount for honeymoon-ers</span>
    <p>
      Start your marriage with an experience from us, Take advantage of our
      discount for Lovebirds who just got married
    </p>
  </div>

  <div class="details">
    <img src=".\static\css\roomcss\roompics\img\couple.jpg" alt="" /> <br />
    <span>Discount for Couples Getaway</span>
    <p>
      Getting bored at home, Take advantage of our Couple's weekend Getaway
      discount. Come experience the magic
    </p>
  </div>

  <div class="details">
    <img src=".\static\css\roomcss\roompics\img\family.jpg" alt="" /> <br />
    <span>Discount for Family Getaway</span>
    <p>
      Bring your family to experience a weekend of fun and relaxation. Take
      advantage of our family Getaway package
    </p>
  </div>
</div>
</section>
            <!-- FOOTER -->
      
        
        <div id="polka">
         <div class="fifth-row">
        
        <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            
            
    </div>
          <div class="fourth-row">
        
        <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            
            
    </div>
        <div class="third-row">
        
        <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            
            
    </div>
          <div class="second-row">
        
        <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot dot-hidden"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            
            
    </div>
        <div class="first-row">
        
        <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>
            <div class="dot"> </div>              
    </div>
        </div>
        </div>
    
  </body>
</html>
