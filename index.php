<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="./public/css/style-index.css">
</head>

<body>
    <!-- header -->
    <?php include_once './inc/header.php' ;?>
    <!-- END header -->
    <!-- slide -->
    <div class="slide">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="slideshow">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./public/images/11.png" class="d-block w-100" style="height: 550px;" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1>View lý tưởng</h1>
                                        <p>Trần Tuấn Phong.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./public/images/index-slide2.jpg" class="d-block w-100" style="height: 550px;" alt="...">
                                    <div class="carousel-caption d-none d-md-block ">
                                        <h1>Món ăn đa dạng</h1>
                                        <p>Trần Tuấn Phong.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://asiky.com/files/images/Article/asiky-website-khach-san/cong-viec-le-tan.jpg" class="d-block w-100" style="height: 550px;" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1>Đội ngũ chăm sóc chuyên nghiệp</h1>
                                        <p>Trần Tuấn Phong.</p>
                                    </div>
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
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- End slide -->



        <!-- Book -->
        <!-- <div class="book bg-danger">
        <div class="container-fluid">
            <div class="row py-5 text-center">
                <div class="col-md-3">
                    <h4>Ngày tới</h4>
                    <h2>29 - 5 - 2021</h2>
                </div>
                <div class="col-md-3">
                    <h4>Ngày khởi hành</h4>
                    <h2>29 - 5 - 2021</h2>
                </div>
                <div class="col-md-3">
                    <h4>Người lớn</h4>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle btn-lg text-white viet" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            2
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" >1</a></li>
                          <li><a class="dropdown-item" href="#">2</a></li>
                          <li><a class="dropdown-item" href="#">3</a></li>
                        </ul>
                      </div>
                </div>
                <div class="col-md-3">
                    <h4>Trẻ nhỏ</h4>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle text-white viet" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          2
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#">1</a></li>
                          <li><a class="dropdown-item" href="#">2</a></li>
                          <li><a class="dropdown-item" href="#">3</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="row pb-5 ">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-outline-info btn-lg text-center">kiểm tra tính khả dụng</button>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div> -->
        <!-- END book -->
        <!-- main -->
        <div class="main">
            <div class="toi">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center py-5">
                            <h1>About us</h1>
                            <hr>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <h6 class="pt-3">Mang trong mình vẻ đẹp huyền bí và những nét văn hóa độc đáo của di
                                        sản phố cổ,
                                        điểm đến lý tưởng để du khách có một kỳ nghỉ thư giãn,
                                        thoải mái cùng với dịch vụ đẳng cấp và những lựa chọn ăn uống tuyệt vời ngay tại
                                        trung
                                        tâm .</h6>
                                    <h6 class="pt-3">Đặt phòng để tận hưởng sự sang trọng và thoải mái tối đa
                                        . Dù bạn ở đây với mục đích gì
                                        , chúng tôi sẽ mang đến cho bạn một kỳ nghỉ thật sự đáng nhớ.</h6>
                                </div>

                            </div>


                        </div>
                        <div class="col-md-12 img_4">
                            <div class="img_4_1">
                                <img class="img_4_2" src="https://www.hoteljob.vn/uploads/images/19-06-18-15/top-10-khach-san-gia-re-co-view-dep-nhat-phu-quoc.jpg" alt="">
                            </div>
                            <div class="img_4_1">
                                <img class="img_4_2 " src="./public/images/index-2.jpg" alt="">
                            </div>
                            <div class="img_4_1">
                                <img class="img_4_2 " src="./public/images/index-3.jpg" alt="">
                            </div>
                            <div class="img_4_1">
                                <img class="img_4_2 " src="./public/images/indez-1.jpg" alt="">
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="room-extend">
                <div class="container">
                    <hr>
                    <h2 class="text-center mt-5 mb-5">OUR BEST ROOMS</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="single-room">
                                <div class="room-thumb box-radius my-2">
                                    <a href="singleroom.html">
                                        <img src="./public/images/img-6.jpg" alt="">
                                    </a>

                                </div>
                                <div class="room-info border">
                                    <h5 class="room-title text-center ">
                                        <a href="singleroom.html" class="row">
                                            <div class="col-md-7 pt-4 text-dark">
                                                <p>SINGLE ROOM </p>
                                            </div>
                                            <div class="col-md-5 pt-2 room-gia">
                                                <p>
                                                <h6>100$ / night</h6>
                                                </p>
                                            </div>

                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mx-3">
                            <div class="single-room">
                                <div class="room-thumb box-radius my-2">
                                    <a href="singleroom.html">
                                        <img src="./public/images/room_2.jpg" alt="">
                                    </a>

                                </div>
                                <div class="room-info border">
                                    <h5 class="room-title text-center ">
                                        <a href="singleroom.html" class="row">
                                            <div class="col-md-7 pt-4 text-dark">
                                                <p>DOUBlE ROOM </p>
                                            </div>
                                            <div class="col-md-5 pt-2 room-gia">
                                                <p>
                                                <h6>130$ / night</h6>
                                                </p>
                                            </div>

                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-room">
                                <div class="room-thumb box-radius my-2">
                                    <a href="singleroom.html">
                                        <img src="./public/images/room_3.jpg" alt="">
                                    </a>

                                </div>
                                <div class="room-info border">
                                    <h5 class="room-title text-center ">
                                        <a href="singleroom.html" class="row">
                                            <div class="col-md-7 pt-4 text-dark">
                                                <p>DELUXE ROOM </p>
                                            </div>
                                            <div class="col-md-5 pt-2 room-gia">
                                                <p>
                                                <h6>200$ / night</h6>
                                                </p>
                                            </div>

                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <a href="room.html"><button type="button" class="btn all-room btn-outline-danger">See all
                                    rooms <i class="fas fa-forward"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
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
        </div>

        <!-- END-main -->
        <!-- footer -->
        <?php include_once './inc/footer.php'; ?>
</body>

</html>