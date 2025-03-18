<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Programita de gastos mensuales</title>
</head>
<body>
    <div class="box">
        <h1>Programita de gastos mensuales</h1>
        <br>
            <div class="contenedor">
                <div id="gastos" class="column-1">
                    <label for="gastos">Gasto</label>
                    <br>
                    <input type="number" name="Gastos" id="gastos" placeholder="$">
                    <br>
                    <button>Enviar</button>
                </div>
                <div id="ingresos" class="column-2">
                    <label for="ingresos">Ingreso</label>
                    <br>
                    <input type="number" name="Ingresos" id="ingresos" placeholder="$">
                    <br>
                    <button>Enviar</button>
                </div>
            </div>
    </div>
</body>
</html>