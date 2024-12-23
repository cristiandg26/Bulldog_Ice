<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/dist/css/v_vent.css">
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Formulario de Ejemplo</h1>
        <form id="exampleForm" class="needs-validation" novalidate>
            <!-- Campo de Texto -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" required>
                <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
            </div>

            <!-- Campo de Correo -->
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" required>
                <div class="invalid-feedback">Por favor, ingrese un correo válido.</div>
            </div>

            <!-- Campo de Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                <div class="invalid-feedback">Por favor, ingrese una contraseña.</div>
            </div>

            <!-- Campo de Fecha -->
            <div class="mb-3">
                <label for="dob" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="dob" required>
                <div class="invalid-feedback">Por favor, seleccione una fecha.</div>
            </div>

            <!-- Campo de Número -->
            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="phone" placeholder="Ejemplo: 1234567890" required>
                <div class="invalid-feedback">Por favor, ingrese un número de teléfono válido.</div>
            </div>

            <!-- Campo de Archivo -->
            <div class="mb-3">
                <label for="file" class="form-label">Subir Archivo</label>
                <input type="file" class="form-control" id="file" required>
                <div class="invalid-feedback">Por favor, suba un archivo.</div>
            </div>

            <!-- Campo de Selección -->
            <div class="mb-3">
                <label for="country" class="form-label">País</label>
                <select class="form-select" id="country" required>
                    <option value="">Seleccione...</option>
                    <option value="colombia">Colombia</option>
                    <option value="mexico">México</option>
                    <option value="argentina">Argentina</option>
                </select>
                <div class="invalid-feedback">Por favor, seleccione un país.</div>
            </div>

            <!-- Campo de Checkbox -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">Acepto los términos y condiciones</label>
                <div class="invalid-feedback">Debe aceptar los términos y condiciones.</div>
            </div>

            <!-- Botón de Envío -->
            <button class="btn btn-primary w-100" type="submit">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/dist/js/v_vent.js"></script>
</body>
</html>
