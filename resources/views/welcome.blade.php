<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-commerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .product{
                margin: auto;
                background-color: #6a89cc;
                color: white;

            }
            .order{
                background-color: #d1f1d0;
                color: #000;
                font-size: 20px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel E-commerce : my orders
                </div>
                @foreach($orders as $order)
                <div class="product">
                    <p>order number : {{$order->id}}</p>
                    @foreach($order->cart->items as $item)
                   <div class="order">
                       <p>item name : {{$item['item']['name']}}</p>
                        <p>all price :{{$item['price']}}</p>
                        <p>all quntity :{{$item['qty']}}</p>
                   </div>
                        @endforeach
                    <p>total price : {{$order->cart->totalPrice}}</p>
                </div>
                    @endforeach
                <h2><a href="/shop">shop</a></h2>
            </div>
        </div>
    </body>
</html>
