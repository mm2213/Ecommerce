<div id="footer"> <!-- footer begin -->
    <div class="container"> <!-- container begin -->
        <div class="row">  <!-- row begin -->
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-ms-3 begin -->
                
                <h4>Pages</h4>
                
                <ul> <!-- ul begin -->
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="my_account.php">My Account</a></li>
                </ul> <!-- ul end -->
                
                <hr>
                
                <h4>User Section</h4>
                
                <ul>  <!-- ul begin -->
                    
                    <?php
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo " <a href='../checkout.php'>Login</a> ";
                               
                           }else{
                               
                               echo " <a href='my_account.php?my_orders'> My Account </a> ";
                               
                               
                           }
                           
                           ?> 
                    
                    
                    <li>
                        
                        <?php
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo " <a href='../checkout.php'>Login</a> ";
                               
                           }else{
                               
                               echo " <a href='my_account.php?edit_account'> Edit Account </a> ";
                               
                               
                           }
                           
                           ?> 
                        
                        
                    </li>
                </ul>  <!-- ul end -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div>  <!-- col-sm-6 col-ms-3 end -->
            
            <div class="com-sm-6 col-md-3"> <!-- com-sm-6 col-md-3 begin -->
                
                <h4>Top Products Categories</h4>
                
                <ul>  <!-- ul begin -->
                    
                    <?php
                    
                        $get_p_cats = "select * from products_categories";
                        
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats= mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id= $row_p_cats['p_cat_id'];
                            
                            $p_cat_title= $row_p_cats['p_cat_title'];
                            
                            echo"
                            
                            <li>
                            
                                <a href='../shop.php?p_cat=$p_cat_id'>
                                
                                $p_cat_title
                                
                                </a>
                            
                            </li>
                            
                            ";
                            
                        }
                    
                    ?>
                    
                </ul>  <!-- ul end -->
                
                <hr class="hidden-md hidden-lg">
                
            </div> <!-- com-sm-6 col-md-3 end -->
            
            <div class="col-sm-6 col-md-3">  <!-- col-sm-6 col-md-3 begin -->
                
                <h4>Find Us</h4>
                
                <p>
                    
                    <strong>theodorefashion.com</strong>
                    <br/>Ram Colony
                    <br/>Barnala Road,Sirsa
                    <br/>125055
                    <br/>theodorefashion@gmail.com
                </p>
                
                <a href="../contact.php">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div>  <!-- col-sm-6 col-md-3 end -->
            
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 begin -->
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    
                    Don't miss out latest update
                    
                </p>
                
                <form action="" method="post"> <!-- form begin -->
                    <div class="input-group"> <!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="submit" align="center" width="100%" height="100%" value="subscribe" class="btn-btn-default">
                        
                    </div> <!-- input-group end -->
                </form> <!-- form end -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="../#" class="fa fa-facebook"></a>
                    <a href="../#" class="fa fa-twitter"></a>
                    <a href="../#" class="fa fa-instagram"></a>
                </p>
                
            </div> <!-- col-sm-6 col-md-3 end -->
            
        </div>   <!-- row end -->
    </div>  <!-- container end -->
</div>  <!-- footer end <-->


<div id="copyright"> <!-- copyright begin <-->
    <div class="container"> <!-- container begin <-->
        <div class="col-md-6"> <!-- col-md-6 begin <-->
            
            <p class="pull-left">&copy; 2016 Theodore Store All Rights Reserve</p>
            
        </div> <!-- col-md-6 end <-->
        
        <div class="col-md-6"> <!-- col-md-6 begin <-->
            
            <p class="pull-right">Theme By: <a href="#"> TDfashion </a></p>
            
        </div> <!-- col-md-6 end <-->        
        
    </div> <!-- container end <-->
</div> <!-- copyright end <-->
