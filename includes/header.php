
 <?php
    
    session_start();
    include("includes/db.php");
    include("functions/functions.php");
    
    ?>  
    
    <?php
    if(isset($_GET['pro_id'])){
        
        $product_id = $_GET['pro_id'];
        
        $get_product = "select * from products where product_id=$product_id";
        
        $run_product = mysqli_query($con,$get_product);
        $row_product = mysqli_fetch_array($run_product);
        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        
        $get_p_cat = "select * from products_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>M-DevStore</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    
</head>
<body>
    
        
<div id="top">   <!-- Top begin-->
    
    <div class="container">  <!-- container begin -->
        
        <div class="col-md-6 offer"> <!-- col-md-6 offer begin -->
            
            <a href="#" class="btn btn-success btn-sm">
            
            <?php
            
            if(!isset($_SESSION['customer_email'])){
                
                echo "Welcome: Guest";
                
            }else{
                
                echo "Welcome: " . $_SESSION['customer_email'] . "";
                
            }
            
            ?>
            <?php 
                       
                       $ip_add = getRealIpUser();
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       $run_cart = mysqli_query($con,$select_cart);
                       $count = mysqli_num_rows($run_cart);
                       
                       
                       ?>
            
            </a>
            <a href="checkout.php"><?php echo $count; ?> items in your cart | Shopping price Total Price $300</a>
            
        </div> <!-- col-md-6 offer finish -->
        
        <div class="col-md-6"> <!-- col-md-6 begin -->
            
            <ul class="menu">  <!-- cmenu begin -->
                
                <li>
                    <a href="customer_register.php">Register</a>
                </li>
                <li>
                    <a href="customer/my_account.php">My Account</a>
                </li>
                <li>
                    <a href="cart.php">Go To Cart</a>
                </li>
                <li>
                    <a href="checkout.php">
                        
                        <?php 
                        
                        if(!isset($_SESSION['customer_email'])){
                            
                            echo "<a href='checkout.php'> Login </a>";
                            
                        }else{
                            
                            echo "<a href='logout.php'> Log Out </a>";
                            
                        }
                        
                        ?>
                        
                    </a>
                </li>
                
            </ul> <!-- cmenu end -->
            
        </div>  <!-- col-md-6 finish -->
        
    </div>  <!-- conatiner finish -->
    
</div> <!-- Top Finish -->

      
   <div id="navbar" class="navbar navbar-default">  <!-- navbar navbar-default begin -->
       
       <div class="container"> <!-- container begin -->
           
           <div class="navbar-header"> <!-- navbar-header begin -->
               
               <a href="index.php" class="navbar-brand home"> <!-- navbar-brand home begin -->
                   
                   <img src="images/ecom-store-logo.png" alt="Theodore logo Website" class="hidden-xs">
              <!--     <img src="images/ecom-store-logo-mobile.png" alt="Theodore logo Mobile" class="vsisble-xs"> -->                   
               </a> <!-- navbar-brand home end -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div> <!-- navbar-header end -->
           
           <div class="navbar-collapse collapse" id="navigation">  <!-- navbar-collapse collapse begin -->
               
               <div class="padding-nav">  <!-- padding-nav begin -->
                   
                   <ul class="nav navbar-nav left">  <!-- nav navbar-nav left begin -->
                       
                       <li class="<?php if($active == 'Home') echo"active"; ?>">
                       <a href="index.php">Home</a>
                       </li>
                       <li class="<?php if($active == 'Shop') echo"active"; ?>">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li class="<?php if($active == 'Account') echo"active"; ?>">
                           
                           <?php
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo " <a href='checkout.php'> My Account </a> ";
                               
                           }else{
                               
                               echo " <a href='customer/my_account.php?my_orders'> My Account </a> ";
                               
                               
                           }
                           
                           ?>
                           
                           
                       </li>
                       <li class="<?php if($active == 'Cart') echo"active"; ?>">
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li class="<?php if($active == 'Contact') echo"active"; ?>">
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul> <!-- nav navbar-nav left end -->
                   
               </div>  <!-- padding-nav end -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right">  <!-- btn navbar-btn btn-primary right begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 items in Your Cart</span>
                
               </a>  <!-- btn navbar-btn btn-primary right end -->
               
               <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right begin-->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">  <!-- btn btn-primary navbar-btn begin -->
                       
                       <span class="sr-only">Toggle Seaarch</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button>  <!-- btn btn-primary navbar-btn end -->
                   
                   
               </div>  <!-- navbar-collapse collapse right end -->
               
               
               <div class="collapse clearfix" id="search">  <!-- collapse clearfix begin -->
                   
                   <form method="get" action="results.php" class="navbar-form">   <!-- navbar-form begin -->
                       
                       <div class="input-group">  <!-- input group begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn">  <!-- input-group-btn begin -->
                           
                           <button type="submit" value="Search" class="btn btn-primary"> <!-- btn btn-primary begin -->
                               
                               <i class="fa fa-search"></i>   
                               
                           </button>  <!-- btn btn-primary end -->
                           
                           </span>  <!-- input-group-btn end -->
                           
                       </div>  <!-- input group end -->
                       
                   </form> <!-- navbar-form end -->
                   
               </div>  <!-- collapse clearfix end -->
               
               
           </div>  <!-- navbar-collapse collapse end -->
           
       </div>  <!-- container end -->
       
   </div> <!-- navbar navbar-default end -->
   