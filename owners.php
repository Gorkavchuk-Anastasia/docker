<?php
    session_start();
    require_once("dbconnect.php");
    $id_ow = $_POST['id_ow'];
    $familyO = $_POST['familyO'];
    $nameO = $_POST['nameO'];
    $fatherO = $_POST['fatherO'];
    $age = $_POST['age'];
    $address = $_POST['address']; 
    $telephoneO = $_POST['telephoneO']; 
    $email = $_POST['email']; 
    if (!empty($id_ow) and !empty($familyO) and !empty($nameO) and !empty($fatherO) and !empty($age) and !empty($address) and !empty($telephoneO) and !empty($email))
    {
        $mysql = "INSERT INTO owners(id_ow,familyO,nameO,fatherO,age,address,telephoneO,email) VALUES('".$id_ow."','".$familyO."','".$nameO."','".$fatherO."','".$age."','".$address."','".$telephoneO."','".$email."');";
        $result = $dbcon -> query($mysql);
        if (!$result) {
            $_SESSION['ses'] = "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['ses'] = 'Данные введены';
        }
    }
    else 
    {
        $_SESSION['ses']="Ошибка: Вы ничего не ввели";
    }
    header("Location: index.php");
?>