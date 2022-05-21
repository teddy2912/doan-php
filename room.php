<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link rel="stylesheet" href="./public/css/room.css">
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
    
    <!-- section room -->
    <div class="room">
        <div class="container-fluid bg_room px-0">
            <img src="./public/images/bg_room.jpg"  alt="">
            <div class="text_room">
                <h2>OUR ROOM</h2>
                <p>Word Hotel committed to giving you the best experience</p>
                <div class="clear"></div>
            </div>
            
        </div>
        
        <div class="clear"></div>
    </div>
    
    <!-- END SECTION ROOM -->


    <!-- our_room -->
    <div class="our_room">
        <div class="container">
    <!-- sigle room -->
           <div class="row  my-5    ">
               <div class="col-md-6 room_1">
                    <img src="./public/images/room-1.jpg" alt="">
               </div>
               <div class="col-md-6 room_content">
                    <div class="room_chinh">
                        <h2 class="room_don">Single room</h2>
                        <p class="room_gia"> <span>100$</span> / night</p>
                        <hr class="room_content_hr">
                        <p class="rooms_desc__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Nihil dolorem illum vitae facere doloremque quas voluptates dolore.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="rooms_desc__services">
                                    <li><i class="fas fa-user-alt"></i>  One king bed</li><hr>
                                    <li><i class="fas fa-coffee"></i> Breakfast</li><hr>
                                    <li><i class="fas fa-sun"></i> Air conditioning</li><hr>
                                </ul>
                                
                                <!-- .rooms_desc__services -->
                            </div>
                            <div class="col-md-6">
                                    <ul class="rooms_desc__services">
                                        <li><i class="fas fa-wine-glass-alt"></i> Mini bar</li><hr>
                                        <li><i class="fas fa-tv"></i> LCD TV</li><hr>
                                        <li><i class="fas fa-wifi"></i> Wi-Fi</li><hr>
                                    </ul>
                                    <!-- .rooms_desc__services -->
                            </div>
                            <a href="./single.php?id=1" class="col-md-6 offset-md-4 btn_view btn btn-rooms btn-outline-danger text-center">See details</a>
                        </div>  
                    </div>             
               </div>
               
           </div>
    <!-- double room -->
            <div class="row  my-5    ">
                <div class="col-md-6 room_1">
                    <img src="./public/images/room_2.jpg" alt="">
                </div>
                <div class="col-md-6 room_content">
                    <div class="room_chinh">
                        <h2 class="room_don">Double room</h2>
                        <p class="room_gia"> <span>150$</span> / night</p>
                        <hr class="room_content_hr">
                        <p class="rooms_desc__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Nihil dolorem illum vitae facere doloremque quas voluptates dolore.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="rooms_desc__services">
                                    <li><i class="fas fa-user-alt"></i>  One king bed</li><hr>
                                    <li><i class="fas fa-coffee"></i> Breakfast</li><hr>
                                    <li><i class="fas fa-sun"></i> Air conditioning</li><hr>
                                </ul>
                                
                                <!-- .rooms_desc__services -->
                            </div>
                            <div class="col-md-6">
                                    <ul class="rooms_desc__services">
                                        <li><i class="fas fa-wine-glass-alt"></i> Mini bar</li><hr>
                                        <li><i class="fas fa-tv"></i> LCD TV</li><hr>
                                        <li><i class="fas fa-wifi"></i> Wi-Fi</li><hr>
                                    </ul>
                                    <!-- .rooms_desc__services -->
                            </div>
                            <a href="./single.php?id=2" class="col-md-6 offset-md-4 btn_view btn btn-rooms btn-outline-danger text-center">See details</a>
                        </div>  
                    </div>             
                </div>
                
            </div>
    <!-- deluxe room -->
            <div class="row  my-5    ">
                <div class="col-md-6 room_1">
                    <img src="./public/images/room_3.jpg" alt="">
                </div>
                <div class="col-md-6 room_content">
                    <div class="room_chinh">
                        <h2 class="room_don">Deluxe room</h2>
                        <p class="room_gia"> <span>175$</span> / night</p>
                        <hr class="room_content_hr">
                        <p class="rooms_desc__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Nihil dolorem illum vitae facere doloremque quas voluptates dolore.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="rooms_desc__services">
                                    <li><i class="fas fa-user-alt"></i>  One king bed</li><hr>
                                    <li><i class="fas fa-coffee"></i> Breakfast</li><hr>
                                    <li><i class="fas fa-sun"></i> Air conditioning</li><hr>
                                </ul>
                                
                                <!-- .rooms_desc__services -->
                            </div>
                            <div class="col-md-6">
                                    <ul class="rooms_desc__services">
                                        <li><i class="fas fa-wine-glass-alt"></i> Mini bar</li><hr>
                                        <li><i class="fas fa-tv"></i> LCD TV</li><hr>
                                        <li><i class="fas fa-wifi"></i> Wi-Fi</li><hr>
                                    </ul>
                                    <!-- .rooms_desc__services -->
                            </div>
                            <a href="./single.php?id=3" class="col-md-6 offset-md-4 btn_view btn btn-rooms btn-outline-danger text-center">See details</a>
                        </div>  
                    </div>             
                </div>
                
            </div>
    <!-- family room -->
            <div class="row  my-5    ">
                <div class="col-md-6 room_1">
                    <img src="./public/images/room_4.jpg" alt="">
                </div>
                <div class="col-md-6 room_content">
                    <div class="room_chinh">
                        <h2 class="room_don">Family room</h2>
                        <p class="room_gia"> <span>200$</span> / night</p>
                        <hr class="room_content_hr">
                        <p class="rooms_desc__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Nihil dolorem illum vitae facere doloremque quas voluptates dolore.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="rooms_desc__services">
                                    <li><i class="fas fa-user-alt"></i>  One king bed</li><hr>
                                    <li><i class="fas fa-coffee"></i> Breakfast</li><hr>
                                    <li><i class="fas fa-sun"></i> Air conditioning</li><hr>
                                </ul>
                                
                                <!-- .rooms_desc__services -->
                            </div>
                            <div class="col-md-6">
                                    <ul class="rooms_desc__services">
                                        <li><i class="fas fa-wine-glass-alt"></i> Mini bar</li><hr>
                                        <li><i class="fas fa-tv"></i> LCD TV</li><hr>
                                        <li><i class="fas fa-wifi"></i> Wi-Fi</li><hr>
                                    </ul>
                                    <!-- .rooms_desc__services -->
                            </div>
                            <a href="./single.php?id=4" class="col-md-6 offset-md-4 btn_view btn btn-rooms btn-outline-danger text-center">See details</a>
                        </div>  
                    </div>             
                </div>
                
            </div>
            <div class="row mb-5">
                <nav aria-label="Page navigation example chuyen">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
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