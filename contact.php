<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href=	"https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    
        




        <!-- header -->
   <?php
        include_once './inc/header.php';
   ?>
    <!-- END header -->
    
    <!-- contact -->
    <div class="container">
        <h1 class="text-center my-5">Contact us</h1>
        <h4 class="text-center mb-3 test-1">If you have any questions don't hesistate to contact us.</h4>
        <div class="row">
            <div class="col-md-7 border">
                <h6 class="font-txt mt-3">GET IN TOUCH</h6>
                <label for="inputEmail4" class="form-label"></label>
                <input type="email" class="form-control my-3" placeholder="Enter your email address" id="inputEmail4">
                <input type="name" class="form-control my-3" placeholder="Enter your name" id="inputEmail4">
                <div class="form-group mb-4">
                    <textarea class="form-control" cols="20" name="mesage"  rows="3"></textarea>
                </div>
                <button class="btn btn-outline-danger mb-3 send-1" type="submit">Send Message</button>
            </div>
            <div class="col-md-4 border right">
                <h6 class="font-txt mt-3">INFORMATION</h6>
                <p class="my-3 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit eveniet repellat possimus.</p>
                <div class="contact-info-1">
                    <p><i class="fa fa-map-marker my-3 mx-3"> </i> 176 Trần Phú - TP Huế</p>
                    <p><i class="fa fa-envelope my-3 mx-3"></i> info@gmail.com</p>
                    <p><i class="fa fa-phone my-3 mx-3"></i> +123-456-7890</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="top-footer">
           
            <div class="img_email">
                <div class="row">

                    <div class="col-md-2">  
                        <img src="img/img_email.png" alt="">
                    </div>
                    <div class="col-md-5 lienhe text-white">
                        <div class="row">
                        <div class="col-md-10 "><input type="email" class="form-control text_send" placeholder="Your email address" aria-label="tìm kiếm.."></div>
                        <div class="col-md-2 send "><button class="btn btn-secondary btn-lg" type="button"><i class="fas fa-paper-plane"></i></button></div>
                        </div>
                        
                    </div>
                    <div class="col-md-5 text-end email_icon">
                        <a href="#"><i class="fab fa-twitter text-white "></i></a>
                        <a href="#"><i class="fab fa-facebook-f text-white mx-5"></i></a>
                        <a href="#"><i class="fab fa-instagram text-white"></i></a>
                        <a href="#"><i class="fab fa-tripadvisor text-white mx-5"></i></a>

                        
                    </div>
                
                    
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
        include_once './inc/footer.php';
    ?>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>