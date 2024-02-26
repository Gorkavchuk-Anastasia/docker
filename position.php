<?php
    session_start();
    require_once("dbconnect.php");
    $id_dol = $_POST['id_dol'];
    $nameP = $_POST['nameP'];
    $bet = $_POST['bet'];
    $id_vet = $_POST['id_vet']; 
    if (!empty($id_dol) and !empty($nameP) and !empty($bet) and !empty($id_vet))
    {
        $mysql = "INSERT INTO `position`(id_dol,nameP,bet,id_vet) VALUES('".$id_dol."','".$nameP."','".$bet."','".$id_vet."');";
        $result = $dbcon -> query($mysql); 
        if (!$result)
        {
            $_SESSION['ses7']="Ошибка выполнения запроса: $dbcon->error";
        }
        else
        {
            $_SESSION['ses7'] = 'данные введены';
        }
    }
    else 
    {
        $_SESSION['ses7']="Ошибка: Вы ничего не ввели";
    }
    header("Location: index.php");
?>