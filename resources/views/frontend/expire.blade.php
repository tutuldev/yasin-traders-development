@extends('frontend.layouts.app')

@section('content')
@include('frontend.inc.expirefilter')
@include('frontend.inc.category')
@include('frontend.inc.countdown')

<!-- product which you like start  -->
<div class="product my-4">
    <div class="container">
        <div class="product-header">
            <h3 class="text-secondary fs-4 py-2">All Product</h3>
        </div>
        <div class="row gx-5 gy-5">


            @foreach ($products as $product)


            <div class="col-md-2">
                <img src="{{ asset('storage/product/' . $product->thumbnail) }}" width="100%" height="220px"  alt="">
                <h4 class="fs-6 p-1">{{$product->product_name}}</h4>
                <!-- <br> -->
                <span class="fs-4 p-1 text-orange">৳{{$product->price}}</span>
                <br>
                <del class="fs-5 ps-1">৳{{$product->old_price}}</del> <span class="fs-5">@php
                  $pricedef= $product->old_price-$product->price;
                  $percent = $product->old_price/100;
                   $discount =$pricedef/$percent;
                   echo  round($discount);
                @endphp</span><span class="text-secondary fs-5">%</span>
                 <p class="fs-6 text-danger p-1 border expircalculate"></p>
                 
                    
            
                 
                
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- product which you like end -->

@endsection

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2023 15:37:25").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
    
      
      
      
      const collection = document.getElementsByClassName("expircalculate");
    
    collection[0].innerHTML = "Expire in: " + days + "days";
      
      
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>