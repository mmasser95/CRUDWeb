<?php
$tabla=$_GET['tabla'];
switch ($tabla){
    case 'vendedor':
        $campo1=$_GET['numvend'];
        $ncampo1="numvend";
        $campo2=$_GET['nomvend'];
        $ncampo2="nomvend";
        break;
    case 'pieza':
        $campo1=$_GET['numpieza'];
        $ncampo1="numpieza";
        $campo2=$_GET['nompieza'];
        $ncampo2="nompieza";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar <?php echo $tabla;?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="text-center">Actualizar <?php echo $tabla;?></h1>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm">
                    <form action="procesos.php" method="post">
                        <div class="form-group">
                            <label for="campo2"><?php echo $ncampo2;?></label>
                            <input type="text" id="campo2" name="campo2" value="<?php echo $campo2;?>" class="form-control">
                        </div>
                        <input type="hidden" value="<?php echo $campo1;?>" name="campo1">
                        <input name="tabla" type="hidden" value="<?php echo $tabla?>">
                        <input name="btn" type="submit" value="Actualizar" class="btn btn-outline-success">
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>

</html>