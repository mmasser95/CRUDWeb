<?php
$tabla=$_REQUEST['tabla'];
$btn=$_REQUEST['btn'];
if($btn=="Insertar"){
    $campoi1=$_POST['campo1'];
    $campoi2=$_POST['campo2'];
}
if($btn=='Actualizar'){
    $campoa1=$_POST['campo1'];
    $campoa2=$_POST['campo2'];
}

$dbc=mysqli_connect("localhost", "root", "root", "proveedores");
switch ($tabla){
    case 'vendedor':
        $campo1='numvend';
        $campo2='nomvend';
        break;
    case 'pieza':
        $campo1='numpieza';
        $campo2='nompieza';
        break;
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Ver <?php echo $tabla;?> </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="text-center">Resultados de la tabla <?php echo $tabla;?></h1>
                <?php
                    echo "<a href='insertar.php?tabla=$tabla&campo1=$campo1&campo2=$campo2' class='btn btn-success'>Insertar</a>";
                ?>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm">
                    <?php
                    switch ($btn) {
                        case 'Ver':
                            $sql = "SELECT * FROM $tabla";
                            $res = mysqli_query($dbc, $sql) or die("<div class='alert alert-danger text-center' role='alert'>Error</div>");
                            $html = "<table class='table table-striped'><tr><th>$campo1</th><th>$campo2</th><th>Acciones</th></tr>";
                            while ($row = mysqli_fetch_array($res)) {
                                $html .= "<tr><td>$row[$campo1]</td>";
                                $html .= "<td>$row[$campo2]</td>";
                                $html .= "<td><a href='ver.php?campo1=$row[$campo1]&tabla=$tabla' class='fas fa-eye text-success'> </a> ";
                                $html .= "<a href='actualizar.php?$campo1=$row[$campo1]&$campo2=$row[$campo2]&tabla=$tabla' class='fas fa-marker text-warning'> </a> ";
                                $html .= "<a href='borrar.php?campo1=$row[$campo1]&tabla=$tabla' class='fas fa-trash text-danger'> </a> ";
                                $html .= "</td></tr>";
                            }
                            $html .= "</table>";
                            echo $html;
                            echo "<a href='escoge.php' class='btn btn-outline-warning'>Escoge</a>";
                            break;
                        case 'Insertar':

                            break;
                        case 'Actualizar':
                            
                    }
                    ?>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>

</html>
