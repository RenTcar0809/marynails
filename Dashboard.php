<?php
// Aquí irá tu conexión a la base de datos Aiven
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Studio de Uñas</title>
    
    <!-- Esta línea conecta tu archivo CSS externo -->
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <div class="header">
        <h2>Hola, Camila ✨</h2>
        <p>Tu resumen de hoy</p>
    </div>

    <div class="container">
        <!-- Tarjeta de Ingresos -->
        <div class="card">
            <h3>Ingresos del Día</h3>
            <div class="stat-value">$120.000</div>
        </div>

        <!-- Tarjeta de Próximas Citas -->
        <div class="card">
            <h3>Próximas Citas</h3>
            
            <div class="appointment">
                <strong>10:00 AM - María López</strong><br>
                <small>Manicura Semipermanente</small>
            </div>
            
            <div class="appointment">
                <strong>02:30 PM - Andrea Gómez</strong><br>
                <small>Uñas Acrílicas + Diseño</small>
            </div>
        </div>
    </div>

    <!-- Navegación móvil -->
    <div class="bottom-nav">
        <button>📅 Citas</button>
        <button>💅 Servicios</button>
    </div>

</body>
</html>