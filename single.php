<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>

    <link rel="stylesheet" href="./public/css/singleroom.css">
    <link rel="stylesheet" href=	"https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
        <script>$(document).ready(function(){

            $('.input-daterange').datepicker({  
            format: 'dd-mm-yyyy',
            autoclose: true
            });
            
            });</script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">
    
</head>
<body>
    
       
        <!-- header -->
        <?php include_once './inc/header.php'; ?>
    <!-- END header -->
    
    <div class="text_room">
        <div class="container-fluid my-4 ">
            <div class="row text-center">
                <p class="text_single">Single Room</p>
            </div>
        </div>
    </div>
    
    <div class="room_detail">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-8   ">
                    <div class="room_detail_1 border">
                        <div class="room_detail_2">
                            <div class="slideshow">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner"  >
                                      <div class="carousel-item active">
                                        <img src="./public/images/room-1.jpg" alt="...">
                                        
                                      </div>
                                      <div class="carousel-item">
                                        <img src="./public/images/room-1-1.jpg" alt="...">
                                        
                                      </div>
                                      <div class="carousel-item">
                                        <img src="./public/images/room-1-2.jpg" alt="...">
                                        
                                      </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                        
                            </div>
                           
                            <hr>
                            <div class="row">
                                <div class="col-md-4 text-center"><h2 class="room_don">Single Room</h2></div>
                                <div class="col-md-3 offset-md-5 "><p class="room_gia"> <span>100$</span> / night</p></div>
                            </div>
                            <hr>
                            <div class="mota_room">
                                <h3>ROOM DESCRIPTION</h3>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet 
                                    mornings of spring which I enjoy with my whole heart. I am alone, and feel the 
                                    charm of existence in this spot, which was created for the bliss of souls like mine. 
                                    I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.
                                    When, while the lovely valley teems with vapour around me and the meridian.<p>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings of spring which I enjoy with my whole heart. I am alone,
                                    and feel the charm of existence in this spot, which was created for the bliss of souls like mine. </p>
                            </div>
                            <div class="book_room">
                            
                                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><button class="btn btn-outline-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Book this room now</button></a>
                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                    <div class="offcanvas-header">
                                      <h3 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Inviting you to choose</h3>
                                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="container px-1 px-sm-5 mx-auto">
                                            <form autocomplete="off">
                                                <div class="flex-row d-flex text-start">
                                                    <div class="col-lg-6 col-11">
                                                        <div class="input-group input-daterange text-dark"> <input type="text" class="form-control input1" placeholder="Start Date" readonly> <input type="text" class="form-control input2" placeholder="End Date" readonly> </div>
                                                        <button type="button" class="btn btn-outline-danger mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            Book room
                                                          </button>
                                                          
                                                          <!-- Modal -->
                                                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    You have successfully booked your room
                                                                </div>
                                                                <div class="modal-footer">
                                                                 
                                                                  <button type="button" class="btn btn-danger">Save changes</button>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="room_review border mt-4">
                        <h3 >room review</h3>
                        <h5>ROBERT EDIRSON</h5>
                        <h6 class="review_1 mb-4">Marth 24,2020 at 1:38 am</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                             Magni dicta alias enim quasi sapiente saepe, repellat soluta 
                            commodi delectus doloribus, veniam odit hic ratione quae modi earum dolor dignissimos quas?</p>

                    </div>
                  
                </div>
                <div class="col-md-3  room_right_1 ">
                    <div class="room_features border mb-4">
                        <p class="text_de">ROOM FEATURES</p>
                        <ul class="room_icon">
                            <li class="room_item">
                                <i class="fas fa-user-alt item_nho"></i>
                                <div class="room_title">DOUBLE KING BED</div>
                            </li>
                            <li class="room_item">
                                <i class="fas fa-coffee item_nho"></i>
                                <div class="room_title">BREAKFAST</div>
                            </li>
                            <li class="room_item">
                                <i class="fas fa-wine-glass-alt item_nho"></i>
                                <div class="room_title">MINI BAR</div>
                            </li>
                            <li class="room_item">
                                <i class="fas fa-wifi item_nho"></i>
                                <div class="room_title">WI-FI SERVICE</div>
                            </li>
                            <li class="room_item">
                                <i class="fas fa-sun item_nho"></i>
                                <div class="room_title">AIR CONDITIONING</div>
                            </li>
                            <li class="room_item">
                                <i class="fas fa-car item_nho"></i>
                                <div class="room_title">FREE PARKING</div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="room_them border">
                        <p class="text_de my-4">SIMILAR ROOMS</p>
                        <div class="img_similar">
                            <div class="img_si_1">
                                <a href="#">
                                    <img src="./public/images/room_2.jpg" alt="">
                                    <div class="row mt-3">
                                        <div class="col-md-6"><h5 class="room_don text-dark">Double Room</h5></div>
                                        <div class="col-md-6 text-end "><p class="room_gia"> <span>130$</span> / night</p></div>
                                    </div>
                                </a>
                                <hr>
                            </div>
                            
                        </div>
                        
                        <div class="img_similar">
                            <div class="img_si_1">
                                <a href="">
                                    <img src="./public/images/room_3.jpg" alt="">
                                    <div class="row mt-3">
                                        <div class="col-md-6"><h5 class="room_don text-dark">Deluxe Room</h5></div>
                                        <div class="col-md-6 text-end "><p class="room_gia"> <span>200$</span> / night</p></div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
    
    <div class="container my-4">
        <div class="top-footer">
           
            <div class="img_email">
                <div class="row">

                    <div class="col-md-2">  
                        <img src="./public/images/img_email.png" alt="">
                    </div>
                    <div class="col-md-5 lienhe text-white">
                        <div class="row">
                        <div class="col-md-10 "><input type="email" class="form-control text_send" placeholder="Your email address" aria-label="tìm kiếm.."></div>
                        <div class="col-md-2 send"><button class="btn btn-secondary btn-lg" type="button"><i class="fas fa-paper-plane"></i></button></div>
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
    <?php include_once './inc/footer.php' ?>;
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
