<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shop</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">



</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

    <section class="home">
    
       <div class="swiper home-slider">
       
       <div class="swiper-wrapper">
    
          <div class="swiper-slide slide">
             <div class="image">
                <img src="images/homebackground.png" alt="">
             </div>
             <div class="content">
                <span>upto 50% off</span>
                <h3>Skin Care Products</h3>
                <a href="shop.php" class="btn">shop now</a>
                <div class="create-arrow bounce-4">
                 <img src="images\icon-arrow-down.svg"/>
               
             </div>
             </div>
          </div>
    
        
    
       </div>
          <div class="swiper-pagination"></div>
    
       </div>
    
    </section>

    </div>
<section class="products">

   <h1 class="heading">Latest products</h1>

   <div class="box-container">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="images/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">No products found!</p>';
   }
   ?>

   </div>

</section>

<?php include 'components/user_footer.php'; ?>
 
 <script src="js/script.js"></script>

</body>
</html>
