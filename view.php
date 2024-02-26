<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'Off');
    require_once("dbconnect.php");
    // OWNERS
    $mysql = "SELECT * FROM owners";
    $result = $dbcon -> query($mysql); 
    if (!$result) 
    {
        echo "Ошибка выполнения запроса: $dbcon->error"; 
    } 
    while ($myrow = $result->fetch_array())
    {
        $i++;
        $_SESSION['id_ow'][$i] = $myrow['id_ow'];
        $_SESSION['familyO'][$i] = $myrow['familyO']; 
        $_SESSION['nameO'][$i] = $myrow['nameO'];
        $_SESSION['fatherO'][$i] = $myrow['fatherO'];
        $_SESSION['age'][$i] = $myrow['age'];
        $_SESSION['address'][$i] = $myrow['address'];
        $_SESSION['telephoneO'][$i] = $myrow['telephoneO'];
        $_SESSION['email'][$i] = $myrow['email'];
    }
    $_SESSION['owners'] = $i;
    // OWNERS


    // ANIMALS
    // $mysql = "SELECT * FROM animals";
    // $result = $dbcon -> query($mysql); 
    // if (!$result)
    // {
    //     echo "Ошибка выполнения запроса: $dbcon->error"; 
    // }
    // $i = 0;
    // while ($myrow = $result->fetch_array())
    // {
    //     $i++;
    //     $_SESSION['id_an'][$i] = $myrow['id_an']; 
    //     $_SESSION['nickname'][$i] = $myrow['nickname'];
    //     $_SESSION['view'][$i] = $myrow['view']; 
    //     $_SESSION['breed'][$i] = $myrow['breed'];
    //     $_SESSION['date_of_birth'][$i] = $myrow['date_of_birth'];
    //     $_SESSION['neutered'][$i] = $myrow['neutered'];
    //     $_SESSION['weight_kg'][$i] = $myrow['weight_kg'];
    //     $_SESSION['gender'][$i] = $myrow['gender'];
    //     $_SESSION['color'][$i] = $myrow['color'];
    //     $_SESSION['info'][$i] = $myrow['info'];
    //     $_SESSION['id_ow'][$i] = $myrow['id_ow'];
    //     // echo $myrow['nickname'];
    //     // echo $_SESSION['nickname'][$i];
    //     // echo $_SESSION['nickname'];
    // }
    // $_SESSION['animalsss'] = $i;
    // ANIMALS

    // make
    $mysql = "SELECT * FROM make_an_appointment";
    $result = $dbcon -> query($mysql); 
    if (!$result)
    {
        echo "Ошибка выполнения запроса: $dbcon->error"; 
    }
    $i = 0;
    while ($myrow = $result->fetch_array())
    {
        $i++;
        $_SESSION['id_m'][$i] = $myrow['id_m']; 
        $_SESSION['dateM'][$i] = $myrow['dateM']; 
        $_SESSION['timeM'][$i] = $myrow['timeM']; 
        $_SESSION['id_ow'][$i] = $myrow['id_ow']; 
        $_SESSION['id_an'][$i] = $myrow['id_an']; 
        $_SESSION['id_ser'][$i] = $myrow['id_ser']; 
    }
    $_SESSION['make'] = $i;
    // make

    // VETS
    $mysql = "SELECT * FROM vets";
    $result = $dbcon -> query($mysql); 
    if (!$result)
    {
        echo "Ошибка выполнения запроса: $dbcon->error"; 
    }
    $i = 0;
    while ($myrow = $result->fetch_array())
    {
        $i++;
        $_SESSION['id_vet'][$i] = $myrow['id_vet']; 
        $_SESSION['familyV'][$i] = $myrow['familyV']; 
        $_SESSION['nameV'][$i] = $myrow['nameV']; 
        $_SESSION['fatherV'][$i] = $myrow['fatherV']; 
        $_SESSION['age'][$i] = $myrow['age']; 
        $_SESSION['experience'][$i] = $myrow['experience']; 
        $_SESSION['telephone'][$i] = $myrow['telephone']; 
    }
    $_SESSION['vets'] = $i;
    // VETS

    // services
    $mysql = "SELECT * FROM services";
    $result = $dbcon -> query($mysql); 
    if (!$result)
    {
        echo "Ошибка выполнения запроса: $dbcon->error"; 
    }
    $i = 0;
    while ($myrow = $result->fetch_array())
    {
        $i++;
        $_SESSION['id_ser'][$i] = $myrow['id_ser']; 
        $_SESSION['nameS'][$i] = $myrow['nameS']; 
        $_SESSION['diagnostics'][$i] = $myrow['diagnostics']; 
        $_SESSION['treatmentS'][$i] = $myrow['treatment']; 
        $_SESSION['priceS'][$i] = $myrow['priceS']; 
        $_SESSION['id_m'][$i] = $myrow['id_m']; 
        $_SESSION['id_vet'][$i] = $myrow['id_vet']; 
    }
    $_SESSION['services'] = $i;
    // services

    // MEDICINES
    $mysql = "SELECT * FROM medicines";
    $result = $dbcon -> query($mysql); 
    if (!$result)
    {
        echo "Ошибка выполнения запроса: $dbcon->error"; 
    }
    $i = 0;
    while ($myrow = $result->fetch_array())
    {
        $i++;
        $_SESSION['id_m'][$i] = $myrow['id_m']; 
        $_SESSION['nameM'][$i] = $myrow['nameM']; 
        $_SESSION['instructions'][$i] = $myrow['instructions']; 
        $_SESSION['price'][$i] = $myrow['price']; 
        $_SESSION['amount_med'][$i] = $myrow['amount_med']; 
    }
    $_SESSION['medicines'] = $i;
    // MEDICINES

    // position
    $mysql = "SELECT * FROM position";
    $result = $dbcon -> query($mysql); 
    if (!$result)
    {
        echo "Ошибка выполнения запроса: $dbcon->error"; 
    }
    $i = 0;
    while ($myrow = $result->fetch_array())
    {
        $i++;
        $_SESSION['id_dol'][$i] = $myrow['id_dol']; 
        $_SESSION['nameP'][$i] = $myrow['nameP']; 
        $_SESSION['bet'][$i] = $myrow['bet']; 
        $_SESSION['id_vet'][$i] = $myrow['id_vet']; 
    }
    $_SESSION['position'] = $i;
    // position
    header("Location: index.php");
?>  