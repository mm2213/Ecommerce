 <?php
    $active='Cart';
    include("includes/header.php");
    
    ?>    

   
   <div id="content"> <!-- content begin -->
       <div class="container"> <!-- conatiner begin -->
           <div class="col-md-12"> <!-- col-,d-12 begin -->
               
               <ul class="breadcrumb"> <!-- breadcrumb begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
                   
                   <li>
                       
                       <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                       
                   </li>
                   
                   <li> <?php echo $pro_title; ?> </li>
                   
               </ul> <!-- breadcrumb end -->
               
           </div> <!-- col-md-12 end --> 
           
           <div class="col-md-3"> <!-- col-md-3 begin -->
               
   
      <?php
    
    include("includes/slidebar.php");
    
    ?>
   
   </div> <!-- col-md-3 end -->
          
          <div class="col-md-9" id=""> <!-- col-md-9 begin -->
              <div id="productMain" class="row"> <!-- row begin -->
                 <div class="col-sm-6"> <!-- col-sm-6 begin -->
                  <div id="mainImage"> <!-- mainImage begin -->
                      <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- carousel slide begin -->
                          <ol class="carousel-indicators"> <!-- carousel-indicators begin -->
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol> <!-- carousel-indicators end -->
                          
                          <div class="carousel-inner">
                              <div class="item active">
                                  <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 188"></center>
                              </div>
                              <div class="item">
                                  <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 188"></center>
                              </div>
                              <div class="item">
                                  <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 188"></center>
                              </div>
                          </div>
                          
                          <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a href="#myCarousel" class="right carousel-control" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                          </a>                          
                          
                      </div> <!-- carousel slide end -->
                  </div> <!-- mainImage end -->
                  </div> <!-- col-sm-6 end -->
                  
                  <div class="col-sm-6"> <!-- col-sm-6 begin -->
                      <div class="box"> <!-- box begin -->
                          <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                          
                          <?php add_cart(); ?>
                          
                        <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">  <!-- form-horizontal begin -->
                              <div class="form-group">  <!-- form-group begin -->
                              <label for="" class="col-md-5 control-label">Product Quantity</label>
                              
                              <div class="col-md-7">  <!-- col-sm-7 begin -->
                                     <select name="product_qty" id="" class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                  </select>
                              </div>  <!-- col-sm-7 end -->
                              
                              </div>  <!-- form-group end -->
                              
                              <p class="price" align="center"> $<?php echo $pro_price; ?> </p>
                              
                              <p class="text-center button"><button class="btn btn-primary i fa fa-shopping-cart"> Add To Cart</button></p>
                              
                          </form>   <!-- form-horizontal end -->
                          
                      </div> <!-- box end -->
                      
                      <div class="row" id="thumbs"> <!--row begin -->
                          
                          <div class="col-xs-4"> <!--col-xs-4 begin -->
                              <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                              <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 188" class="img-responsive">
                              </a>
                          </div> <!--col-xs-4 end -->
                        
                          <div class="col-xs-4"> <!--col-xs-4 begin -->
                              <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                              <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 188" class="img-responsive">
                              </a>
                          </div> <!--col-xs-4 end -->
                          
                          <div class="col-xs-4"> <!--col-xs-4 begin -->
                              <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                              <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 188" class="img-responsive">
                              </a>
                          </div> <!--col-xs-4 end -->                                                                                  
                          
                      </div>  <!--row end -->
                      
                  </div> <!-- col-sm-6 end -->
                  
              </div> <!-- row end -->
              
              <div class="box" id="details"> <!-- box begin -->
                  
                  <h4>Products Details</h4>
                  
                  <p>
                      
                      <?php echo $pro_desc; ?>
                      
                  </p>
                    
              <hr>    
              </div> <!-- box end -->
              
              <div id="same-heigh-row"> <!--same-heigh-row begin -->
                  <div class="col-md-3 col-sm-6">  <!-- col-md-3 col-sm-6 begin -->
                      <div class="box same-height headline">  <!-- box same-height headline begin -->
                          <h3 class="text-center">Products you May Like</h3>
                      </div> <!-- box same-height headline end -->
                  </div> <!-- col-md-3 col-sm-6 end -->
                  
                <?php
                  
                  $get_products = "select * from products order by rand() LIMIT 0,3";
    
                    $run_products = mysqli_query($con,$get_products);
                    while($row_products = mysqli_fetch_array($run_products)){
                    
                        $pro_id = $row_products['product_id'];
                        $pro_title = $row_products['product_title'];
                        $pro_img1 = $row_products['product_img1'];
                        $pro_price = $row_products['product_price'];
                        
                        echo"
                        
                        <div class='col-md-3 col-sm-6 center-responsive'>
        
                        <div class='product same-height'>

                            <a href='details.php?pro_id=$pro_id'>

                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

                            </a>

                            <div class='text'>

                                <h3>

                                    <a href='details.php?pro_id=$pro_id'>

                                        $pro_title  
                                    </a>    

                                </h3>
                                
                                <p class='price'> $$pro_price </p>
                                
                                </div>
                                
                            </div>
                            
                        </div>    

                        ";
                        
                    }
                  
                  ?>                                                                        
                                  
              </div> <!--same-heigh-row end -->
              
          </div> <!-- col-md-9 end -->
           
       </div> <!-- container end -->
   </div> <!-- content end -->
   
   <?php
    
    include("includes/footer.php");
    
    ?>        
                    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>