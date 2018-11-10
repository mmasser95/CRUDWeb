<?php
include "conexion.php";
$dbc=conectar();
$tabla=$_GET['tabla'];
$campo1=$_GET['campo1'];
switch ($tabla){
    case 'vendedor':
        $ncampo1='numvend';
        $ncampo2='nomvend';
        $ncampo3='nombrecomer';
        break;
    case 'pieza':
        $ncampo1='numpieza';
        $ncampo2='nompieza';
        $ncampo3='preciovent';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center">Ver registro de <?php echo $tabla?></h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm">
                <?php
                    echo $sql;
                    $html = "<table class='table table-striped'><tr><th>$ncampo1</th><th>$ncampo2</th><th>$ncampo3</th></tr>";
                    $res = mysqli_query($dbc,$sql);
                    $row = mysqli_fetch_row($res);
                    $html .= "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $html .= "</table>";
                    $html.="<a href='procesos.php?btn=Ver&tabla=$tabla' class='btn-outline-danger btn'>Back</a>";
                    echo $html;
                ?>

            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>