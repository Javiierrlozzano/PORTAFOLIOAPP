@extends('index')

@section('content')
      <div class="row">
         <div class="col-lg-6 col-sm-6">
            <div class="fashion_section">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                           @if (  $producto->Imagen )
                           <div class="carousel-item active">
                           <div class="container">
                              
                              <div class="fashion_section_2">
                                 <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                       <div class="box_main">
                                          <h4 class="shirt_text">{{$producto->NombreProducto ?? null}} </h4>
                                          <p class="price_text">Valor <span style="color: #262626;">$ {{$producto->Valor ?? null}}</span></p>
                                          @if (Route::is('clientes.show'))
                                          <a href="{{route('productos.mostrar'.$producto->id,'3' ) }}"><div class="tshirt_img"><img src="/PORTAFOLIOAPP/{{$producto->Imagen}}"></div></a>
                                          
                                          
                                          @else
                                          <a href="{{route('productos.show',$producto->id) }}"><div class="tshirt_img"><img src="/PORTAFOLIOAPP/{{$producto->Imagen}}"></div></a>
                                          @endif

                                          <div class="btn_main">
                                             <div class="buy_bt"><a href="#">Comprar</a></div>
                                             <div class="seemore_bt"><a href="#">Agregar Carrito</a></div>
                                             
                                          </div>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                           @endif
                           @if ($producto->Imagen2)
                           <div class="carousel-item">
                              <div class="container">
                              
                                 <div class="fashion_section_2">
                                    <div class="row">
                                       
                                       <div class="col-lg-12 col-sm-12">
                                          <div class="box_main">
                                             <h4 class="shirt_text">{{$producto->NombreProducto ?? null}} </h4>
                                             <p class="price_text">Valor <span style="color: #262626;">$ {{$producto->Valor ?? null}}</span></p>
                                             <div class="tshirt_img"><img src="/PORTAFOLIOAPP/{{$producto->Imagen2}}"></div>
                                             <div class="btn_main">
                                                <div class="buy_bt"><a href="#">Comprar</a></div>
                                                <div class="seemore_bt"><a href="#">Agregar Carrito</a></div>
                                             </div>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endif
                        @if ($producto->Imagen3)
                        <div class="carousel-item">
                           <div class="container">
                           
                              <div class="fashion_section_2">
                                 <div class="row">
                                    
                                    <div class="col-lg-12 col-sm-12">
                                       <div class="box_main">
                                          <h4 class="shirt_text">{{$producto->NombreProducto ?? null}} </h4>
                                          <p class="price_text">Valor <span style="color: #262626;">$ {{$producto->Valor ?? null}}</span></p>
                                          <div class="tshirt_img"><img src="/PORTAFOLIOAPP/{{$producto->Imagen3}}"></div>
                                          <div class="btn_main">
                                             <div class="buy_bt"><a href="#">Comprar</a></div>
                                             <div class="seemore_bt"><a href="#">Agregar Carrito</a></div>
                                          </div>
                                       </div>
                                    </div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endif
                        @if ($producto->Imagen4)
                        <div class="carousel-item">
                           <div class="container">
                           
                              <div class="fashion_section_2">
                                 <div class="row">
                                    
                                    <div class="col-lg-12 col-sm-12">
                                       <div class="box_main">
                                          <h4 class="shirt_text">{{$producto->NombreProducto ?? null}} </h4>
                                          <p class="price_text">Valor <span style="color: #262626;">$ {{$producto->Valor ?? null}}</span></p>
                                          <div class="tshirt_img"><img src="/PORTAFOLIOAPP/{{$producto->Imagen4}}"></div>
                                          <div class="btn_main">
                                             <div class="buy_bt"><a href="#">Comprar</a></div>
                                             <div  class="seemore_bt"><a href="#">Agregar Carrito</a></div>
                                          </div>
                                       </div>
                                    </div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endif
                        
                     </div>
                     @if (  $producto->Imagen2 )
                     <div class="row">
                        <div class="col-sm-6">
                           <a class="btn btn-success"  href="#main_slider" role="button" data-slide="prev">
                              <i class="fa fa-angle-left"></i>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a class="btn btn-success" href="#main_slider" role="button" data-slide="next">
                              <i class="fa fa-angle-right"></i>
                           </a>
                        </div>
                     </div>
                     
                     
                     @endif
                  
                     </div>
                  </div>
               </div>
            </div>
         </div>
                    @endsection