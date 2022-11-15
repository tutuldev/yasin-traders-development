<!-- product which you like start  -->
<div class="product my-4">
    <div class="container">
        <div class="product-header">
            <h3 class="text-secondary fs-4 py-2">Just for You</h3>
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
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- product which you like end -->