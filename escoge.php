<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD WEB</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="text-center">CRUD WEB</h1>
            <h3 class="text-center text-secondary">Escoge una tabla de la base de datos proveedores</h3>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm">
                <form action="procesos.php" method="post">
                    <div class="form-group">
                        <label for="tabla">Tabla:</label>
                        <select name="tabla" id="tabla" class="form-control">
                            <option value="vendedor">Vendedor</option>
                            <option value="pieza">Pieza</option>
                        </select>
                    </div>
                    <input type="submit" value="Ver" name="btn" class="btn btn-outline-success">
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>
