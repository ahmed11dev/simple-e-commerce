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
<h1>checkout page</h1>

<div class="product">
    <h3>total price : {{$total}}</h3>
    <form action="{{route('postorder')}}" method="post">
        {{ csrf_field() }}
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="text" name="address" placeholder="address">
    <br>
    <input type="text" name="phone" placeholder="phone">
    <br>
        <input type="submit" value="send order">
    <br>
</div>

    <h2><a href="/">home</a> >> <a href="/shop"> shop</a></h2>
</form>
</body>
</html>

