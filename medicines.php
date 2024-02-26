<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'Off');
    require_once("dbconnect.php");
    $id_m = $_POST['id_m'];
    $nameM = $_POST['nameM'];
    $instructions = $_POST['instructions'];
    $price = $_POST['price'];
    $amount_med = $_POST['amount_med'];
    $id_vet = $_POST['id_vet'];  
    if (!empty($id_m) and !empty($nameM) and !empty($instructions) and !empty($price) and !empty($amount_med))
    {
        $mysql = "INSERT INTO medicines(id_m,nameM,instructions,price,amount_med) VALUES('".$id_m."','".$nameM."','".$instructions."','".$price."','".$amount_med."');";
        $result = $dbcon -> query($mysql); 
        if (!$result)
        {
            $_SESSION['ses6']="Ошибка выполнения запроса: $dbcon->error";
        }
        else
        {
            $_SESSION['ses6'] = 'Данные введены';
        }
    }
    else 
    {
        $_SESSION['ses6']="Ошибка: Вы ничего не ввели";
    }
    header("Location: index.php");
?>