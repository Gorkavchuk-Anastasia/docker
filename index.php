<?php session_start();
  error_reporting(E_ALL & ~E_NOTICE);
  ini_set('display_errors', 'Off');?>
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
        <div class="container">
            <div class="form">
                <form action="view.php" method="GET">
                    <input class="submit-app" type="submit" name="view_button" value="Посмотреть">
                </form>  
            </div>
                <!-- ЗАПРОСЫ -->
                
            <div class="form-zapros">
                <h4>Запросы</h4>
                <form action="zaprosi.php" method="GET">
                    <input class="submit-zap" type="submit" name="zapros1" value="Запрос-1">
                    <input class="submit-zap" type="submit" name="zapros2" value="Запрос-2">
                    <input class="submit-zap" type="submit" name="zapros3" value="Запрос-3">
                    <input class="submit-zap" type="submit" name="zapros4" value="Запрос-4">
                    <input class="submit-zap" type="submit" name="zapros5" value="Запрос-5">
                    <input class="submit-zap" type="submit" name="zapros6" value="Запрос-6">
                    <input class="submit-zap" type="submit" name="zapros7" value="Запрос-7">
                    <input class="submit-zap" type="submit" name="zapros8" value="Запрос-8">
                    <input class="submit-zap" type="submit" name="zapros9" value="Запрос-9">
                    <input class="submit-zap" type="submit" name="zapros10" value="Запрос-10">
                    <input class="submit-reset" type="submit" name="reset" value="Очистить"> 
                </form>
            </div>
                <!-- Запрос 1 -->
                <?php
                    switch ($_SESSION['zap_i']) {
                    case 1:
                ?>
                    <table>
                        <p>Все клички животных заканчивающие на "н"</p>
                        <td>Кличка</td>
                        <td>Вид</td>
                        <td>Порода</td>
                    <?php
                        for($g = 1; $g <= $_SESSION['zapros1']; $g++)
                        {
                        ?>
                            <tr>
                                <td><?=$_SESSION['nickname'][$g]?></td>  
                                <td><?=$_SESSION['view'][$g]?></td>
                                <td><?=$_SESSION['breed'][$g]?></td>  
                            </tr>
                    <?php
                        }
                        break;
                    ?>
                    </table>
                    <!-- Запрос 2 -->
                <?php
                    case 2:
                ?>
                <table>
                    <p>Животные, родившиеся между 2016 и 2020</p>
                    <td>Кличка</td>
                    <td>Дата рождения</td>
                    <td>Вид животного</td>
                    <td>Порода животного</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros2']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['nickname'][$g]?></td> 
                            <td><?=$_SESSION['date_of_birth'][$g]?></td> 
                            <td><?=$_SESSION['view'][$g]?></td>  
                            <td><?=$_SESSION['breed'][$g]?></td>
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 3 (не работает)--> 
                <?php
                    case 3:
                ?>
                <table>
                    <p>Сортировка фамилии убыванию</p>
                    <td>Фамилия</td>
                    <td>Имя</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros3']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['familyO'][$g]?></td> 
                            <td><?=$_SESSION['nameO'][$g]?></td>    
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 4 -->
                <?php
                    case 4:
                ?>
                <table>
                    <p>Владельцы, имеющие собаку или кошку</p>
                    <td>Фамилия владельца</td>
                    <td>Вид животного</td>
                    <td>Порода животного</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros4']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['familyO'][$g]?></td> 
                            <td><?=$_SESSION['view'][$g]?></td> 
                            <td><?=$_SESSION['breed'][$g]?></td> 
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 5 (не работает) -->
                <?php
                    case 5:
                ?>
                <table>
                    <p>В зависимости от значения м,ж меняется на полное слово</p>
                    <td>Кличка животного</td>
                    <td>Вид животного</td>
                    <td>Пол животного</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros5']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['nickname'][$g]?></td> 
                            <td><?=$_SESSION['view'][$g]?></td> 
                            <td><?=$_SESSION['gender'][$g]?></td> 
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 6 -->
                <?php
                    case 6:
                ?>
                <table>
                    <p>Окрас - белый</p>
                    <td>Вид животного</td>
                    <td>Порода животного</td>
                    <td>Окрас животного</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros6']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['view'][$g]?></td> 
                            <td><?=$_SESSION['breed'][$g]?></td> 
                            <td><?=$_SESSION['color'][$g]?></td> 
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 7 -->
                <?php
                    case 7:
                ?>
                <table>
                    <td>Фамилия</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros7']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['familyO_nameO'][$g]?></td> 
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 8 -->
                <?php
                    case 8:
                ?>
                <table>
                    <p>Почта @mail.ru</p>
                    <td>Фамилия</td>
                    <td>Имя</td>
                    <td>Отчество</td>
                    <td>Почта</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros8']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['familyO'][$g]?></td> 
                            <td><?=$_SESSION['nameO'][$g]?></td> 
                            <td><?=$_SESSION['fatherO'][$g]?></td>  
                            <td><?=$_SESSION['email'][$g]?></td>
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 9 -->
                <?php
                    case 9:
                ?>
                <table>
                    <p>Владельцы, живущие на переулке</p>
                    <td>Фамилия</td>
                    <td>Имя</td>
                    <td>Адрес</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros9']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['familyO'][$g]?></td> 
                            <td><?=$_SESSION['nameO'][$g]?></td> 
                            <td><?=$_SESSION['address'][$g]?></td> 
                        </tr>
                    <?php
                    }
                    break;
                ?>
                </table>
                <!-- Запрос 10 -->
                <?php
                    case 10:
                ?>
                <table>
                    <p>Медикаменты,дороже 550</p>
                    <td>Название</td>
                    <td>Цена</td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['zapros10']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['nameM'][$g]?></td> 
                            <td><?=$_SESSION['price'][$g]?></td>  
                        </tr>
                    <?php
                    }
                    break;
                }
                ?>
                </table>
                <!-- ПОИСК -->
                <?php
                    include "search.php";
                ?>
                <!-- ФИЛЬТР -->
                <?php
                    include "filter.php";
                ?>
                <p>Владельцы (Owners)</p>
                <table>
                    <td><h3>ID</h3></td>
                    <td><h3>Фамилия</h3></td>
                    <td><h3>Имя</h3></td>
                    <td><h3>Отчество</h3></td>
                    <td><h3>Возраст</h3></td>
                    <td><h3>Адрес</h3></td>
                    <td><h3>Телефон</h3></td>
                    <td><h3>Почта</h3></td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['owners']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['id_ow'][$g]?></td>
                            <td><?=$_SESSION['familyO'][$g]?></td>
                            <td><?=$_SESSION['nameO'][$g]?></td> 
                            <td><?=$_SESSION['fatherO'][$g]?></td>   
                            <td><?=$_SESSION['age'][$g]?></td> 
                            <td><?=$_SESSION['address'][$g]?></td> 
                            <td><?=$_SESSION['telephoneO'][$g]?></td> 
                            <td><?=$_SESSION['email'][$g]?></td> 
                        </tr>
                    <?php
                    }
                ?>
                </table>
                <div class="vvod">
                    <h5>Хотите ввести нового клиента?</h5>
                    <form action="owners.php" method="POST">
                        <input class="vvod-ee" type="text" name="id_ow" placeholder="Введите id:"> <br>
                        <input class="vvod-ee" type="text" name="familyO" placeholder="Введите фамилию:"> <br>
                        <input class="vvod-ee" type="text" name="nameO" placeholder="Введите имя:"> <br>
                        <input class="vvod-ee" type="text" name="fatherO" placeholder="Введите отчество:"> <br>
                        <input class="vvod-ee" type="text" name="age" placeholder="Введите возраст:"> <br>
                        <input class="vvod-ee" type="text" name="address" placeholder="Введите телефон:"> <br>
                        <input class="vvod-ee" type="text" name="telephoneO" placeholder="Введите адрес:"> <br>
                        <input class="vvod-ee" type="text" name="email" placeholder="Введите почту:"> <br>
                        <input class="vvod-sub" type="submit" name="add" value="Добавить">
                    </form>
                    <div class="search-err">
                        <?php
                            echo  $_SESSION['ses'];
                            unset($_SESSION['ses']);
                        ?>
                    </div>
                </div>
            </div>
        
            <div class="animals">
                <br> <br>
                <p>Животные (Animals)</p>
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
                    $mysql = "SELECT * FROM animals";
                    $result = $dbcon -> query($mysql); 
                    if (!$result)
                    {
                        echo "Ошибка выполнения запроса: $dbcon->error"; 
                    }
                    $i = 0;
                    while ($myrow = $result->fetch_array())
                    {
                    ?>
                        <tr>
                            <td><?echo $myrow['id_an']?></td>
                            <td><?echo $myrow['nickname']?></td>
                            <td><?echo $myrow['view']?></td>
                            <td><?echo $myrow['breed']?></td> 
                            <td><?echo $myrow['date_of_birth']?></td> 
                            <td><?echo $myrow['neutered']?></td> 
                            <td><?echo $myrow['weight_kg']?></td> 
                            <td><?echo $myrow['gender']?></td> 
                            <td><?echo $myrow['color']?></td> 
                            <td><?echo $myrow['info']?></td> 
                            <td><?echo $myrow['id_ow']?></td> 
                        </tr>
                    <?php
                    }
                ?>
                </table>
                <div class="vvod">
                    <h5>Хотите ввести нового животного?</h5>
                    <form action="animals.php" method="POST">
                        <input class="vvod-ee" type="text" name="id_an" placeholder="Введите id животного:"> <br>
                        <input class="vvod-ee" type="text" name="nickname" placeholder="Введите кличку животного:"> <br>
                        <input class="vvod-ee" type="text" name="view" placeholder="Введите вид животного:"> <br>
                        <input class="vvod-ee" type="text" name="breed" placeholder="Введите породу:"> <br>
                        <input class="vvod-ee" type="text" name="date_of_birth" placeholder="Введите год рождения:"> <br>
                        <input class="vvod-ee" type="text" name="neutered" placeholder="Введите присутствие кастрации:"> <br>
                        <input class="vvod-ee" type="text" name="weight_kg" placeholder="Введите вес:"> <br>
                        <input class="vvod-ee" type="text" name="gender" placeholder="Введите пол:"> <br>
                        <input class="vvod-ee" type="text" name="color" placeholder="Введите окрас:"> <br>
                        <input class="vvod-ee" type="text" name="info" placeholder="Введите информацию:"> <br>
                        <input class="vvod-ee" type="text" name="id_ow" placeholder="Введите id клиента:"> <br>
                        <input class="vvod-sub" type="submit" name="info2" value="Добавить">
                    </form>
                    <div class="search-err">
                        <?php
                            echo  $_SESSION['ses2'];
                            unset($_SESSION['ses2']);
                        ?>
                    </div>
                </div>
            </div>

            <div class="make">
                <br> <br>
                <p>Запись на прием (Make an appointment)</p>
                <table>
                    <td><h3>ID записи</h3></td>
                    <td><h3>Дата посещения</h3></td>
                    <td><h3>Время посещения</h3></td>
                    <td><h3>ID владельца</h3></td>
                    <td><h3>ID животного</h3></td>
                    <td><h3>ID услуги</h3></td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['make']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['id_m'][$g]?></td>
                            <td><?=$_SESSION['dateM'][$g]?></td>
                            <td><?=$_SESSION['timeM'][$g]?></td>
                            <td><?=$_SESSION['id_ow'][$g]?></td>
                            <td><?=$_SESSION['id_an'][$g]?></td>
                            <td><?=$_SESSION['id_ser'][$g]?></td>
                        </tr>
                    <?php
                    }
                ?>
                </table>
                <div class="vvod">
                    <h5>Хотите ввести новую дату посещения?</h5>
                    <form action="make.php" method="POST">
                        <input class="vvod-ee" type="text" name="id_m" placeholder="Введите id посещения:"> <br>
                        <input class="vvod-ee" type="text" name="dateM" placeholder="Введите дату посещения:"> <br>
                        <input class="vvod-ee" type="text" name="timeM" placeholder="Введите время посещения:"> <br>
                        <input class="vvod-ee" type="text" name="id_ow" placeholder="Введите id владельца:"> <br>
                        <input class="vvod-ee" type="text" name="id_an" placeholder="Введите id животного:"> <br>
                        <input class="vvod-ee" type="text" name="id_ser" placeholder="Введите id услуги:"> <br>
                        <input class="vvod-sub" type="submit" name="info3" value="Добавить">
                    </form>
                    <div class="search-err">
                        <?php
                            echo  $_SESSION['ses3'];
                            unset($_SESSION['ses3']);
                        ?>
                    </div>
                </div>
            </div>

            <div class="vets">
                <br> <br>
                <p>Ветеринары (Vets)</p>
                <table>
                    <td><h3>ID ветеринара</h3></td>
                    <td><h3>Фамилия</h3></td>
                    <td><h3>Имя</h3></td>
                    <td><h3>Отчество</h3></td>
                    <td><h3>Возраст</h3></td>
                    <td><h3>Стаж</h3></td>
                    <td><h3>Телефон</h3></td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['vets']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['id_vet'][$g]?></td>
                            <td><?=$_SESSION['familyV'][$g]?></td>
                            <td><?=$_SESSION['nameV'][$g]?></td>
                            <td><?=$_SESSION['fatherV'][$g]?></td>
                            <td><?=$_SESSION['age'][$g]?></td>
                            <td><?=$_SESSION['experience'][$g]?></td>
                            <td><?=$_SESSION['telephone'][$g]?></td>
                        </tr>
                    <?php
                    }
                ?>
                </table>
                <div class="vvod">
                    <h5>Хотите ввести нового ветеринара?</h5>
                    <form action="vets.php" method="POST">
                        <input class="vvod-ee" type="text" name="id_vet" placeholder="Введите id ветеринара:"> <br>
                        <input class="vvod-ee" type="text" name="familyV" placeholder="Введите фамилию ветеринара:"> <br>
                        <input class="vvod-ee" type="text" name="nameV" placeholder="Введите имя ветеринара:"> <br>
                        <input class="vvod-ee" type="text" name="fatherV" placeholder="Введите отчество ветеринара:"> <br>
                        <input class="vvod-ee" type="text" name="age" placeholder="Введите возраст ветеринара:"> <br>
                        <input class="vvod-ee" type="text" name="experience" placeholder="Введите стаж ветеринара:"> <br>
                        <input class="vvod-ee" type="text" name="telephone" placeholder="Введите телефон ветеринара:"> <br>
                        <input class="vvod-sub" type="submit" name="info4" value="Добавить">
                    </form>
                    <div class="search-err">
                        <?php
                            echo  $_SESSION['ses4'];
                            unset($_SESSION['ses4']);
                        ?>
                    </div>
                </div>
            </div>

            <div class="services">
                <br> <br>
                <p>Услуги (Services)</p>
                <table>
                    <td><h3>ID услуги</h3></td>
                    <td><h3>Название</h3></td>
                    <td><h3>Диагностика</h3></td>
                    <td><h3>Лечение</h3></td>
                    <td><h3>Цена</h3></td>
                    <td><h3>ID медикаментов</h3></td>
                    <td><h3>ID ветеринара</h3></td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['services']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['id_ser'][$g]?></td>
                            <td><?=$_SESSION['nameS'][$g]?></td>
                            <td><?=$_SESSION['diagnostics'][$g]?></td>
                            <td><?=$_SESSION['treatmentS'][$g]?></td>
                            <td><?=$_SESSION['priceS'][$g]?></td>
                            <td><?=$_SESSION['id_m'][$g]?></td>
                            <td><?=$_SESSION['id_vet'][$g]?></td>
                        </tr>
                    <?php
                    }
                ?>
                </table>
                <div class="vvod">
                    <h5>Хотите ввести лечение животного?</h5>
                    <form action="services.php" method="POST">
                        <input class="vvod-ee" type="text" name="id_ser" placeholder="Введите id услуги:"> <br>
                        <input class="vvod-ee" type="text" name="nameS" placeholder="Введите название:"> <br>
                        <input class="vvod-ee" type="text" name="diagnostics" placeholder="Введите диагностику:"> <br>
                        <input class="vvod-ee" type="text" name="treatmentS" placeholder="Введите лечение:"> <br>
                        <input class="vvod-ee" type="text" name="priceS" placeholder="Введите цену:"> <br>
                        <input class="vvod-ee" type="text" name="id_m" placeholder="Введите id медикамента:"> <br>
                        <input class="vvod-ee" type="text" name="id_vet" placeholder="Введите id ветеринара:"> <br>
                        <input class="vvod-sub" type="submit" name="info5" value="Добавить">
                    </form>
                    <div class="search-err">
                        <?php
                            echo  $_SESSION['ses5'];
                            unset($_SESSION['ses5']);
                        ?>
                    </div>
                </div>
            </div>

            <div class="medicines">
                <br> <br>
                <p>Медикаменты (Medicines)</p>
                <table>
                    <td><h3>ID медикаментов</h3></td>
                    <td><h3>Название</h3></td>
                    <td><h3>Инструкция</h3></td>
                    <td><h3>Цена</h3></td>
                    <td><h3>Количество</h3></td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['medicines']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['id_m'][$g]?></td>
                            <td><?=$_SESSION['nameM'][$g]?></td>
                            <td><?=$_SESSION['instructions'][$g]?></td>
                            <td><?=$_SESSION['price'][$g]?></td>
                            <td><?=$_SESSION['amount_med'][$g]?></td>
                        </tr>
                    <?php
                    }
                ?>
                </table>
                <div class="vvod">
                    <h5>Хотите ввести медикаменты?</h5>
                    <form action="medicines.php" method="POST">
                        <input class="vvod-ee" type="text" name="id_m" placeholder="Введите id доставки:"> <br>
                        <input class="vvod-ee" type="text" name="nameM" placeholder="Введите название лекарства:"> <br>
                        <input class="vvod-ee" type="text" name="instructions" placeholder="Введите инструкцию по применению:"> <br>
                        <input class="vvod-ee" type="text" name="price" placeholder="Введите стоимость:"> <br>
                        <input class="vvod-ee" type="text" name="amount_med" placeholder="Введите количество:"> <br>
                        <input class="vvod-sub" type="submit" name="info6" value="Добавить">
                    </form>
                    <div class="search-err">
                        <?php
                            echo  $_SESSION['ses6'];
                            unset($_SESSION['ses6']);
                        ?>
                    </div>
                </div>
            </div>

            <div class="position">
            <br> <br>
                <p>Должности (Position)</p>
                <table>
                    <td><h3>ID должности</h3></td>
                    <td><h3>Название</h3></td>
                    <td><h3>Ставка</h3></td>
                    <td><h3>ID ветеринара</h3></td>
                <?php
                
                    for($g = 1; $g <= $_SESSION['position']; $g++)
                    {
                    ?>
                        <tr>
                            <td><?=$_SESSION['id_dol'][$g]?></td>
                            <td><?=$_SESSION['nameP'][$g]?></td>
                            <td><?=$_SESSION['bet'][$g]?></td>
                            <td><?=$_SESSION['id_vet'][$g]?></td>
                        </tr>
                    <?php
                    }
                ?>
                </table>
                <div class="vvod">
                    <h5>Хотите ввести должности?</h5>
                    <form action="position.php" method="POST">
                        <input class="vvod-ee" type="text" name="id_dol" placeholder="Введите id должности:"> <br>
                        <input class="vvod-ee" type="text" name="nameP" placeholder="Введите название:"> <br>
                        <input class="vvod-ee" type="text" name="bet" placeholder="Введите ставку:"> <br>
                        <input class="vvod-ee" type="text" name="id_vet" placeholder="Введите id ветеринара:"> <br>
                        <input class="vvod-sub" type="submit" name="info7" value="Добавить">
                    </form>
                    <div class="search-err">
                        <?php
                            echo  $_SESSION['ses7'];
                            unset($_SESSION['ses7']);
                        ?>
                    </div>
                </div>
        </div>
</body>
</html>