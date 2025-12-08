<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1311/1311144.png" type="image/png">
    <title>products view</title>

</head>
<body>
    <h1>قائمة المنتجات</h1>
    <div class="search-box">
        <form method="GET">
            <input type="text" name="search"  placeholder="ابحث عن منتج ......." value="{{$search}}">
            <button type="submit" >بحث</button>
        </form>
    </div>

   @if (count($products) === 0 )
   <p>لا توجد نتائج مطابقة للبحث</p>
   @endif

   @foreach ($products as $product)
   <div class="card">
    <img src="{{ $product->image }}" alt="product image">
    <h3>{{ $product->name }}</h3>
    <p>السعر: {{ $product->price }} $</p>
    <p>{{ $product->description }}</p>
   </div>
   @endforeach

   </body>
   </html>
