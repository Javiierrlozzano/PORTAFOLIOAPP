
@extends('index')

@section('content')
<h1 class="fashion_taital">{{$categoria->NombreCategoria}}</h1>
<div class="row">

@foreach ($productos as $producto)

    <div class="col-lg-4 col-sm-4">
       <div class="box_main">
          <h4 class="shirt_text">{{$producto->NombreProducto ?? null}} </h4>
          <p class="price_text">Valor <span style="color: #262626;">$ {{$producto->Valor ?? null}}</span></p>
          <a href="{{route('productos.show',$producto->id) }}"><div class="logos"> <img src="/PORTAFOLIOAPP/{{$producto->Imagen}}"  width="350" height="350" ></div></a>
          <div class="btn_main">
             <div class="buy_bt"><a href="#">Comprar</a></div>
             <div class="seemore_bt"><a href="#">Agregar Carrito</a></div>
          </div>
       </div>
    </div>

@endforeach
</div>
</div>
@endsection