<?php
    session_start();
    require_once("dbconnect.php");
    $id_vet = $_POST['id_vet'];
    $familyV = $_POST['familyV'];
    $nameV = $_POST['nameV'];
    $fatherV = $_POST['fatherV'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $telephone = $_POST['telephone'];
    if (!empty($id_vet) and !empty($familyV) and !empty($nameV) and !empty($fatherV) and !empty($age) and !empty($experience) and !empty($telephone))
    {
        $mysql = "INSERT INTO vets(id_vet,familyV,nameV,fatherV,age,experience,telephone) VALUES('".$id_vet."','".$familyV."','".$nameV."','".$fatherV."','".$age."','".$experience."','".$telephone."');";
        $result = $dbcon -> query($mysql); 
        if (!$result)
        {
            $_SESSION['ses4']="Ошибка выполнения запроса: $dbcon->error";
        }
        else
        {
            $_SESSION['ses4'] = 'Данные введены';
        }
    }
    else 
    {
        $_SESSION['ses4']="Ошибка: Вы ничего не ввели";
    }
    header("Location: index.php");
?>