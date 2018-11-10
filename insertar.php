<?php
$tabla=$_GET['tabla'];
$campo1=$_GET['campo1'];
$campo2=$_GET['campo2'];
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
            <h1>Insertar en la tabla <?php echo $tabla;?></h1>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm">
                <form action="procesos.php" method="post">
                    <div class="form-group">
                        <label for="campo1"><?php echo $campo1; ?></label>
                        <input type="text" name="campo1" id="campo1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="campo2"><?php echo $campo2;?></label>
                        <input type="text" name="campo2" id="campo2" class="form-control">
                    </div>
                    <input name="tabla" type="hidden" value="<?php echo $tabla;?>">
                    <input name="btn" type="submit" value="Insertar" class="btn btn-outline-success">
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>