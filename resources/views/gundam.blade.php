
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gundam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .product-collection {
    text-align: center;
    margin-top: 50px;
}

.product-card {
    display: inline-block;
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin: 15px;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.product-card img {
    width: 100%;
    border-radius: 8px;
}

.product-card h2 {
    font-size: 20px;
    margin: 10px 0;
}

.product-card p {
    font-size: 14px;
    color: #555;
}

.rating {
    margin: 10px 0;
}

.rating i {
    color: #f5c518;
}

.price-trolley {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.price-trolley .trolley-icon {
    color: #000;
    font-size: 24px;
    text-decoration: none;
}

.price-trolley .trolley-icon:hover {
    color: #555;
}
    </style>
</head>
<body>

    <div class="product-collection">
        <h1>Gundam Collection</h1>
        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/image.png') }}" class="card-img-top" alt="Gundam RX-78-2">
            <h2>Gundam RX-78-2</h2>
            <p>The iconic Gundam from the original series.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>

            </div>
            <div class="price-trolley">
                <span>Rp 500,000</span>
                <a href="#" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>

        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/uni.png') }}" class="card-img-top" alt="Gundam Unicorn">
            <h2>Gundam Unicorn</h2>
            <p>One of the most popular models in the Gundam series.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                {{-- <i class="fas fa-star-half-alt"></i> --}}
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price-trolley">
                <span>Rp 750,000</span>
                <a href="#" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>

        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/xi.png') }}" class="card-img-top" alt="Gundam Exia">
            <h2>Gundam Exia</h2>
            <p>A model known for its sleek design and combat abilities.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price-trolley">
                <span>Rp 650,000</span>
                <a href="#" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/xi.png') }}" class="card-img-top" alt="Gundam Exia">
            <h2>Gundam Exia</h2>
            <p>A model known for its sleek design and combat abilities.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price-trolley">
                <span>Rp 650,000</span>
                <a href="/shop" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/xi.png') }}" class="card-img-top" alt="Gundam Exia">
            <h2>Gundam Exia</h2>
            <p>A model known for its sleek design and combat abilities.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price-trolley">
                <span>Rp 650,000</span>
                <a href="#" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/xi.png') }}" class="card-img-top" alt="Gundam Exia">
            <h2>Gundam Exia</h2>
            <p>A model known for its sleek design and combat abilities.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price-trolley">
                <span>Rp 650,000</span>
                <a href="#" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/xi.png') }}" class="card-img-top" alt="Gundam Exia">
            <h2>Gundam Exia</h2>
            <p>A model known for its sleek design and combat abilities.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price-trolley">
                <span>Rp 650,000</span>
                <a href="#" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        <div class="product-card shadow p-3 mb-5">
            <img src="{{ asset('storage/foto/xi.png') }}" class="card-img-top" alt="Gundam Exia">
            <h2>Gundam Exia</h2>
            <p>A model known for its sleek design and combat abilities.</p>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price-trolley">
                <span>Rp 650,000</span>
                <a href="#" class="trolley-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>




    </div>
</body>
</html>
@endsection
