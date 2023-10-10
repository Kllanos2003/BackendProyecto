
@extends('layout.main')


@section('content')
    <h1 class="text-center m-5">Detalle del producto</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <img src="img/producto1.png" class="img-fluid" alt="...">

            </div>
            <div class="col-md-4">
                <h1> Nombre del producto</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere molestias quam tempora cumque quod vero quae, fuga distinctio, molestiae autem dolorum, vitae provident doloribus possimus nam consequatur at obcaecati maiores.</p>	
                <h3>1000000$</h3>
                <button type="button" class="btn my-background">Añadir al carro</button>

            </div>
        </div>
    </div>


@endsection