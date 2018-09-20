<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop page</title>
</head>
<style>

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        background-color: #6a89cc;
        color: white;
        width: 250px;
        height: 50px;
    }

    .product{
        margin: auto;
margin-bottom: 5px;
        background-color: #6a89cc;
        color: white;
        max-width: 400px;
        text-align: center;
       padding-top: 2px;
    }

    a{
        text-decoration: none;
        color: #1f648b;
    }
    .top-right a,.product a{
        text-decoration: none;
        color: white;
    }
    a:hover , .product a:hover{
        text-decoration: underline;
    }
</style>
<body>
{{-- cart div--}}
<div class="top-right links">
   <p><a href="{{route('cart')}}">cart number {{session()->has('cart') ? session('cart')->totalQty:'' }}</a></p>
</div>
<h1>shop product page</h1>
<h2><a href="/"> >> home </a></h2>
<h2><a href="/cart"> >> cart </a></h2>

@foreach($products as $product)
    <div class="product">
        <p><a href="/shop/{{$product->slug}}">{{$product->name}}</a></p>
        <p>{{$product->price}}</p>
        <p>{{$product->description}}</p>
        <a href="{{route('addToCart',$product->id)}}" >add to cart</a>
    </div>
@endforeach

</body>
</html>