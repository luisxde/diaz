<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1E3C72; /* Azul marino */
        }
        .container {
            margin-top: 50px;
        }
        table {
            background-color: #FFFFFF; /* Blanco */
            border-radius: 10px; /* Bordes redondeados */
            border: 1px solid #C0C0C0; /* Borde plateado */
        }
        th, td {
            border: 1px solid #C0C0C0; /* Borde plateado */
            padding: 10px; /* Espaciado interno */
        }
        th {
            background-color: #C0C0C0; /* Plateado */
            color: #1E3C72; /* Azul marino */
        }
        th, td {
            color: #333333; /* Texto negro */
        }
        .btn-container {
            text-align: center; /* Alineación central del botón */
            margin-top: 20px; /* Margen superior */
        }
        .btn-primary {
            background-color: #C0C0C0; /* Plateado */
            border-color: #C0C0C0; /* Plateado */
        }
        .btn-primary:hover {
            background-color: #DCDCDC; /* Plateado más claro al pasar el ratón */
            border-color: #DCDCDC; /* Plateado más claro al pasar el ratón */
        }
    </style>
</head>
<body>

    <?php
    function validarCampo($campo) {
        return !empty($campo);
    }

    if (isset($_POST['registrar'])) {
        $errores = array();
        if (!validarCampo($_POST['correo'])) {
            $errores[] = "Correo es requerido";
        }
        if (!validarCampo($_POST['contrasenia'])) {
            $errores[] = "Contraseña es requerida";
        }
        if (!validarCampo($_POST['contrasenia2'])) {
            $errores[] = "Confirmación de contraseña es requerida";
        }
        if ($_POST['contrasenia'] !== $_POST['contrasenia2']) {
            $errores[] = "Las contraseñas no coinciden";
        }
        if (!validarCampo($_POST['nombre'])) {
            $errores[] = "Nombre es requerido";
        }
        if (!validarCampo($_POST['apellido'])) {
            $errores[] = "Apellido es requerido";
        }
        if (!validarCampo($_POST['telefono'])) {
            $errores[] = "Teléfono es requerido";
        }
        if (!validarCampo($_POST['direccion'])) {
            $errores[] = "Dirección es requerida";
        }
        if (!validarCampo($_POST['adicional1'])) {
            $errores[] = "Campo adicional 1 es requerido";
        }
        if (!validarCampo($_POST['adicional2'])) {
            $errores[] = "Campo adicional 2 es requerido";
        }
        if (!validarCampo($_POST['adicional3'])) {
            $errores[] = "Campo adicional 3 es requerido";
        }

        if (!empty($errores)) {
            echo "<div class='alert alert-danger'>";
            foreach ($errores as $error) {
                echo "<p>$error</p>";
            }
            echo "</div>";
        } else {
            echo "<div class='container'>";
            echo "<h2>Datos del formulario</h2>";
            echo "<table class='table'>";
            echo "<tr><th>Nombre</th><td>{$_POST['nombre']}</td></tr>";
            echo "<tr><th>Apellido</th><td>{$_POST['apellido']}</td></tr>";
            echo "<tr><th>Correo</th><td>{$_POST['correo']}</td></tr>";
            echo "<tr><th>Teléfono</th><td>{$_POST['telefono']}</td></tr>";
            echo "<tr><th>Dirección</th><td>{$_POST['direccion']}</td></tr>";
            echo "<tr><th>Adicional 1</th><td>{$_POST['adicional1']}</td></tr>";
            echo "<tr><th>Adicional 2</th><td>{$_POST['adicional2']}</td></tr>";
            echo "<tr><th>Adicional 3</th><td>{$_POST['adicional3']}</td></tr>";
            echo "</table>";
            echo "</div>";
        }
    }
    ?>

    <div class="btn-container">
        <button onclick="window.history.go(-1);" class="btn btn-primary mt-3">Regresar</button>
    </div>

</body>
</html>
