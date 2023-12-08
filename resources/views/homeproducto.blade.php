<?php
$hasOffer = false; // Variable para rastrear si hay al menos un producto con oferta

foreach ($productos as $producto) {
    if ($producto->Oferta) {
        $hasOffer = true; // Marcar que hay al menos un producto con oferta
    }
}
?>

<?php if ($hasOffer): ?>
    
        <div class="">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $first = 0; // Para marcar el primer producto como "active"

                        foreach ($productos as $producto) {
                            if ($producto->Oferta && $producto->Imagen) {
                               $first++;
                               if ($first==1) {
                                   $class =  'carousel-item active';
                               }else {
                                   $class =  'carousel-item';
                               }
                                   
                                ?>
                                <div class="<?php echo $class; ?>">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            @if (Route::is('cliente.show'))
                                            <a href="{{url('productos/'.$producto->id.'/'.$cliente->id ) }}"><div class="logos"> <img src="/PORTAFOLIOAPP/{{$producto->Imagen}}"  width="350" height="350" ></div></a>
                                           @else
                                           <a href="{{route('productos.show',$producto->id) }}"><div class="logos"> <img src="/PORTAFOLIOAPP/{{$producto->Imagen}}"  width="350" height="350" ></div></a>
                                           @endif
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                   
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                       <i class="fa fa-angle-left"></i>
                   </a>
                </div>
            </div>
        </div>
    
<?php endif; ?>


<!-- banner section end -->
</div>
@foreach ($categorias as $categoria)
@php
$productosCategoria = $productos->where('Categoria_id', $categoria->id);
@endphp

@if ($productosCategoria->count() > 0)
 <div class="fashion_section">
     <div id="{{$categoria->NombreCategoria}}_main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
             @foreach($productosCategoria->chunk(3) as $key => $chunk)
                 <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                     <div class="container">
                         <h1 class="fashion_taital">{{$categoria->NombreCategoria}}</h1>
                         <div class="fashion_section_2">
                             <div class="row">
                                 @foreach ($chunk as $producto)
                                 @if ($producto->Imagen)
                                     
                                 
                                     <div class="col-lg-4 col-sm-4">
                                         <div class="box_main">
                                             <h4 class="shirt_text">{{$producto->NombreProducto}}</h4>
                                             <p class="price_text">Precio <span style="color: #262626;">{{$producto->Valor}}</span></p>
                                             @if (Route::is('clientes.show'))
                                             <a href="{{url('productos/'.$producto->id.'/'.$cliente->id ) }}"><div class="tshirt_img"><img src="/PORTAFOLIOAPP/{{$producto->Imagen}}"></div></a>
                                             @else
                                             <a href="{{route('productos.show',$producto->id) }}"><div class="tshirt_img"><img src="/PORTAFOLIOAPP/{{$producto->Imagen}}"></div></a>
                                             @endif
                                             
                                             <h4 class="shirt_text"> @if ( $producto->CantidadExitente)
                                               Existencias: {{$producto->CantidadExitente ?? null}}
                                             @endif</h4>
                                             <div class="btn_main">
                                                <input type="number" class="form-control">
                                                <a 
                                               
                                                @if (Auth::check() || Route::is('clientes.show'))
                                                    @if ($producto->agregarcomentario)
                                                    data-target=".bd-example-modal-lg" data-bs-toggle="modal" data-bs-target="#comentarios"
                                                    @else
                                                        onclick="agregarcarrito()"
                                                    @endif
                                                    
                                                @else
                                                    href="{{ route('login') }}"
                                                @endif
                                                
                                                
                                                
                                                   class="buy_bt btn-info">
<i>
                                                Agregar al Carrito</i> </a>
                                               

                                                 <div class="seemore_bt"><a href="https://wa.me/{{$producto->celular}}?text=Me%20interesa%20este%20producto%3A%20%0A%20'{{$producto->NombreProducto}}'" target="_blank">Cotizar</a></div>
                                             </div>
                                         </div>
                                     </div>
                                     @endif
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
         <a class="carousel-control-prev" href="#{{$categoria->NombreCategoria}}_main_slider" role= "button" data-slide="next">
           <i class="fa fa-angle-right"></i>
       </a>
         <a class="carousel-control-next" href="#{{$categoria->NombreCategoria}}_main_slider" role="button" data-slide="prev">
             <i class="fa fa-angle-left"></i>
         </a>
       
     </div>
 </div>
@endif
@include('producto.comentarios')
@endforeach