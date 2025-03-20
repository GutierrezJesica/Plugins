<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Programita</title>
</head>
<body>
    <div class="box">
        <div class ="fecha">
            <p><?php include("funciones.php");
                echo $hora; ?></p>
            <p><?php
                echo dia_semana() . "  " . $fecha_actual; ?></p>
        </div>
        <h1>Programita de gastos mensuales</h1>
        <br>
            <div class="contenedor">
                <div id="gastos" class="column-1">
                    <input type="number" name="Monto" id="monto" placeholder="Ingrese un monto">
                    <br>
                    <button>Aceptar</button>
                </div>
                <div id="ingresos" class="column-2">
                    
                </div>
            </div>
    </div>
</body>
</html>