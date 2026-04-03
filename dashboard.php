<?php
session_start();

// Validar que la variable de sesión exista
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

// Configurar encabezados para evitar que la página se guarde en caché.
// Esto bloquea la posibilidad de presionar el botón "Atrás" después de cerrar sesión.
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal - Dashboard</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Hojas de estilo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Programacion_Js/styles-dashboard.css">
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

    <!-- Menú Lateral (Sidebar) -->
    <aside class="sidebar">
        <h2>Portal Colegio</h2>
        <nav>
            <ul>
                <li><a href="#" class="active"><i class="fa-solid fa-house"></i> <span>Inicio</span></a></li>
                <li><a href="#"><i class="fa-solid fa-user-graduate"></i> <span>Alumnos</span></a></li>
                <li><a href="#"><i class="fa-solid fa-id-card"></i> <span>Matrículas</span></a></li>
                <li><a href="#"><i class="fa-solid fa-file-invoice-dollar"></i> <span>Pagos</span></a></li>
                <li><a href="#"><i class="fa-solid fa-gear"></i> <span>Ajustes</span></a></li>
            </ul>
        </nav>
        <a href="php/logout.php" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i> <span>Cerrar Sesión</span></a>
    </aside>

    <!-- Contenido Principal -->
    <main class="main-content">
        <!-- Encabezado del Dashboard -->
        <header class="header">
            <h1>Sistema de Matrículas</h1>
            <div class="user-profile">
                <span>Director</span>
                <i class="fa-solid fa-user-tie"></i>
            </div>
        </header>

        <!-- Tarjetas de Información -->
        <section class="cards-grid">
            <div class="dash-card">
                <div class="card-info">
                    <h3>Alumnos Totales</h3>
                    <p>850</p>
                </div>
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="dash-card" style="border-left: 5px solid var(--color-primario);">
                <div class="card-info">
                    <h3>Nuevas Matrículas</h3>
                    <p>124</p>
                </div>
                <i class="fa-solid fa-school"></i>
            </div>
            <div class="dash-card">
                <div class="card-info">
                    <h3>Ingresos Pensiones</h3>
                    <p>$45,200</p>
                </div>
                <i class="fa-solid fa-sack-dollar"></i>
            </div>
            <div class="dash-card">
                <div class="card-info">
                    <h3>Trámites Pendientes</h3>
                    <p>18</p>
                </div>
                <i class="fa-solid fa-clipboard-list"></i>
            </div>
        </section>
    </main>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
