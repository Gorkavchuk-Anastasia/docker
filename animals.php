<?php
    session_start();
    require_once("dbconnect.php");
    $id_an = $_POST['id_an'];
    $nickname = $_POST['nickname'];
    $view = $_POST['view'];
    $breed = $_POST['breed'];
    $date_of_birth = $_POST['date_of_birth'];
    $neutered = $_POST['neutered'];
    $weight_kg = $_POST['weight_kg'];
    $gender = $_POST['gender'];
    $color = $_POST['color'];
    $info = $_POST['info'];
    $id_ow = $_POST['id_ow'];
    if (!empty($id_an) and !empty($nickname) and !empty($view) and !empty($breed) and !empty($date_of_birth) and !empty($neutered) and !empty($weight_kg) and !empty($gender) and !empty($color) and !empty($info) and !empty($id_ow))
    {
        $mysql = "INSERT INTO animals(id_an,nickname,view,breed,date_of_birth,neutered,weight_kg,gender,color,info,id_ow) VALUES('".$id_an."','".$nickname."','".$view."','".$breed."','".$date_of_birth."','".$neutered."','".$weight_kg."','".$gender."','".$color."','".$info."','".$id_ow."');";
        $result = $dbcon -> query($mysql); 
        if (!$result)
        {
            $_SESSION['ses2'] = "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['ses2'] = 'Данные введены';
        }
    }
    else 
    {
        $_SESSION['ses2']="Ошибка: Вы ничего не ввели";
    }
    header("Location: index.php");
?>

