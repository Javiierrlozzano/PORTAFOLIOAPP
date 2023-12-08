<div class="modal fade  bd-example-modal-lg" id="clientes" tabindex="-1" aria-labelledby="clientesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientesLabel">clientes Productos </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                <div class="row">
                    <input type="text" id="cli" class="form-control" placeholder="Buscar productos">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Seleccionar</th>
                            </tr>
                        </thead>
                        <tbody id="tables">
                            <!-- Aquí se mostrarán los resultados de la búsqueda -->
                        </tbody>
                    </table>
                    </div> 
                </div>
      

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
 </div>
 <script>
    var showUrl = "{{ route('clientes.show', ['cliente' => '/']) }}"; // URL base para mostrar detalles de clientes

    $(document).ready(function() {
        $('#cli').on('keyup', function() {
            var searchTerms = $(this).val();
            console.log(searchTerms);

            $.ajax({
                url: "{{ route('clientes.autocomplete') }}",
                type: "GET",
                data: { term: searchTerms },
                success: function(data) {
                    var productList = $('#tables');
                    productList.empty();

                    if (data.length > 0) {
                        data.forEach(function(product) {
                            var showLink = showUrl + '/' + product.id;
                            productList.append(
                                '<tr>' +
                                '<td>' + product.doc + '</td>' +
                                '<td>' + product.nombre + '</td>' +
                                '<td><a class="btn btn-sm btn-success" href="' + showLink + '"><i class="fa fa-fw fa-eye"></i> Seleccionar</a></td>' +
                                '</tr>'
                            );
                        });
                    } else {
                        productList.append('<div class="col-12">No se encontraron productos.  <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-fw fa-add"></i> Crear</a> </div>');
                    }
                }
            });
        });
    });
</script>


  