<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font aswome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- end font aswome  -->
    <!-- owl carousel start  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel end -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/responsive.css')}}">

    <title>Yeasin Traders</title>
  </head>
  <body>
<header class="sticky-top bg-white" style="z-index:10;">
    <div class="top-bar">
          <div class="container-fluid bg-light-gray ">
            <div class="container">
                <ul class="list-unstyled py-2 d-flex justify-content-end">
                    <li class="d-inline px-3 "> <a href="expire.html" class="text-decoration-none text-dark fs-7">Expire Soon</a></li>
                    <li class="d-inline px-3 "> <a href="#" class="text-decoration-none text-dark fs-7">SAVE MORE ON APP</a></li>
                    {{-- <li class="d-inline px-3 "> <a href="#" class="text-decoration-none text-dark fs-7">SELL YEASIN TRADERS</a></li> --}}
                    <li class="d-inline px-3 "><a href="#" class="text-decoration-none text-dark fs-7">CUSTOMER CARE</a></li>
                    <li class="d-inline px-3 "><a href="#" class="text-decoration-none text-dark fs-7">TRACK MY ORDER</a></li>
                    <li class="d-inline px-3 "><a href="#" class="text-decoration-none text-dark fs-7">SINGUP/LOGIN </a></li>
                    <li class="d-inline px-3 "> <a href="#" class="text-decoration-none text-dark fs-7">YASIN TRADERS AFLITE PROGRAM </a></li>
                    <li class="d-inline px-3 "><a href="#" class="text-decoration-none text-dark fs-7">ভাষা</a></li>
                    <li class="d-inline px-3 "><a href="#" class="text-decoration-none text-dark fs-6">
                        <i class="fa-regular fa-bell"></i>
                    </a></li>
                </ul>
             </div>
          </div>
    </div>
    <div class="nav-bar ">
        <div class="container">
           <div class="row">
            <div class="col-md-2 ">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('frontend/img/HATBAZSARWITHTEXT.png')}}" alt="logo" height="50px" width="170px"></a>
                </div>
            </div>
            <div class="col-md-7 ">
                <div class="search-bar">
                    <input type="search" name="search" id="search" placeholder="Search in Yeasin Traders" class="search-bar ps-4 search-inside bg-light-gray m-0">
                    <button type="submit" class="search-btn py-2 px-3"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="cart d-flex justify-content-between">
                    <small><i class="fa-solid fa-cart-shopping fa-2x"></i></small>
                    <a href="#"><img src="{{asset('frontend/img/offer.png')}}" alt="" height="40px" width="170px"></a>
                </div>
            </div>
           </div>
        </div>
    </div>
</header>
<!-- banner start  -->
<div class="banner">
<div class="container-fluid">
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="{{asset('frontend')}}/img/banner1.jpg" alt="" height="350px" width="100%"></div>
        <div class="item"><img src="{{asset('frontend')}}/img/banner2.jpg" alt="" height="350px" width="100%"></div>
        <div class="item"><img src="{{asset('frontend')}}/img/banner3.jpg" alt="" height="350px" width="100%"></div>
        <div class="item"><img src="{{asset('frontend')}}/img/banner4.jpg" alt="" height="350px" width="100%"></div>
    </div>
</div>
</div>
<!-- banner end  -->
<!-- promote start  -->
<div class="container">
    <a href="#"><img src="{{asset('frontend/img/promote2.jpg')}}" alt="" height="200px" width="100%" ></a>
</div>
<div class="basic-category mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="category-link  text-center fw-bolder rounded-pill p-2 ">  <img src="{{asset('frontend/img/mart.gif')}}" alt=""> Mart</div>
            </div>
            <div class="col-md-3">
                <div class="category-link  text-center fw-bolder rounded-pill p-2 ">  <img src="{{asset('frontend/img/fashon.gif')}}" alt=""> Fashion</div>
            </div>
            <div class="col-md-3">
                <div class="category-link  text-center fw-bolder rounded-pill p-2 ">  <img src="{{asset('frontend/img/beauty.gif')}}" alt=""> Beauty & Glamour</div>
            </div>
            <div class="col-md-3">
                <div class="category-link  text-center fw-bolder rounded-pill p-2 ">  <img src="{{asset('frontend/img/home and leaving.gif')}}" alt=""> Home & Living</div>
            </div>
        </div>
    </div>
</div>
<!-- promote end  -->
<!-- flash sale start  -->
<div class="flashsale mt-4">
    <div class="container">
        <h2 class="text-secondary fs-4">FlashSale</h2>
        <div class="flashsale-header border py-3 ">
           <small class="text-danger m-0 px-4">On Sale Now</small>
           <small class="m-0 px-4">Ending in</small>
           <span class="bg-orange text-light p-2 rounded ">08</span>: <span class="bg-orange text-light p-2 rounded ">12</span>: <span class="bg-orange text-light p-2 rounded ">23</span>
           <span class="text-danger float-end border border-danger px-2 py-1 me-3"><a href="#" class="text-danger text-decoration-none">SHOP MORE</a></span>
        </div>
    </div>
    <div class="flashsale-product my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('frontend/img/soyabin.jpg')}}" width="100%" height="220px"  alt="">
                    <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                    <!-- <br> -->
                    <span class="fs-4 p-1 text-orange">৳905</span>
                    <br>
                    <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
                </div>
                <div class="col-md-2">
                    <img src="{{asset('frontend/img/rin.jpg')}}" width="100%" height="220px"  alt="">
                    <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                    <!-- <br> -->
                    <span class="fs-4 p-1 text-orange">৳905</span>
                    <br>
                    <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
                </div>
                <div class="col-md-2">
                    <img src="{{asset('frontend/img/detol.jpg')}}" width="100%" height="220px"  alt="">
                    <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                    <!-- <br> -->
                    <span class="fs-4 p-1 text-orange">৳905</span>
                    <br>
                    <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
                </div>
                <div class="col-md-2">
                    <img src="{{asset('frontend/img/cap.jpg')}}" width="100%" height="220px"  alt="">
                    <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                    <!-- <br> -->
                    <span class="fs-4 p-1 text-orange">৳905</span>
                    <br>
                    <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
                </div>
                <div class="col-md-2">
                    <img src="{{asset('frontend/img/realmi bird.jpg')}}" width="100%" height="220px"  alt="">
                    <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                    <!-- <br> -->
                    <span class="fs-4 p-1 text-orange">৳905</span>
                    <br>
                    <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
                </div>
                <div class="col-md-2">
                    <img src="{{asset('frontend')}}/img/apple.jpg" width="100%" height="220px"  alt="">
                    <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                    <!-- <br> -->
                    <span class="fs-4 p-1 text-orange">৳905</span>
                    <br>
                   
                    <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- flash sale end -->

<!-- all category start  -->
<div class="all-category my-5">
    <div class="container">
        <h3 class="text-secondary fs-4">Category</h3>
        <div class="row">
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/watch.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Watch</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/balp.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Balp</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/bike accesory.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Bike accesory</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/car acc.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">car accesory</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/face care.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Face care</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/glass.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Glass</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/health.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Health</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/kitchen.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Kitchen</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/man.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">man</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/natural remedies.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">nactural remedities</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/watch.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">plastic </small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/spray.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">spray</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/woman.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">woman</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/watch.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Watch</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/man.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">man</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/watch.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Watch</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/bike accesory.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">bike accesory</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/woman.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">women</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/face care.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">face care</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/glass.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Glass</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/balp.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Balp</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/kitchen.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">Kitchen</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/plastic.jpg" alt="" height="120px" width="100%">
                    <small class="my-3">plastic</small>
                </div>
            </div>
            <div class="col-md-1">
                <div class="border">
                    <img src="{{asset('frontend')}}/img/fashon.gif" alt="" height="120px" width="100%">
                    <small class="my-3">Fashon</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- all category end -->

<!-- product which you like start  -->
<div class="product my-4">
    <div class="container">
        <div class="product-header">
            <h3 class="text-secondary fs-4 py-2">Just for You</h3>
        </div>
        <div class="row gx-5 gy-5">
           
            
           
            <div class="col-md-2">
                <img src="{{asset('frontend/img/soyabin.jpg')}}" width="100%" height="220px"  alt="">
                <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                <!-- <br> -->
                <span class="fs-4 p-1 text-orange">৳905</span>
                <br>
                <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
            </div>
            <div class="col-md-2">
                <img src="{{asset('frontend/img/rin.jpg')}}" width="100%" height="220px"  alt="">
                <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                <!-- <br> -->
                <span class="fs-4 p-1 text-orange">৳905</span>
                <br>
                <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
            </div>
            <div class="col-md-2">
                <img src="{{asset('frontend/img/detol.jpg')}}" width="100%" height="220px"  alt="">
                <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                <!-- <br> -->
                <span class="fs-4 p-1 text-orange">৳905</span>
                <br>
                <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
            </div>
            <div class="col-md-2">
                <img src="{{asset('frontend/img/cap.jpg')}}" width="100%" height="220px"  alt="">
                <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                <!-- <br> -->
                <span class="fs-4 p-1 text-orange">৳905</span>
                <br>
                <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
            </div>
            <div class="col-md-2">
                <img src="{{asset('frontend/img/realmi bird.jpg')}}" width="100%" height="220px"  alt="">
                <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                <!-- <br> -->
                <span class="fs-4 p-1 text-orange">৳905</span>
                <br>
                <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
            </div>
            <div class="col-md-2">
                <img src="{{asset('frontend/img/apple.jpg')}}" width="100%" height="220px"  alt="">
                <h4 class="fs-6 p-1">Fresh Soyabin Oil</h4>
                <!-- <br> -->
                <span class="fs-4 p-1 text-orange">৳905</span>
                <br>
                <del class="fs-5 ps-1">৳945</del> <span class="fs-5">-4</span><span class="text-secondary fs-5">%</span>
            </div>
        </div>
    </div>
</div>
<!-- product which you like end -->


<!-- end body  -->
    <!-- for owl carousel start  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- for owl carousel end -->
   <script src="{{asset('frontend')}}/script.js"></script>
   <script>

   </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>