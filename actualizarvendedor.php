<?php
$campo1=$_REQUEST['numvend'];
$campo2=$_REQUEST['nomvend'];
if (isset($_REQUEST['btn'])){
  $dbc=mysqli_connect("localhost", "root", "root", "proveedores");
  $sql = "UPDATE vendedor SET nomvend='$campo2' WHERE numvend=$campo1;";
  $res = mysqli_query($dbc, $sql) or die("<div class='alert alert-danger text-center' role='alert'>Se ha actualizado el registro $campoa1, $campoa2 incorrectamente $sql</div>");
  echo "<div class='alert alert-success text-center' role='alert'>Se ha actualizado el registro $campoa1, $campoa2 correctamente</div>";
  echo "<a href='procesos.php?tabla=vendedor&btn=Ver' class='btn btn-outline-primary'>Back</a>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar Vendedor</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="text-center">Actualizar vendedor</h1>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <label for="campo2">Nomvend</label>
                            <input type="text" id="campo2" name="campo2" value="<?php echo $campo2;?>" class="form-control">
                        </div>
                        <input type="hidden" value="<?php echo $campo1;?>" name="campo1">
                        <input name="btn" type="submit" value="Actualizar" class="btn btn-outline-success">
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>

</html>
