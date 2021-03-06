<?php if(is_array($data)):
 ?>
<style>
.center2 {
  margin: auto;
  width: 80%;
  
  padding: 10px;
}
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Messages</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?=ASSETS?>img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="<?=ASSETS?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=ASSETS?>css/J.css" rel="stylesheet">
    </head>

    <body>
        <?php include "menu.php" ?>

         <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Messages</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->

       <div class="center2">
          <?php foreach($data['messages'] as $row): ?>

        <!-- Class Start -->
  
        <div class="class">
        
            <div class="container">
                <div class="row class-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="class-wrap">
                        
                            <div class="class-text">
                                <h2>Name: <?=$row->Name?></h2>
                                <h2>Email: <?=$row->Email?></h2>
                                <h2>Subject: <?=$row->Subject?></h2><hr/>
                                <h2><?=$row->Message?></h2>
                                    
                            </div>
                        </div> 
                        
                    </div>
                    </div>
                   
              
                
            </div>
          
      
 
        <!-- Class End -->
     
<?php endforeach; 
 endif; ?> 
  </div>   
        

             <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h3>Obour, Cairo, Egypt</h3>
                        <div class="footer-menu">
                            <p>+012 345 67890</p>
                            <p>Jardin@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?=ASSETS?>lib/easing/easing.min.js"></script>
        <script src="<?=ASSETS?>lib/wow/wow.min.js"></script>
        <script src="<?=ASSETS?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?=ASSETS?>lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?=ASSETS?>lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?=ASSETS?>js/main.js"></script>
    </body>
</html>
