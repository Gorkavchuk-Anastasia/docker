<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'Off');
    require_once("dbconnect.php");
    //ЗАПРОС 1
    if(isset($_GET['zapros1'])) 
    {
        $mysql = "SELECT nickname,view,breed
        FROM animals
        WHERE nickname LIKE '%н';";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['nickname'][$i] = $myrow['nickname'];
            $_SESSION['view'][$i] = $myrow['view'];
            $_SESSION['breed'][$i] = $myrow['breed']; 
        }
        $_SESSION['zapros1'] = $i;
        $zap_i = 1;
    }

    //ЗАПРОС 2
    if(isset($_GET['zapros2']))
    {
        $mysql = "SELECT nickname, date_of_birth, view, breed 
        FROM animals
        WHERE date_of_birth BETWEEN '2016' AND '2020';
        ";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['nickname'][$i] = $myrow['nickname'];
            $_SESSION['date_of_birth'][$i] = $myrow['date_of_birth']; 
            $_SESSION['view'][$i] = $myrow['view'];
            $_SESSION['breed'][$i] = $myrow['breed'];
        }
        $_SESSION['zapros2'] = $i; 
        $zap_i = 2;
    }
    
    // ЗАПРОС 3
    if(isset($_GET['zapros3']))
    {
        $mysql = "SELECT familyO, nameO
        FROM owners
        ORDER BY familyO DESC,nameO;";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['familyO'][$i] = $myrow['familyO'];
            $_SESSION['nameO'][$i] = $myrow['nameO'];
        }
        $_SESSION['zapros3'] = $i;  
        $zap_i = 3; 
    }

    // ЗАПРОС 4
    if(isset($_GET['zapros4']))
    {
        $mysql = "SELECT owners.familyO, animals.view, animals.breed
        FROM owners INNER JOIN animals ON owners.id_ow = animals.id_ow
        WHERE (((animals.view)='Кошка' Or (animals.view)='Собака'));";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['familyO'][$i] = $myrow['familyO'];
            $_SESSION['view'][$i] = $myrow['view']; 
            $_SESSION['breed'][$i] = $myrow['breed'];
        }
        $_SESSION['zapros4'] = $i;
        $zap_i = 4;   
    }
    // ЗАПРОС 5
    if(isset($_GET['zapros5']))
    {
        $mysql = "SELECT nickname, view, IF(gender = 'М', 'Мужчина', 'Женщина') as gender FROM animals;";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['nickname'][$i] = $myrow['nickname'];
            $_SESSION['view'][$i] = $myrow['view'];
            $_SESSION['gender'][$i] = $myrow['gender'];  
        }
        $_SESSION['zapros5'] = $i; 
        $zap_i = 5;  
    }
    // ЗАПРОС 6
    if(isset($_GET['zapros6']))
    {
        $mysql = "SELECT view,breed,color
        FROM animals
        WHERE color='Белый';";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['view'][$i] = $myrow['view'];
            $_SESSION['breed'][$i] = $myrow['breed'];
            $_SESSION['color'][$i] = $myrow['color']; 
        }
        $_SESSION['zapros6'] = $i; 
        $zap_i = 6;   
    }
    // ЗАПРОС 7
    if(isset($_GET['zapros7']))
    {
        $mysql = "SELECT CONCAT(familyO,'(',SUBSTR(nameO, 1, 1),')') as familyO_nameO
        FROM owners;";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['familyO_nameO'][$i] = $myrow['familyO_nameO'];
        }
        $_SESSION['zapros7'] = $i; 
        $zap_i = 7;   
    }
    // ЗАПРОС 8
    if(isset($_GET['zapros8']))
    {
        $mysql = "SELECT familyO,nameO, fatherO, email FROM `owners` WHERE email LIKE '%@mail.ru';";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['familyO'][$i] = $myrow['familyO'];
            $_SESSION['nameO'][$i] = $myrow['nameO'];
            $_SESSION['fatherO'][$i] = $myrow['fatherO']; 
            $_SESSION['email'][$i] = $myrow['email'];
        }
        $_SESSION['zapros8'] = $i; 
        $zap_i = 8;   
    }
    // ЗАПРОС 9
    if(isset($_GET['zapros9']))
    {
        $mysql = "SELECT familyO, nameO, address FROM `owners` WHERE address LIKE 'п%';";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['familyO'][$i] = $myrow['familyO'];
            $_SESSION['nameO'][$i] = $myrow['nameO'];
            $_SESSION['address'][$i] = $myrow['address']; 
        }
        $_SESSION['zapros9'] = $i; 
        $zap_i = 9;   
    }
    // ЗАПРОС 10
    if(isset($_GET['zapros10']))
    {
        $mysql = "SELECT nameM,price FROM `medicines` WHERE price>550;";
        $result = $dbcon -> query($mysql);
        if (!$result) 
        {
            echo "Ошибка выполнения запроса: $dbcon->error"; 
        }
        else
        {
            $_SESSION['zap'] = "Запрос успешный";
        }
        $i = 0;
        while ($myrow = $result->fetch_array())
        {
            $i++;
            $_SESSION['nameM'][$i] = $myrow['nameM'];
            $_SESSION['price'][$i] = $myrow['price'];
        }
        $_SESSION['zapros10'] = $i; 
        $zap_i = 10;   
    }
    $_SESSION['zap_i']=$zap_i;
    header("Location: index.php");
?>