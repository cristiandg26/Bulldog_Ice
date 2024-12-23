<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bulldog Ice</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/png" href="public/dist/img/logo_bdi_sf.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Estilos propios -->
    <link rel="stylesheet" href="public/dist/css/dashboard.css">
    
    <style>
        .content {
            display: none; /* Ocultar todas las secciones al inicio */
        }
        .content.active {
            display: block; /* Mostrar solo la sección activa */
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="d-flex flex-column">
            <!-- Logo -->
            <div class="text-center py-3">
                <span class="fs-8 fw-bold">Bull Dog</span>
            </div>
            <!-- Navigation Menu -->
            <ul class="nav flex-column mt-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-target="dashboard" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                        <i class="fas fa-house"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-target="ventas" data-bs-toggle="tooltip" data-bs-placement="right" title="Ventas">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Configuracion">
                        <i class="fa-solid fa-gears"></i>
                    </a>
                </li>
            </ul>
            <!-- Profile Section with Dropdown -->
            <div class="profile mt-auto dropdown">
                <img src="public/dist/img/logo_bdi_sf.png" alt="Profile" class="dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="d-block text-muted small">Username</span>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="?view=logout">Sign Out</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content-container flex-grow-1">
            <!-- Dashboard Section -->
            <div id="dashboard" class="content active">
                <?php require_once('view/dashboard/v_dahsboard.php'); ?>
            </div>

            <!-- Sales Section -->
            <div id="ventas" class="content">
                <?php require_once('view/vent/v_tabla_vent.php'); ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/dist/js/header.js"></script>
</body>
</html>
