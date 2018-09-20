<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$product->slug}}</title>
</head>
<style>
    a{
        text-decoration: none;
        color: #1f648b;
    }
    a:hover{
        text-decoration: underline;
    }
    .product{
        margin: auto;
        background-color: #6a89cc;
        color: white;
        max-width: 400px;
        text-align: center;
        padding-top: 2px;
    }
</style>
<body>
<h1> product page</h1>

    <div class="product">
        <p>{{$product->name}}</p>
        <p>{{$product->price}}</p>
        <p>{{$product->description}}</p>
    </div>
<h2><a href="/">home</a> >> <a href="/shop"> shop</a></h2>

</body>
</html>