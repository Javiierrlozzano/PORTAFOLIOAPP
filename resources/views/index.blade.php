<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{$empresas->Nombre}}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="{{asset('../resources/css/home/bootstrap.min.css')}}">
      <!-- style css -->
   
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('../resources/css/home/responsive.css')}}">
      <!-- fevicon -->
      
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('../resources/css/home/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
    
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css"
         href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
    
      <link rel="stylesheet" href="{{asset('../resources/css/home/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('../resources/css/home/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
         media="screen">
      <link rel="stylesheet" type="text/css" href="{{asset('../resources/css/home/style.css')}}"></head>
   <style>
    body{
        background-color: rgb(255, 255, 255)
    }
    .container{
        background-color: rgb(255, 255, 255)
    }
    .bg-white{
        background-color: rgb(255, 255, 255)!important;
    }
    .box_main{
        background-color: rgb(255, 255, 255)
    }
    /* Establece el tamaño de la imagen para que sea igual al div contenedor */
/* Establece el tamaño de la imagen para que sea igual al div contenedor */
.logos img {
    width: 100%;
    
    height: 400px;/* La imagen ocupa todo el ancho del div contenedor */
    /* Escala la imagen para cubrir el espacio sin deformarla */
}
.imBuscar img {
    width: 100%;
    
    height: 150px;/* La imagen ocupa todo el ancho del div contenedor */
    /* Escala la imagen para cubrir el espacio sin deformarla */
}
    .imgferta {
   
    text-align: center;
    margin: 0px 0px;
    min-height: 0px;
}
body {
    margin: 0;
    padding: 0;
}
@foreach ($categorias as $categoria)
#{{$categoria->NombreCategoria}}_main_slider a.carousel-control-next {
    right: 615px;
    top: 105%;
}

#{{$categoria->NombreCategoria}}_main_slider a.carousel-control-prev {
    left: 615px;
    top: 105%;
}

#{{$categoria->NombreCategoria}}_main_slider .carousel-control-next,
#{{$categoria->NombreCategoria}}_main_slider .carousel-control-prev {
    width: 55px;
    height: 55px;
    background-color: #1f1f1d;
    opacity: 1;
    font-size: 30px;
    color: #ffffff;
}

#{{$categoria->NombreCategoria}}_main_slider .carousel-control-next:focus,
#{{$categoria->NombreCategoria}}_main_slider .carousel-control-next:hover,
#{{$categoria->NombreCategoria}}_main_slider .carousel-control-prev:focus,
#{{$categoria->NombreCategoria}}_main_slider .carousel-control-prev:hover {
    color: #fff;
    background-color: #f26522;
}
@endforeach

   </style>
   <script>
    var ulss='http://localhost/PORTAFOLIOAPP/public/';
   </script>
   <body>
      <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/PORTAFOLIOAPP/{{$empresas->Logo}}" alt="" width="350" height="350" class="d-inline-block align-text-top">
        </a>
        <form class="form-inline my-2 my-lg-0">
            <a class="nav-link " href="#"  data-target=".bd-example-modal-lg" data-bs-toggle="modal" data-bs-target="#Buscar">
                <i > <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 50 50">
                          <path d="M21 3C11.621094 3 4 10.621094 4 20C4 29.378906 11.621094 37 21 37C24.710938 37 28.140625 35.804688 30.9375 33.78125L44.09375 46.90625L46.90625 44.09375L33.90625 31.0625C36.460938 28.085938 38 24.222656 38 20C38 10.621094 30.378906 3 21 3ZM21 5C29.296875 5 36 11.703125 36 20C36 28.296875 29.296875 35 21 35C12.703125 35 6 28.296875 6 20C6 11.703125 12.703125 5 21 5Z"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  </i>
            </a>
        </form>
    </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                   

                    <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                        @foreach ($categorias as $categoria)
                            <a class="dropdown-item" href="{{ Route('categorias.show',$categoria->id)}} ">{{ $categoria->NombreCategoria }}</a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </li>
               
            </ul>
     
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                      @if ($cliente!=null)
                      <a href="#" data-target=".bd-example-modal-lg" data-bs-toggle="modal" data-bs-target="#clientes" class="text-sm text-gray-700 dark:text-gray-500 underline">{{$cliente->doc}}</a>
                      @else
                        <a href="#" data-target=".bd-example-modal-lg" data-bs-toggle="modal" data-bs-target="#clientes" class="text-sm text-gray-700 dark:text-gray-500 underline">Seleccionar Usuario</a>
                        @endif

                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
            </li>
        </ul>
    </div>

</nav>
@yield('content')
 @include('carritomodal')


      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section ">
      
            
            <div style="text-align: center; " class="">Telefono : <a href="#">{{$empresas->Telefono}}</a></div>
            <p style="text-align: center;">© 2023 {{$empresas->Nombre}} </p>
       
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->

      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('../resources/js/home/jquery.min.js')}}"></script>
      <script src="{{asset('../resources/js/home/popper.min.js')}}"></script>
      <script src="{{asset('../resources/js/home/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('../resources/js/home/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('../resources/js/home/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('../resources/js/home/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('../resources/js/home/custom.js')}}"></script>
      <script src="{{asset('../resources/js/home/carrito.js')}}"></script>
      <script>
         function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
         }

         function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
         }
      </script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script>
   </script>
    @include('Buscar')
    @include('cliente.buscar')
    <script>
        
        function agregarcarrito(idProducto,users,cliente,empresa) {
            var datas={
                Clientes_id:cliente,
                Empresa_id:{{$empresas->id ?? null}},
                Producto_id:idProducto,
                users_id:users  
            }
            $.ajax({
                url: "{{ route('facturas.store') }}",
                type: "POST",
                headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data:  JSON.stringify(datas),
                success: function(data) {
                  console.log(data);
                 
                }
            });
        }
      
    </script>
</html>