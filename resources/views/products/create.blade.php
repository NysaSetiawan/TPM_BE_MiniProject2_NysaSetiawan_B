<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <d1>
        @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>

        @endif

    </d1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name "name" placeholder "name"/>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name "qty" placeholder "qty"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name "Price" placeholder "Price"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name "Description" placeholder "Description"/>
        </div>
        <div>
            <input type = "submit" value="save a New Product"
        </div>

    </form>
</body>
</html>
