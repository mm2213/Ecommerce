 <?php
    $active='Contact';
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
                       Contact Us
                   </li>
               </ul> <!-- breadcrumb end -->
               
           </div> <!-- col-md-12 end --> 
           
           <div class="col-md-3"> <!-- col-md-3 begin -->
            
   
   
      <?php
    
    include("includes/slidebar.php");
    
    ?>
   
   </div> <!-- col-md-3 end -->
  
        <div class="col-md-9">
            
            <div class="box">
                
                <div class="box-header">
                    
                    <center>
                        
                        <h2>Feel free to Contact Us</h2>
                        
                        <p class="text-muted">
                            
                            If you have any questions, feel free to contact us. Our customer service work <strong>24/7</strong>
                            
                        </p>
                        
                    </center>
                    
                    <form action="contact.php" method="post">
                        
                        <div class="form-group">
                            
                            <label>Name</label>
                            
                            <input type="text" class="form-control" name="name" required>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <label>Email</label>
                            
                            <input type="text" class="form-control" name="email" required>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <label>Subject</label>
                            
                            <input type="text" class="form-control" name="subject" required>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <label>Message</label>
                            
                            <textarea name="message" class="form-control"></textarea>
                            
                        </div>
                        
                        <div class="text-center">
                            
                            <button type="submit" class="btn btn-primary">
                            
                            <i class="fa fa-user-md"></i> Send Message
                            
                            </button>
                            
                        </div>
                        
                    </form>
                    
                    <?php
                    
                    if(isset($_POST['submit'])){
                        
                        /// admin receives message with this ///
                        
                        $sender_name = $_POST['name'];
                        $sender_email = $_POST['email'];
                        $sender_subject = $_POST['subject'];
                        $sender_message = $_POST['message'];
                        $receiver_email = "theodorewatches@gmail.com";
                        
                        mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                        
                        /// auto reply to sender with this ///
                        
                        $email = $_POST['email'];
                        
                        $subject = "Welcome to my Website";
                        
                        $msg = "Thanks for sending us message. ASAP we will reply your message";
                        
                        $from = "theodorewatches@gmail.com";
                        
                        mail($email,$subject,$msg,$from);
                        
                        echo"<h2 align='center'> Your message has been sent sucessfully </h2>";
                        
                    }
                    
                    ?>
                    
                </div>
                
            </div>
            
        </div>    
 
       </div> <!-- container end -->
   </div> <!-- content end -->
   
   <?php
    
    include("includes/footer.php");
    
    ?>        
                    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>