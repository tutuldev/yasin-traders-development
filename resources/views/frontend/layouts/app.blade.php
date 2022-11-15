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
                    <li class="d-inline px-3 "> <a href="{{route('expire.index')}}" class="text-decoration-none text-dark fs-7">Expire Soon</a></li>
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
                    <a href="{{url('fnt')}}"><img src="{{asset('frontend/img/HATBAZSARWITHTEXT.png')}}" alt="logo" height="50px" width="170px"></a>
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



@yield('content')







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
