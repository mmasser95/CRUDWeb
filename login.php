<?php
/**
 * Created by PhpStorm.
 * User: Martí
 * Date: 10/11/2018
 * Time: 13:16
 */

session_start();

$dbc = mysqli_connect($_POST['ip'], $_POST['user'], $_POST['pass'], $_POST['bbdd']);

if(!$dbc){
    echo "<script>
            alert('Error al conectar a la base de datos');
            location.href='index.html';
          </script>";
}else{
    $_SESSION['user']=$_POST['user'];
    $_SESSION['pass']=$_POST['pass'];
    $_SESSION['ip']=$_POST['ip'];
    $_SESSION['bbdd']=$_POST['bbdd'];
    header('Location: escoge.php');

}