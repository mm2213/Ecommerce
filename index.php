

 <?php
    $active='Home';
    include("includes/header.php");
    
    ?>    
    

    <div class="container" id="slider"> <!-- container begin -->
        
        <div class="col-md-12"> <!-- col-md-12 begin -->
            
            <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide begin -->
                
                <ol class="carousel-indicators"> <!--  carousel-indicators begin -->
                    
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>                    
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    
                </ol>  <!--  carousel-indicators end -->
                
                <div class="carousel-inner">  <!--  carousel-inner begin -->
                   
             <!-- Fetching slide images from db -->      
                   <?php
                    
                    $get_slides ="select * from slider LIMIT 0,1";
                    
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        $slide_name =$row_slides['slide_name'];
                        $slide_image =$row_slides['slide_image'];
                        echo "
                        <div class='item active'>
                        
                        <img src='admin_area/slides_images/$slide_image'>
                        
                        </div>
                        ";
                    }
                    
                    $get_slides ="select * from slider LIMIT 1,3";
                    
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        $slide_name =$row_slides['slide_name'];
                        $slide_image =$row_slides['slide_image'];
                        echo "
                        <div class='item'>
                        
                        <img src='admin_area/slides_images/$slide_image'>
                        
                        </div>
                        ";
                    }
                    
                    ?>
                        
                         <!-- finish of Fetching slide images from db --> 
                    
                </div>  <!--  carousel-inner end -->
                
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">  <!--  left carousel-control begin -->
                    
                    <span class="glyphicon glyphicon-cevron-left"></span>
                    <span class="sr-only">Previous</span>
                    
                </a>  <!--  left carousel-control end -->
                
                <a href="#myCarousel" class="right carousel-control" data-slide="next">  <!--  left carousel-control begin -->
                    
                    <span class="glyphicon glyphicon-cevron-right"></span>
                    <span class="sr-only">Next</span>
                    
                </a>  <!--  left carousel-control end -->
                
            </div> <!-- carousel slide end -->
            
        </div>  <!-- col-md-12 end -->
        
    </div> <!-- container end -->
       
       
    <div id="advantages">  <!-- advantages end -->
        
        <div class="container">  <!-- container begin -->
            
            <div class="same-height-row">  <!-- same-height-row begin -->
                
                <div class="col-sm-4">  <!-- col-sm-4 begin -->
                    
                   <div class="box same-height">  <!-- box same-height begin -->
                       
                       <div class="icon">  <!-- icon begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div>  <!-- icon end -->
                       
                       <h3><a href="#">We Love Our Customer!</a></h3>
                       
                       <p>We Know to provide the best posible service ever.</p>
                       
                   </div>   <!-- box same-height end -->
                    
                </div>  <!-- col-sm-4 end -->
                
                <div class="col-sm-4">  <!-- col-sm-4 begin -->
                    
                   <div class="box same-height">  <!-- box same-height begin -->
                       
                       <div class="icon">  <!-- icon begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div>  <!-- icon end -->
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Compare us with another site,who have the best prices.</p>
                       
                   </div>   <!-- box same-height end -->
                    
                </div>  <!-- col-sm-4 end -->
                
                
                <div class="col-sm-4">  <!-- col-sm-4 begin -->
                    
                   <div class="box same-height">  <!-- box same-height begin -->
                       
                       <div class="icon">  <!-- icon begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div>  <!-- icon end -->
                       
                       <h3><a href="#">100% Original Products</a></h3>
                       
                       <p>We just offer you the best and original products.</p>
                       
                   </div>   <!-- box same-height end -->
                    
                </div>  <!-- col-sm-4 end -->
                
            </div>  <!-- same-height-row end -->
            
        </div>  <!-- container end -->
        
    </div>  <!-- advantages end -->
       
       
    <div id="hot">   <!-- hot begin -->
        
        <div class="box">  <!-- box begin -->
            
            <div class="container">  <!-- container begin -->
                
                <div class="col-md-12">  <!-- col-md-12 begin -->
                    
                    <h2>
                        Our Latest Products
                    </h2>
                    
                </div>  <!-- col-md-12 end -->
                
            </div>  <!-- container end -->
            
        </div>  <!-- box end -->
        
    </div>  <!-- hot end -->
       
    
    <div id="content" class="container">   <!-- container begin -->
        
        
            
            <?php
            
            getPro();
            
            ?>
          
        </div>   <!-- row end -->
        
    </div>  <!-- container end -->
        
    <?php
    
    include("includes/footer.php");
    
    ?>        
                    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>