<?php
if (isset($_REQUEST['btn'])) {
  $dbc=mysqli_connect("localhost", "root", "root", "proveedores");
  $sql = "INSERT INTO pieza (`numpieza`, `nompieza`) VALUES ($campo1, '$campo2')";
  $res = mysqli_query($dbc, $sql) or die("<div class='alert alert-danger text-center' role='alert'>Error query</div>");
  echo "<div class='alert alert-success text-center' role='alert'>Se ha añadido el registro $campoi1, $campo2 correctamente</div>";
  echo "<a href='procesos.php?tabla=pieza&btn=Ver' class='btn btn-outline-primary'>Back</a>";
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Insertar en la tabla pieza</h1>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm">
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="validar(this)">
                    <div class="form-group">
                        <label for="campo1">Numpieza</label>
                        <input type="text" name="campo1" id="campo1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="campo2"Nompieza</label>
                        <input type="text" name="campo2" id="campo2" class="form-control">
                    </div>
                    <input name="btn" type="submit" value="Insertar" class="btn btn-outline-success">
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <script src="js/validar.js"></script>
</body>
</html>
