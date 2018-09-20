<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cart page</title>
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
<h1>cart page</h1>

@if( session()->has('cart') )
<div>

    @foreach($products as $product)
    <div class="product">
        <p>{{$product['item']['name']}}</p>
        <p>quntity : {{$product['qty']}}</p>
        <p>all price : {{$product['price']}}</p>
        <ul>
            <li><a href="{{route('removeFromCart',$product['item']['id'])}}">remove 1</a></li>
            <li><a href="{{route('removeItem',$product['item']['id'])}}">remove all</a></li>
        </ul>
    </div>
    @endforeach
    <p>total price : {{$totalPrice}}</p>
        <a href="{{route('checkout')}}">check out</a>
</div>
@else
    <h2>no items in cart</h2>
@endif
<h2><a href="/">home</a> >> <a href="/shop"> shop</a></h2>

</body>
</html>

{{--<div class="product">--}}
    {{--<p>{{$product['item']['name']}}</p>--}}
    {{--<p>quntity : {{$product['qty']}}</p>--}}
    {{--<p>all price : {{$product['price']}}</p>--}}
    {{--<ul>--}}
        {{--<li><a href="#">remove 1</a></li>--}}
        {{--<li><a href="#"></a>remove all</li>--}}
    {{--</ul>--}}
{{--</div>--}}