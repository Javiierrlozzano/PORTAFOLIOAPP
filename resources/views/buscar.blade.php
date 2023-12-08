<div class="modal fade  bd-example-modal-lg" id="Buscar" tabindex="-1" aria-labelledby="BuscarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="BuscarLabel">Buscar Productos </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
          <div class="row">
            <input type="text" id="search" class="form-control" placeholder="Buscar productos">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre del Producto</th>
                       
                    </tr>
                </thead>
                <tbody id="product-list">
                    <!-- Aquí se mostrarán los resultados de la búsqueda -->
                </tbody>
            </table>
          </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Vaciar Carrito</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var searchTerm = $(this).val();
            
            $.ajax({
                url: "{{ route('productos.autocomplete') }}",
                type: "GET",
                data: {
                    term: searchTerm
                },
                success: function(data) {
                    var productList = $('#product-list');
                    productList.empty();
                    
                    if (data.length > 0) {
                        $.each(data, function(index, product) {
                            productList.append(
                                '<div class="col-lg-12 col-sm-12">' +
                                '<div class="box_main">' +
                                '<h4 class="shirt_text">' + product.NombreProducto + '</h4>' +
                                '<p class="price_text">Valor <span style="color: #262626;">$ ' + product.Valor + '</span></p>' +
                                '<a href="'+ulss+'productos/'+product.id +'"><div class="imBuscar"> <img src="'+ulss + product.Imagen + '" width="150" height="150" ></div></a>' +
                                '<div class="btn_main">' +
                                '<div class="buy_bt"><a href="#">Comprar</a></div>' +
                                '<div class="seemore_bt"><a href="#">Agregar Carrito</a></div>' +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );
                        });
                    } else {
                        productList.append('<div class="col-12">No se encontraron productos.</div>');
                    }
                }
            });
        });
    });
    </script>
    
  