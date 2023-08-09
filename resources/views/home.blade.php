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
                 <a  href="about">About</a>
                 <a href="#">Packages</a>
                 <a  href="#">Book</a>
     </nav>
     <div id="menu-btn" class="fas fa-bars"></div>
   
   </section>
   <section id="body-section">
    <div class="content">
     <span>Explore. Discover. Travel</span>
       <h3 id="h1">Travel around the world</h3>
       
      <div class="discover">
        <a class="btn-link" href="#">Discover Tour</a>
      </div>
    </div>
   </section>
   <section id="services-section">
     <h2 class="headline-title">our services</h2>
     <div class="services">
       <div class="card" style="--clr:#7895CB;">
         <div class="box">
           <div class="icon">
             <div class="iconBox">
               <i class="fa-solid fa-mountain"></i>
             </div>
           </div>
           <div class="content">
             <p>Adventure</p>
           </div>
         </div>
       </div>

       <div class="card" style="--clr:#7895CB;">
         <div class="box">
           <div class="icon">
             <div class="iconBox">
               <ion-icon name="book-outline"></ion-icon>
             </div>
           </div>
           <div class="content">
             <p>Tour guide</p>
           </div>
         </div>
       </div>

       <div class="card" style="--clr:#7895CB;">
         <div class="box">
           <div class="icon">
             <div class="iconBox">
               <i class="fa-solid fa-person-walking"></i>
             </div>
           </div>
           <div class="content">
             <p>Trekking</p>
           </div>
         </div>
       </div>

       <div class="card" style="--clr:#7895CB;">
         <div class="box">
           <div class="icon">
             <div class="iconBox">
             
               <i class="fa-solid fa-fire-flame-curved"></i>

             </div>
           </div>
           <div class="content">
             <p>Camp fire</p>
           </div>
         </div>
       </div>

       <div class="card" style="--clr:#7895CB;">
         <div class="box">
           <div class="icon">
             <div class="iconBox">
               <i class="fa-solid fa-signs-post"></i>
             </div>
           </div>
           <div class="content">
             <p>Off road</p>
           </div>
         </div>
       </div>

       <div class="card" style="--clr:#7895CB;">
         <div class="box">
           <div class="icon">
             <div class="iconBox">
                 <i class="fas fa-campground"></i>
             </div>
           </div>
           <div class="content">  
             <p>Camping</p>
           </div>
         </div>
       </div>
       
     </div>

   </section>
   <section id="about-section">
     <div class="about-us">
       
       <div class="image">
         <img id="img"src="images/plane.jpg">
       </div>
       <div class="abt">
         <h2>About us</h2>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis fuga eveniet porro laboriosam deleniti optio voluptatem animi accusamus. Vero, nesciunt. Nesciunt alias ex cum eveniet consequatur eaque delectus eius explicabo? Deserunt modi minus illo, consequuntur accusamus eveniet iusto nostrum mollitia?</p>
         <a class="btn-link" href="#">Read More</a>
       </div>
       
     </div>
   </section>
   <section class="packages">
     <h1 class="headline-title">our packages</h1>
     {{-- <p>Experience the world like never before with our exceptional travel packages. Our passion for travel drives us to create unique and immersive journeys that showcase the beauty of each destination. From adrenaline-pumping activities to serene getaways, our packages cater to diverse travel preferences.</p> --}}
     {{-- <div class="box-container">
      <div class="box">
        @foreach($package as $package)
        <div class="image">
          <img src="{{ asset('storage/'.$package->image) }}" class="card-img-top" alt="...">
        </div>
        <div class="content">
          <h3>{{$package->title}}</h3>
          <p >{{$package->description}}.</p>
          <a href="#" class="btn btn-primary">Book Now</a>
        </div>
        @endforeach 
      </div> --}}
      
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/t1.jpg">
          </div>
          <div class="content">
            <h3>Mombasa</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, dolorum!</p>
            <a href="booking.blade.php" class="btn-link">Book now</a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/t2.jpg">
          </div>
          <div class="content">
            <h3>Dubai</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, dolorum!</p>
            <a href="booking.blade.php" class="btn-link">Book now</a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/t3.jpg">
          </div>
          <div class="content">
            <h3>Zanzibar</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, dolorum!</p>
            <a href="booking.blade.php" class="btn-link">Book now</a>
          </div>
        </div>
      </div>
       
      <div id="loadmore"><a href="package.blade.php" class="btn-link">Load more</a></div>
       
     </div>
 
   </section>
 <section class="home-offer">
  <div class="content">
    <h3>upto 50% offer</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque consectetur necessitatibus molestias minima officiis doloremque, doloribus magnam. Blanditiis, corporis placeat?</p>
    <a href="book.blade.php" class="btn-link">Book now</a>
  </div>
 </section>

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