<?php
$dbc=mysqli_connect("localhost", "root", "root", "proveedores");
$campo1=$_GET['campo1'];
$tabla=$_GET['tabla'];
switch ($tabla){
    case 'vendedor':
        $ncampo="numvend";
        break;
    case 'pieza':
        $ncampo="numpieza";
        break;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Borrar</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="text-center">Borrar</h1>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm">
                    <?php
                        $sql="DELETE FROM $tabla WHERE $ncampo=$campo1";
                        $res = mysqli_query($dbc, $sql) or die("<div class='alert alert-danger text-center' role='alert'>Se ha borrado el registro $campoi1 incorrectamente $sql</div>");
                        echo "<div class='alert alert-success text-center' role='alert'>Se ha borrado el registro $campo1 correctamente</div>";
                        echo "<a href='procesos.php?tabla=$tabla&btn=Ver' class='btn btn-outline-primary'>Back</a>";
                    ?>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>
</html>
