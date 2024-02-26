<?php
    session_start();
    require_once("dbconnect.php");
    $id_ser = $_POST['id_ser'];
    $nameS = $_POST['nameS'];
    $diagnostics = $_POST['diagnostics'];
    $treatmentS = $_POST['treatmentS'];
    $priceS = $_POST['priceS'];
    $id_m = $_POST['id_m']; 
    $id_vet = $_POST['id_vet'];  
    if (!empty($id_ser) and !empty($nameS) and !empty($diagnostics) and !empty($treatmentS) and !empty($priceS) and !empty($id_m) and !empty($id_vet))
    {
        $mysql = "INSERT INTO services(id_ser,nameS,diagnostics,treatmentS,priceS,id_m,id_vet) VALUES('".$id_ser."','".$nameS."','".$diagnostics."','".$treatmentS."','".$priceS."','".$id_m."','".$id_vet."');";
        $result = $dbcon -> query($mysql); 
        if (!$result)
        {
            $_SESSION['ses5']="Ошибка выполнения запроса: $dbcon->error";
        }
        else
        {
            $_SESSION['ses5'] = 'данные введены';
        }
    }
    else 
    {
        $_SESSION['ses5']="Ошибка: Вы ничего не ввели";
    }
    header("Location: index.php");
?>