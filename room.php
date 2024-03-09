<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .class-home {
            font-size: 18px; /* Adjust the font size as needed */
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .class-home:hover {
            background-color: #0056b3;
        }
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 20px;
}

.read {
    margin-bottom: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    max-width: 300px;
    position: relative; /* Add position relative to make position absolute work */
}

.read img {
    width: 100%;
    height: auto;
}

.read-text {
    padding: 20px;
    position: relative; /* Add position relative */
}

.read-text h5 {
    margin-top: 0;
    font-size: 20px;
}

.read-text p {
    margin-bottom: 15px;
    font-size: 16px;
    color: #666;
}

.discount {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
}

.discount span {
    font-weight: bold;
}

.book-btn {
    position: absolute;
    bottom: 10px; /* Adjust as needed */
    left: 50%;
    transform: translateX(-50%);
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.book-btn:hover {
    background-color:#2be307;
}

    </style>
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
         Hotel Management Information System
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
                <h5>Deluxe Room</h5>
                <p>Ksh50,000/night</p>
                <div class="book">
                <a href="#">5%discount</a><br><br><br><br>
                    <a href="booking.php" class="book-btn">Book Now</a>
                </div>
            </div>
        </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed2.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Single room</h5>
                     <p>Ksh80,000/night</p>
                    </div>
                  <div class="book"><a href="#">5%discount</a></div><br><br><br><br>
                  <a href="booking.php" class="book-btn">Book Now</a>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed3.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Double Room</h5>
                     <p>Ksh20,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div><br><br><br><br>
                    <a href="booking.php" class="book-btn">Book Now</a>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed4.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Child Room</h5>
                     <p>Ksh140,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div>
                    <a href="booking.php" class="book-btn">Book Now</a><br><br><br><br>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed5.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Couple Room</h5>
                     <p>Ksh120,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div>
                    <a href="booking.php" class="book-btn">Book Now</a><br><br><br><br>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed6.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Elegant Room</h5>
                     <p>Ksh140,000/night</p>
                    </div>
                    <div class="book"><a href="#">2.5%discount</a></div><br><br><br><br>
                    <a href="booking.php" class="book-btn">Book Now</a>
                </div>
          </div>
          <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed7.jpg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Personal Room</h5>
                     <p>Ksh80,000/night</p>
                    </div>
                    <div class="book"><a href="#">5%discount</a></div><br><br><br><br>
                    <a href="booking.php" class="book-btn">Book Now</a>
                </div>
          </div>
       <div class="read">
              <img src=".\static\css\roomcss\roompics\img\bed8.jpeg" alt="">
              <div class="read-text">
                  <div>
                     <h5>Presidential Room</h5>
                     <p>Ksh300,000/night</p>
                  </div>
                   <div class="book"><a href="#">25%discount</a></div><br><br><br><br>
                   <a href="booking.php" class="book-btn">Book Now</a>
                </div>
          </div>
      </div>
      <section id="book-session">
		<div class="book">
    <a href="booking.php" class="book-btn">Book Now</a>
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
