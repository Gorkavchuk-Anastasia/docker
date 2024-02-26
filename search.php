<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Горкавчук</title>
        <link rel="stylesheet" href="style/css.css">
    </head>
    <body>
        <div class="form-search">
            <h4>Поиск</h4>
            <form action="#" method="GET">
                <input class="input-f" type="text" name="search_nickname" placeholder="Поиск по кличке">
                <input class="input-f" type="text" name="search_view" placeholder="Поиск по виду">
                <input class="input-f" type="text" name="search_date" placeholder="Поиск по дате рождения">
                <input class="submit-search" type="submit" name="submit_search"  value="Поиск">
            </form>
        </div>
        <?php
            require_once("dbconnect.php");
            $name=$_GET['search_nickname'];
            $name_v=$_GET['search_view'];
            $name_d=$_GET['search_date'];
            if(!empty($name))
            {
                $mysql="SELECT * FROM animals WHERE nickname LIKE '%$name%' ";
                $result = $dbcon -> query($mysql); 
                if (!$result) 
                {
                    $_SESSION['search_ses'] = "Ошибка выполнения запроса: $dbcon->error"; 
                }
                else
                {
        ?>
                    <div class="search-table">
                        <p>По кличке:</p>
                        <table>
                            <td><h3>ID животного</h3></td>
                            <td><h3>Кличка</h3></td>
                            <td><h3>Вид</h3></td>
                            <td><h3>Порода</h3></td>
                            <td><h3>Дата рождения</h3></td>
                            <td><h3>Кастрация</h3></td>
                            <td><h3>Вес(кг)</h3></td>
                            <td><h3>Пол</h3></td>
                            <td><h3>Окрас</h3></td>
                            <td><h3>Информация</h3></td>
                            <td><h3>ID владельца</h3></td>
        <?php
                            $kolvo = 0;
                            while ($myrow = $result->fetch_array())
                            {
        ?>
                                <tr>
                                    <td><? echo $myrow['id_an']?></td> 
                                    <td><? echo $myrow['nickname']?></td> 
                                    <td><? echo $myrow['view']?></td>
                                    <td><? echo $myrow['breed']?></td> 
                                    <td><? echo $myrow['date_of_birth']?></td> 
                                    <td><? echo $myrow['neutered']?></td> 
                                    <td><? echo $myrow['weight_kg']?></td> 
                                    <td><? echo $myrow['gender']?></td> 
                                    <td><? echo $myrow['color']?></td> 
                                    <td><? echo $myrow['info']?></td>
                                    <td><? echo $myrow['id_ow']?></td> 
                                </tr>
        <?php
                            }
        ?>
                        </table>
                    </div>
        <?php
                }
            }
        if(!empty($name_v))
            {
                $mysql="SELECT * FROM animals WHERE view LIKE '%$name_v%' ";
                $result = $dbcon -> query($mysql); 
                if (!$result) 
                {
                    $_SESSION['search_ses'] = "Ошибка выполнения запроса: $dbcon->error"; 
                }
                else
                {
        ?>
                    <div class="search-table">
                        <p>По виду:</p>
                        <table>
                            <td><h3>ID животного</h3></td>
                            <td><h3>Кличка</h3></td>
                            <td><h3>Вид</h3></td>
                            <td><h3>Порода</h3></td>
                            <td><h3>Дата рождения</h3></td>
                            <td><h3>Кастрация</h3></td>
                            <td><h3>Вес(кг)</h3></td>
                            <td><h3>Пол</h3></td>
                            <td><h3>Окрас</h3></td>
                            <td><h3>Информация</h3></td>
                            <td><h3>ID владельца</h3></td>
        <?php
                            $kolvo = 0;
                            while ($myrow = $result->fetch_array())
                            {
        ?>
                                <tr>
                                    <td><? echo $myrow['id_an']?></td> 
                                    <td><? echo $myrow['nickname']?></td> 
                                    <td><? echo $myrow['view']?></td>
                                    <td><? echo $myrow['breed']?></td> 
                                    <td><? echo $myrow['date_of_birth']?></td> 
                                    <td><? echo $myrow['neutered']?></td> 
                                    <td><? echo $myrow['weight_kg']?></td> 
                                    <td><? echo $myrow['gender']?></td> 
                                    <td><? echo $myrow['color']?></td> 
                                    <td><? echo $myrow['info']?></td>
                                    <td><? echo $myrow['id_ow']?></td> 
                                </tr>
        <?php
                            }
        ?>
                        </table>
                    </div>
        <?php
                }
            }
        if(!empty($name_d))
            {
                $mysql="SELECT * FROM animals WHERE date_of_birth LIKE '%$name_d%' ";
                $result = $dbcon -> query($mysql); 
                if (!$result) 
                {
                    $_SESSION['search_ses'] = "Ошибка выполнения запроса: $dbcon->error"; 
                }
                else
                {
        ?>
                    <div class="search-table">
                        <p>По дате рождения:</p>
                        <table>
                            <td><h3>ID животного</h3></td>
                            <td><h3>Кличка</h3></td>
                            <td><h3>Вид</h3></td>
                            <td><h3>Порода</h3></td>
                            <td><h3>Дата рождения</h3></td>
                            <td><h3>Кастрация</h3></td>
                            <td><h3>Вес(кг)</h3></td>
                            <td><h3>Пол</h3></td>
                            <td><h3>Окрас</h3></td>
                            <td><h3>Информация</h3></td>
                            <td><h3>ID владельца</h3></td>
        <?php
                            $kolvo = 0;
                            while ($myrow = $result->fetch_array())
                            {
        ?>
                                <tr>
                                    <td><? echo $myrow['id_an']?></td> 
                                    <td><? echo $myrow['nickname']?></td> 
                                    <td><? echo $myrow['view']?></td>
                                    <td><? echo $myrow['breed']?></td> 
                                    <td><? echo $myrow['date_of_birth']?></td> 
                                    <td><? echo $myrow['neutered']?></td> 
                                    <td><? echo $myrow['weight_kg']?></td> 
                                    <td><? echo $myrow['gender']?></td> 
                                    <td><? echo $myrow['color']?></td> 
                                    <td><? echo $myrow['info']?></td>
                                    <td><? echo $myrow['id_ow']?></td> 
                                </tr>
        <?php
                            }
        ?>
                        </table>
                    </div>
        <?php
                }
            }
        ?>
    </body>
</html>