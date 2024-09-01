
<?php
 session_start();
 include("connection.php");
 $userprofile=$_SESSION['USERNAME'];
 if ($userprofile == true)
  {
   
 }
 else{
  header("location:l.php");
 }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant</title>
    
 
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
        <input type="checkbox" name="" id="" />
        <div class="hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
        <ul class="menu-items">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#food">Menu</a></li>
          <li><a href="./user/Reservation.php">Reservation</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="./addtocart.php">Add to cart</a></li>
          <li><a href="./user/index.php"><?php echo $_SESSION['USERNAME']; ?></a></li>          
        </ul>
        <h1 class="logo">Red Chillies</h1>
      </div>
    </nav>
    <section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <h1 class="main-title" id="home">Eat Right Food</h1>
        <p>Eat Healty, it is good for our health.</p>
        <a href="#food" class="btn btn-primary">Menu</a>
      </div>
    </section>
    <section id="about">
      <div class="about-wrapper container">
        <div class="about-text">
          <p class="small">About Us</p>
          <h2>We've been making healthy food last for 10 years</h2>
          <p>
            Red Chillies is one of India's most beloved restaurants since it has
            been sharing the warmth and affection of real food for ten years. We
            provide you with real food created with love, wonderful flavor, and
            outstanding quality that was inspired by the family recipes of
            famous chefs.
          </p>
        </div>
        <div class="about-img">
          <img src="./assets/food.jpg" alt="food" />
        </div>
      </div>
    </section>
    <section id="food">
      <h2>Menu</h2>
      <div class="food-container container">
        <div class="food-type main course">
          <div class="img-container">
            <img src="./assets/paneer.jpg" alt="error" />
            <div class="img-content">
              <h3>Main Course</h3>
              <a href="./Main_course.php" class="btn btn-primary"
                >learn more</a
              >
            </div>
          </div>
        </div>
        <div class="food-type Hot & Spicy">
          <div class="img-container">
            <img src="./assets/Chowmein.jpg" alt="error" />
            <div class="img-content">
              <h3>Hot & Spicy</h3>
              <a href="./Hot&Spicy.php" class="btn btn-primary">learn more</a>
            </div>
          </div>
        </div>
        <div class="food-type drinks">
          <div class="img-container">
            <img src="./assets/Strawberry.jpg" alt="error" />
            <div class="img-content">
              <h3>Drinks</h3>
              <a href="./Drinks.php" class="btn btn-primary">learn more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Bestseller</h2>
        <div class="food-menu-container container">
        <?php
    $query = "SELECT * FROM `bestsaller` ";
    $data = mysqli_query($con, $query);

    $total = mysqli_num_rows($data);

    if ($total != 0) {
        while ($result = mysqli_fetch_assoc($data)) {
            echo "
            <div class='food-menu-item'>
                <div class='food-img'>
                    <img class='menu-item-image' src='" . $result['FOOD_IMAGE'] . "' alt='" . $result['FOOD'] . "'>
                </div>
                <div class='food-description'>
                   <h3 class='menu-item-heading'>
                      <span class='menu-item-name'>" . $result['FOOD'] . "</span>
                   </h3>
                   <p class='menu-item-description'>" . $result['DESCRIPTIONS'] . "</p>
                   <h3 class='menu-item-heading'>
                      <span class='menu-item-price'>&#8377;" . $result['PRICE'] . "</span>
                   </h3>
                   <a href='./cartlinker.php?food_id= $result[FOOD_ID];'><button type='submit' class='btn btn-primary'>Add To Cart</button></a>
                </div>
            </div>
            ";
        }
    }
?>


            
           
            
           
           
        </div>
    </section>
    <section id="testimonials">
      <h2 class="testimonial-title">What Our Customers Say</h2>
      <div class="testimonial-container container">
        <div class="slider-container">
          <div class="slider">
            <div class="slide">
              <div class="testimonial-box">
                <div class="customer-detail">
                  <div class="customer-photo">
                    <img src="./assets/image24.jpeg" alt="" />
                    <p class="customer-name">Harsh Raj</p>
                  </div>
                </div>
                <div class="star-rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                  Loved everything about this place, from the traditional cozy
                  ambience to the taste of authentic food, I would recommend it
                  to everyone.
                </p>
              </div>
            </div>
            <div class="slide">
              <div class="testimonial-box">
                <div class="customer-detail">
                  <div class="customer-photo">
                    <img src="./assets/image25.jpeg" alt="" />
                    <p class="customer-name">Akriti Singh</p>
                  </div>
                </div>
                <div class="star-rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                  I fell in love with Veg Biryani!! This place really knows how
                  to cook authentic food, I will be definitely coming back.
                </p>
              </div>
            </div>
            <div class="slide">
              <div class="testimonial-box">
                <div class="customer-detail">
                  <div class="customer-photo">
                    <img src="./assets/image23.jpg" alt="" />
                    <p class="customer-name">Bikram Bhagat</p>
                  </div>
                </div>
                <div class="star-rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                  Been coming here since it first opened and have never had any
                  complaints.The food is fantastic and the staff are always
                  friendly and helpful. Rasmalai is to die for.
                </p>
              </div>
            </div>
            <div class="slide">
              <div class="testimonial-box">
                <div class="customer-detail">
                  <div class="customer-photo">
                    <img src="./assets/image64.jpeg" alt="" />
                    <p class="customer-name">Surbhi Kachhap</p>
                  </div>
                </div>
                <div class="star-rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    "Mouthwatering delights! Each dish was a burst of flavor. The staff's passion for food and hospitality was 
                    evident, making our dining experience exceptional."
                </p>
              </div>
            </div>
            <div class="slide">
                <div class="testimonial-box">
                  <div class="customer-detail">
                    <div class="customer-photo">
                      <img src="./assets/image65.jpeg" alt="" />
                      <p class="customer-name">Manish Modi</p>
                    </div>
                  </div>
                  <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <p class="testimonial-text">
                    "Absolutely loved the exquisite flavors of the dishes! The ambiance was charming, and the service was 
                    impeccable. A delightful culinary experience!"
                  </p>
                </div>
              </div>
              <div class="slide">
                <div class="testimonial-box">
                  <div class="customer-detail">
                    <div class="customer-photo">
                      <img src="./assets/image66.jpeg" alt="" />
                      <p class="customer-name">Suraj Kumar</p>
                    </div>
                  </div>
                  <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <p class="testimonial-text">
                    "Outstanding cuisine! Every dish was a masterpiece. The cozy atmosphere and attentive service added 
                    to the overall enjoyment. Highly recommend for a special evening."
                  </p>
                </div>
              </div>
              <div class="slide">
                <div class="testimonial-box">
                  <div class="customer-detail">
                    <div class="customer-photo">
                      <img src="./assets/image67.jpeg" alt="" />
                      <p class="customer-name">Sneha Priya</p>
                    </div>
                  </div>
                  <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <p class="testimonial-text">
                    "A hidden gem! The menu offers a perfect blend of flavors. 
                    Our dining journey was filled with joy, and the staff's attention to detail made it memorable."
                  </p>
                </div>
              </div>
              <div class="slide">
                <div class="testimonial-box">
                  <div class="customer-detail">
                    <div class="customer-photo">
                      <img src="./assets/image68.jpeg" alt="" />
                      <p class="customer-name">Gautam Gunjan</p>
                    </div>
                  </div>
                  <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <p class="testimonial-text">
                    "Five-star dining! The quality of the ingredients and the chef's skill are unparalleled. The staff 
                    is friendly, making every visit a memorable occasion. Highly recommended!"
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="contact-container container">
        <div class="contact-img">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17424.655935802497!2d85.304501395363!3d23.34901900455421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e1ad27cc186d%3A0xa84bdf2068b4dc83!2sRed%20Chillies!5e0!3m2!1sen!2sin!4v1704696568208!5m2!1sen!2sin"
            width="400"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <?php
         if($_SERVER['REQUEST_METHOD']=="POST")
         {
           $NAME=  $_POST["NAME"];        
           $EMAIL = $_POST['EMAIL'];
           $MESSAGE= $_POST['MESSAGE'];
         
           if(!empty($NAME) && !empty($EMAIL) && !empty($MESSAGE)  )
           {
          $query ="Insert into feedback(NAME,EMAIL,MESSAGE)values('$NAME',' $EMAIL','$MESSAGE')";
        
            $register=mysqli_query($con,$query);
           
           }
          }
        ?>

        <div class="form-container">
          <h2>Feedback</h2>
          <form method="post">
          <input type="text" name="NAME" placeholder="Your Name" />
          <input type="email"name="EMAIL" placeholder="E-Mail" />
          <textarea
            cols="30"
            rows="6"name="MESSAGE"
            placeholder="Type Your Message"
          ></textarea>
            
            <input type="submit" value="Submit" onclick = "return check()">
                    
          </form>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Know more</h4>
            <ul>
              <li><a href="#about">About us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="./Term.PHP">Terms & condition</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Quiks Links</h4>
            <ul>
              <li><a href="#">Admin</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
   </footer>
    <script src="./js/script.js"></script>
    <script>
		function check()
		{
			return confirm('Are you sure you want to give feedback ? ')
		}
 </script>
  </body>
</html>
