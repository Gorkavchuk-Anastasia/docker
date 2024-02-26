<?php
    session_start();
    require_once("dbconnect.php");
    $id_m = $_POST['id_m'];
    $dateM = $_POST['dateM'];
    $timeM = $_POST['timeM'];
    $id_ow = $_POST['id_ow'];
    $id_an = $_POST['id_an'];
    $id_ser = $_POST['id_ser'];
    if (!empty($id_m) and !empty($dateM) and !empty($timeM) and !empty($id_ow) and !empty($id_an) and !empty($id_ser))
    {
        $mysql = "INSERT INTO make_an_appointment(id_m,dateM,timeM,id_ow,id_an,id_ser) VALUES('".$id_m."','".$dateM."','".$timeM."','".$id_ow."','".$id_an."','".$id_ser."');";
        $result = $dbcon -> query($mysql); 
        if (!$result)
        {
            $_SESSION['ses3']="Ошибка выполнения запроса: $dbcon->error";
        }
        else
        {
            $_SESSION['ses3'] = 'данные введены';
        }
    }
    else 
    {
        $_SESSION['ses3']="Ошибка: Вы ничего не ввели";
    }
    header("Location: index.php");
?>