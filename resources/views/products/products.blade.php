@extends('layout.main')

@section('content')
   <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-jornadas-constitucional.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-semana-ingenieria.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-semana-tecnologo-2023.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 class="text-center m-5">Productos</h1>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/producto1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PCGAYMER</h5>
                        <p class="card-text">100000 $</p>
                        <a href="#" class="btn btn-primary my-background">AÑADIR CARRITO</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/producto1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PCGAYMER</h5>
                        <p class="card-text">100000 $</p>
                        <a href="#" class="btn btn-primary my-background">AÑADIR CARRITO</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/producto1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PCGAYMER</h5>
                        <p class="card-text">100000 $</p>
                        <a href="#" class="btn btn-primary my-background">AÑADIR CARRITO</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/producto1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PCGAYMER</h5>
                        <p class="card-text">100000 $</p>
                        <a href="#" class="btn btn-primary my-background">AÑADIR CARRITO</a>
                    </div>
                </div>
            </div>
            </div>

           

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

            
@endsection