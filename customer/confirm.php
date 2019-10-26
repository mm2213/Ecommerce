 <?php
    
    session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}
else{

    include("includes/db.php");
    include("../functions/functions.php");
    
    if(isset($_GET['order_id'])){
        
        $order_id = $_GET['order_id'];
    }
    
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>M-DevStore</title>
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
            
            
            </a>
            <a href="checkout.php">4 items in your cart | Shopping price Total Price $300</a>
            
        </div> <!-- col-md-6 offer finish -->
        
        <div class="col-md-6"> <!-- col-md-6 begin -->
            
            <ul class="menu">  <!-- cmenu begin -->
                
                <li>
                    <a href="../customer_register.php">Register</a>
                </li>
                <li>
                    <a href="my_account.php">My Account</a>
                </li>
                <li>
                    <a href="../cart.php">Go To Cart</a>
                </li>
                <li>
                    <a href="../checkout.php">
                        
                        <?php 
                        
                        if(isset($_SESSION['customer_email'])){
                            
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
               
               <a href="../index.php" class="navbar-brand home"> <!-- navbar-brand home begin -->
                   
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
                       
                       <li >
                       <a href="../index.php">Home</a>
                       </li>
                       <li>
                           <a href="../shop.php">Shop</a>
                       </li>
                       <li class="active">
                           <a href="my_account.php">My Account</a>
                       </li>
                       <li>
                           <a href="../cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="../contact.php">Contact Us</a>
                       </li>
                       
                   </ul> <!-- nav navbar-nav left end -->
                   
               </div>  <!-- padding-nav end -->
               
               <a href="../cart.php" class="btn navbar-btn btn-primary right">  <!-- btn navbar-btn btn-primary right begin -->
                   
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
    
   <div id="content"> <!-- content begin -->
       <div class="container"> <!-- conatiner begin -->
           <div class="col-md-12"> <!-- col-,d-12 begin -->
               
               <ul class="breadcrumb"> <!-- breadcrumb begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul> <!-- breadcrumb end -->
               
           </div> <!-- col-md-12 end --> 
           
           <div class="col-md-3"> <!-- col-md-3 begin -->
               
   
      <?php
    
    include("includes/sidebar.php");
    
    ?>
    
   
   </div> <!-- col-md-3 end -->
   
   <div class="col-md-9">
       
       <div class="box">
           
           <h1 class="center">Please confirm your payment</h1>
           
           <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
               
               <div class="form-group">
                   
                   <label> Invoice No: </label>
                   
                   <input type="text" class="form-control" name="invoice_no" required>
                   
               </div>
               
               <div class="form-group">
                   
                   <label> Amount Sent(in Dollars): </label>
                   
                   <input type="text" class="form-control" name="amount_sent" required>
                   
               </div>
               
               <div class="form-group">
                   
                   <label> Select Payment Mode: </label>
                   
                   <select name="payment_mode" class="form-control">
                       
                       <option>Select Payment Mode</option>
                       <option>Paytm</option>
                       <option>BhimUPI</option>
                       <option>Debit Card</option>
                       <option>Credit Card</option>
                       
                   </select>
                   
               </div>
               <div class="form-group">
                   
                   <label> Transaction / Refernce ID: </label>
                   
                   <input type="text" class="form-control" name="ref_no" required>
                   
               </div>
               
               <div class="form-group">
                   
                   <label> Payment Date </label>
                   
                   <input type="text" class="form-control" name="date" required>
                   
               </div>
               
               <div class="text-center">
                   
                   <button class="btn btn-primary btn-lg" name="confirm_payment">
                       
                       <i class="fa fa-user-md"></i> Confirm Payment
                       
                   </button>
                   
               </div>
               
           </form>
           
           <?php
           
            if(isset($_POST['confirm_payment'])){
                
                $update_id = $_GET['update_id'];
                $invoice_no = $_POST['invoice_no'];
                $amount = $_POST['amount_sent'];
                $payment_mode = $_POST['payment_mode'];
                $ref_no = $_POST['ref_no'];
                $payment_date = $_POST['date'];
                $complete = "Complete";
                $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$payment_date')";
                
                $run_payment = mysqli_query($con,$insert_payment);
                
                $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                
                $run_customer_order = mysqli_query($con,$update_customer_order);
                
                $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                
                $run_pending_order = mysqli_query($con,$update_pending_order);
                
                if($run_pending_order){
                    
                    echo "<script>alert('Thank You for purchasing, your orders will be completed within 24 hours work')</script>";
                    
                    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                    
                }
                
            }
    
           
           ?>
           
       </div>
       
   </div>
   
         </div> <!-- container end -->
   </div> <!-- content end -->
   
   <?php
    
    include("../includes/footer.php");
    
    ?>        
                    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>  
</html>
<?php } ?> 