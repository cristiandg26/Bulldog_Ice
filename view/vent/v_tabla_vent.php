<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ventas</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Gestión de Ventas</h1>

        <!-- Tabla de ventas -->
        <div id="tableContainer">
            <button id="newSaleBtn" class="btn btn-primary mb-3">Nueva Venta</button>
            <table id="salesTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
            </table>
        </div>

        <!-- Formulario de nueva venta -->
        <div id="formContainer" style="display:none;">
            <form id="newSaleForm" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="product" class="form-label">Producto:</label>
                    <input type="text" class="form-control" id="product" name="product" required>
                    <div class="invalid-feedback">Por favor, ingrese un producto.</div>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Cantidad:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                    <div class="invalid-feedback">Por favor, ingrese una cantidad.</div>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Precio:</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                    <div class="invalid-feedback">Por favor, ingrese un precio.</div>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="button" id="cancelForm" class="btn btn-secondary">Cancelar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            // Inicializar DataTable
            const salesTable = $('#salesTable').DataTable({
                ajax: {
                    url: 'backend/load_sales.php', // Endpoint para cargar las ventas
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'product' },
                    { data: 'quantity' },
                    { data: 'price' },
                    { data: 'date' }
                ]
            });

            // Mostrar el formulario para nueva venta y ocultar la tabla
            $('#newSaleBtn').click(function () {
                $('#tableContainer').hide();
                $('#formContainer').show();
            });

            // Cancelar el formulario y volver a mostrar la tabla
            $('#cancelForm').click(function () {
                $('#formContainer').hide();
                $('#tableContainer').show();
            });

            // Enviar formulario de nueva venta
            $('#newSaleForm').submit(function (e) {
                e.preventDefault();

                if (this.checkValidity()) {
                    $.ajax({
                        url: 'backend/add_sale.php', // Endpoint para insertar una nueva venta
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            alert('Venta registrada con éxito');
                            $('#formContainer').hide();
                            $('#tableContainer').show();
                            salesTable.ajax.reload(); // Recargar la tabla
                        },
                        error: function () {
                            alert('Error al registrar la venta');
                        }
                    });
                } else {
                    this.classList.add('was-validated');
                }
            });
        });
    </script>
</body>
</html>
