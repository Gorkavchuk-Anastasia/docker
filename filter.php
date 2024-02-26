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
        <div class="filter">
            <h4>Фильтр</h4>
            <form action="#" method="POST">
                <select name="view_filter" class="filter-view">
                    <option class="filter-view" value="" selected>Вид животного</option>
                    <?php
                        require_once("dbconnect.php");
                        $mysql="SELECT view FROM animals";
                        $result = $dbcon -> query($mysql); 
                        while($myrows = $result->fetch_array())
                        {
                            $myrows['view'];
                    ?>
                        <option class="filter-view" value="<?=$myrows['view']?>"><?=$myrows['view']?></option>
                    <?php
                        }
                    ?>
                </select>
                <select name="nickname_filter" class="filter-view">
                    <option class="filter-view" value="" selected>Кличка</option>
                    <?php
                        require_once("dbconnect.php");
                        $mysql="SELECT nickname FROM animals";
                        $result = $dbcon -> query($mysql); 
                        while($myrows = $result->fetch_array())
                        {
                            $myrows['nickname'];
                            $_SESSION['nickname'] = $myrows['nickname']; 
                    ?>
                        <option class="filter-view" value="<?=$myrows['nickname']?>"><?=$myrows['nickname']?></option>
                    <?php
                        }
                    ?>
                </select>
                <select name="date_filter" class="filter-view">
                    <option class="filter-view" value="" selected>Дата рождения</option>
                    <?php
                        require_once("dbconnect.php");
                        $mysql="SELECT date_of_birth FROM animals";
                        $result = $dbcon -> query($mysql); 
                        while($myrows = $result->fetch_array())
                        {
                            $myrows['date_of_birth'];
                            $_SESSION['date_of_birth'] = $myrows['date_of_birth']; 
                    ?>
                        <option class="filter-view" value="<?=$myrows['date_of_birth']?>"><?=$myrows['date_of_birth']?></option>
                    <?php
                        }
                    ?>
                </select>
                <input type="submit" name="click" class="filter-sub" value="Поиск">
            </form>
        </div>
        <?php
            require_once("dbconnect.php");
            if(isset($_POST['view_filter']))
            {
                $view_filter = $_POST['view_filter'];
                $mysql="SELECT * FROM animals WHERE view = '".$view_filter."';";
                $result = $dbcon -> query($mysql);
                if (!$result) 
                {
                    $_SESSION['filter_search'] = "Ошибка выполнения запроса: $dbcon->error"; 
                }
                else
                {
        ?>
                    <table>
                        <tr>
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
                        </tr>
        <?php
                        $kolvo = 0;
                    while ($myrows = $result->fetch_array())
                    {
        ?>
                        <tr>
                            <td><? echo $myrows['id_an']?></td>
                            <td><? echo $myrows['nickname']?></td> 
                            <td><? echo $myrows['view']?></td> 
                            <td><? echo $myrows['breed']?></td> 
                            <td><? echo $myrows['date_of_birth']?></td> 
                            <td><? echo $myrows['neutered']?></td> 
                            <td><? echo $myrows['weight_kg']?></td> 
                            <td><? echo $myrows['gender']?></td> 
                            <td><? echo $myrows['color']?></td> 
                            <td><? echo $myrows['info']?></td>
                            <td><? echo $myrows['id_ow']?></td>
                        </tr>
        <?php 
                    }
        ?>
                    </table>
        <?php
                }
            }
        if(isset($_POST['nickname_filter']))
            {
                $nickname_filter = $_POST['nickname_filter'];
                $mysql="SELECT * FROM animals WHERE nickname = '".$nickname_filter."';";
                $result = $dbcon -> query($mysql);
                if (!$result) 
                {
                    $_SESSION['filter_search'] = "Ошибка выполнения запроса: $dbcon->error"; 
                }
                else
                {
        ?>
                    <table>
                        <tr>
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
                        </tr>
        <?php
                        $kolvo = 0;
                    while ($myrows = $result->fetch_array())
                    {
        ?>
                        <tr>
                            <td><? echo $myrows['id_an']?></td>
                            <td><? echo $myrows['nickname']?></td> 
                            <td><? echo $myrows['view']?></td> 
                            <td><? echo $myrows['breed']?></td> 
                            <td><? echo $myrows['date_of_birth']?></td> 
                            <td><? echo $myrows['neutered']?></td> 
                            <td><? echo $myrows['weight_kg']?></td> 
                            <td><? echo $myrows['gender']?></td> 
                            <td><? echo $myrows['color']?></td> 
                            <td><? echo $myrows['info']?></td>
                            <td><? echo $myrows['id_ow']?></td>
                        </tr>
        <?php 
                    }
        ?>
                    </table>
        <?php
                }
            }
        if(isset($_POST['date_filter']))
            {
                $date_filter = $_POST['date_filter'];
                $mysql="SELECT * FROM animals WHERE date_of_birth = '".$date_filter."';";
                $result = $dbcon -> query($mysql);
                if (!$result) 
                {
                    $_SESSION['filter_search'] = "Ошибка выполнения запроса: $dbcon->error"; 
                }
                else
                {
        ?>
                    <table>
                        <tr>
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
                        </tr>
        <?php
                        $kolvo = 0;
                    while ($myrows = $result->fetch_array())
                    {
        ?>
                        <tr>
                            <td><? echo $myrows['id_an']?></td>
                            <td><? echo $myrows['nickname']?></td> 
                            <td><? echo $myrows['view']?></td> 
                            <td><? echo $myrows['breed']?></td> 
                            <td><? echo $myrows['date_of_birth']?></td> 
                            <td><? echo $myrows['neutered']?></td> 
                            <td><? echo $myrows['weight_kg']?></td> 
                            <td><? echo $myrows['gender']?></td> 
                            <td><? echo $myrows['color']?></td> 
                            <td><? echo $myrows['info']?></td>
                            <td><? echo $myrows['id_ow']?></td>
                        </tr>
        <?php 
                    }
        ?>
                    </table>
        <?php
                }
            }
        ?>
    </body>
</html>