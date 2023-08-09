<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel and tour</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
 
</head>
<body>
    
     <div class="main">
      <section class="header">

         <a href="#" class="logo">SafariWays</a>
         
         <nav class="navbar">
                 <a  href="#">Home</a>
                 <a  href="about.blade.php">About</a>
                 <a href="#">Packages</a>
                 <a  href="#">Book</a>
     </nav>
     <div id="menu-btn" class="fas fa-bars"></div>
   
   </section>
   <div class="heading" style="background:url('images/background.jpg') no-repeat">
    <h1>About us</h1>
  </div>

   <section class="about">

   <div class="image">
    <img src="images/t3.jpg">
   </div>

   <div class="content">
    <h3>Why choose us?</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, ipsum blanditiis. Voluptatum eius id optio cum cumque sunt nulla consequuntur quaerat culpa facere asperiores, voluptates, ab vero maxime, ratione enim.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta enim excepturi quis velit id vel maxime obcaecati doloremque repellendus sit!</p>
      
      <div class="icons-container">
        <div class="icons">
      <i class="fas fa-map"></i>
      <span>top destinations</span>
        </div>
        <div class="icons">
          <i class="fas fa-hand-holding-usd"></i>
          <span>affordable price</span>
            </div>
            <div class="icons">
              <i class="fas fa-headset"></i>
              <span>24/7 guide service</span>
                </div>
      </div>
   </div>

   </section>
   {{-- reviews section starts here --}}
   <section class="reviews">
    <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
        <div class="slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque perferendis earum mollitia, veniam molestias explicabo repellat eligendi impedit sequi? Deserunt facilis sint dicta similique vitae accusamus id debitis molestias autem.</p>
          <h3>John doe</h3>
          <span>traveller</span>
          <img src="images/r1.jpg">
        </div>

        <div class="slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           
          </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae in temporibus quisquam laudantium quas provident magni, facilis necessitatibus iste harum ab eligendi vero excepturi. Natus quod quo soluta obcaecati fugiat earum fuga laudantium dignissimos optio.</p>
          <h3>Jane doe</h3>
          <span>traveller</span>
          <img src="images/r3.jpg">
        </div>

        <div class="slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           
          </div>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis similique nihil ratione! Quidem architecto, repudiandae, saepe mollitia itaque eaque incidunt, id consequatur facilis in et.</p>
          <h3>Walter chelimo</h3>
          <span>traveller</span>
          <img src="images/r2.jpg">
        </div>

        <div class="slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, delectus placeat? Similique doloremque sapiente provident fugit obcaecati nemo quasi fugiat deleniti illum quia voluptate perspiciatis, sed culpa id repudiandae architecto consequuntur ipsa illo eveniet in odit recusandae expedita maiores voluptas.</p>
          <h3>Amanda cheryl</h3>
          <span>traveller</span>
          <img src="images/r4.jpg">
        </div>

        <div class="slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita error cupiditate commodi iste numquam quam?</p>
          <h3>John Walker</h3>
          <span>traveller</span>
          <img src="images/r5.jpg">
        </div>
      </div>
    </div>
   </section>
   {{-- reviews section ends here --}}
   
   <script src="js/script.js"></script>
<section class="footer">
  <div class="box-container">

    <div class="box">
      <h3>Quick links</h3>
      <a href="Home" > <i class ="fas fa-angle-right"></i>Home</a>
      <a href="About" > <i class="fas fa-angle-right"></i>About</a>
      <a href="booking" > <i class="fas fa-angle-right"></i>Book</a>
      <a href="Packages" > <i class="fas fa-angle-right"></i>Packages</a>
    </div>
    <div class="box">
      <h3>Extra links</h3>
      <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
      <a href="#" > <i class="fas fa-angle-right"></i>About us</a>
      <a href="#" > <i class="fas fa-angle-right"></i>privacy policy</a>
      <a href="#" > <i class="fas fa-angle-right"></i>Terms of use</a>
    </div>
    <div class="box">
      <h3>Contact-info</h3>
      <a href="#" ><i class="fas fa-phone"></i>+254 712 876 347</a>
        <a href="#" > <i class="fas fa-envelope"></i>info@tourtravel.com</a>
        <a href="#" ><i class="fas fa-map"></i>Nairobi, Kenya</a>
      
    </div>
    <div class="box">
      <h3>Follow us</h3>
      <a href="#" ><i class="fab fa-facebook"></i>Facebook</a>
      <a href="#" ><i class="fab fa-instagram"></i>Instagram</a>
      <a href="#" ><i class="fab fa-twitter"></i>Twitter</a>
    </div>
  </div>
  <div class="credit">created by <span> Jovine cheryl</span> | all rights reserved!</div>
</section>
<script src="js/script.js"></script>
</body>
</html>