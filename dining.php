<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dining</title>
    <!-- <script>
        var dataSpyList = [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'))
dataSpyList.forEach(function (dataSpyEl) {
  bootstrap.ScrollSpy.getInstance(dataSpyEl)
    .refresh()
})</script> -->
    <link rel="stylesheet" href="./public/css/dining.css">
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

     <!-- top-dining -->
     <div class="container-fluid">
        <div class="row dining-img">
            <h1 class="text-center  my-5">Dining room</h1>
            <div class="col-md-3 ">
                <img src="./public/images/dining6.jpg" alt="">
                
            </div>
            <div class="col-md-3">
                <img src="./public/images/dining7.jpg" alt="">
                
            </div>
            <div class="col-md-3">
                <img src="./public/images/dining8.jpg" alt="">
            </div>
            <div class="col-md-3">
                
                <img src="./public/images/dining9.jpg" alt="">
            </div>
        </div>
    </div>





    
     <!-- dining morning -->
    <div class="dining-room">
        <div class="container my-5">
            <h2 class="text-center">Our Breakfast Menu</h2>
            <h5 class="text-center mb-5">08:00 am to 11:30 am</h5>
            <div class="row">
                <div class="morning col-md-9 offset-md-1">         
                    <div  data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining1.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining2.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining3.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining4.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining5.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- dining lunch -->
        <div class="container my-5">
            <h2 class="text-center">Our Lunch Menu</h2>
            <h5 class="text-center mb-5">12:00 am to 16:30 am</h5>
            <div class="row">
                <div class="morning col-md-9 offset-md-1">         
                    <div  data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining1.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining2.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining3.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining4.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining5.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    








        <!-- dining dinner -->
        <div class="container my-5">
            <h2 class="text-center">Our Dinner Menu</h2>
            <h5 class="text-center mb-5">17:00 am to 21:00 am</h5>
            <div class="row">
                <div class="morning col-md-9 offset-md-1">         
                    <div  data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining1.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining2.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining3.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining4.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        <!-- menu-1 -->
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img src="./public/images/dining5.jpg" alt="">
                            </div>
                            <div class="col-md-5 morning-1 ">
                                <h5>Order a menu</h5>
                                <p>........................................................................................</p>
                                <ul class="menu-item-meta">
                                    <li>Egg / </li>
                                    <li class="mx-1"> Apple / </li>
                                    <li> Butter / </li>
                                    <li class="mx-1"> Coffee /</li>
                                    <li > Meat </li>
                                </ul>
                            </div>        
                            <div class="col-md-3 morning-2 ">
                                <h5>Menu for 2 people</h5> 
                            </div>
                            <div class="col-md-2 ">
                                <div class="price-inner">$10</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- footer -->
    <?php 
        include_once './inc/footer.php';
    ?>

    
    <!-- <script> var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: '#navbar-example'
      })
      </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>