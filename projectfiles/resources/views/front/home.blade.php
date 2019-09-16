@extends('layouts.front')
@section('content')
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/carrots-cucumber-delicious.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/burrito-chicken-close-up-461198.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>New Items</h3>
            </div>
        </div>
        <div class="card-columns">
            <div class="card">
                <img class="card-img-top" src="images/pizza-henderson-john-mac.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Pizza</h4>
                    <p class="card-text">We have every type of Pizza.</p>
                    <a href="{{route('orders.store') }}"><button class="btn btn-primary" type="submit">ORDER</button></a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/burrito-chicken-close-up-461198.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Burrito</h4>
                    <p class="card-text">We have every type of burrito.</p>
                    <button class="btn btn-primary" type="submit">ORDER</button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/momo.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Mo:Mo</h4>
                    <p class="card-text">We have varieties of mo:mo</p>
                    <button class="btn btn-primary" type="submit">ORDER</button>
                    
                </div>
            </div>

            

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h3>Most Popular Items</h3>
        </div>
    </div>
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="images/Super-Flax-Green-Bean-Fries-Vegan.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Green Beans Fries</h4>
                <p class="card-text">We deliver different Bean Fries.</p>
                <button class="btn btn-primary" type="submit">ORDER</button>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/bu.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">Burger</h4>
                <p class="card-text">You can order any Burger you want.</p>
                <button class="btn btn-primary" type="submit">ORDER</button>
            </div>
        </div>
        <div class="card">
                <img class="card-img-top" src="images/Spaghetti.jpeg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Spaghetti</h4>
                    <p class="card-text">You can get varieties of spaghetti you like.</p>
                    <button class="btn btn-primary" type="submit">ORDER</button>
                </div>
            </div>
    </div>
    </div>
@endsection