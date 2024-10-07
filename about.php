<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
         
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/back2.jpeg" alt="">
      </div>

      <div class="content">
         <h3>Our Story</h3>
         <p>MenSkincare has been quietly revolutionising the world of men’s cosmetics. Marked by its fresh, contemporary brand design, our skincare range has been developed specifically for the active modern man. At MenSkincare, we believe that looking after your skin should be straightforward and convenient. Whether you want to clean or hydrate, fight signs of ageing or simply tone your skin, our compact skincare range has you covered.   
            Packed with natural, rejuvenating ingredients to help detoxify your skin and leave you feeling refreshed and radiant, MenSkincare skincare products work to preserve, protect and nourish – resulting in better-looking and healthier skin for you.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/wil.jpeg" alt="">
         <p>I have been using Skin care products over 6 months and have been very pleased with 
            the results. I have tried other moisturizers in the past and have always broken 
            out. I just about gave up on the idea of moisturizing before bed when I decided 
            to give Lumin a try. Not only
             have I not broken out for daily use, but my overall skin tone has improved</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Moses</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/tom.jpeg" alt="">
         <p>MenSkincare is my new favourite skincare brand, 
            they use such sleek and crisp designs and t
            he products are of the highest quality!
            I’ve always been jealous of the wonderfully lavish facial routines used by my female friends and now 
            I finally have them asking me to use my products! Thanks LUMIN you really have lit up my life
            </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Peter</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/povilas.jpeg" alt="">
         <p>Perfect price, size and quality balance. I always had issues with my skin, just because of buying 
            different products for skincare every time. But now I’m very 
            satisfied with my Lumin deal. Every 2 months I receive 3 products
             and I don’t need to think of, where and when I should go and get a
              new one. The products comes in a small ball bag, that I often love
               to take it with me to the gym in the morning.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>    

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<?php include 'components/user_footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
