<?php
/**
 * Created by PhpStorm.
 * User: Martí
 * Date: 10/11/2018
 * Time: 13:32
 */
session_start();
function conectar(){
    return mysqli_connect($_SESSION['ip'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['bbdd']);
}