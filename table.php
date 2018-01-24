

<?php

require_once "database-connect.php";

$connection = @new mysqli($host, $db_user, $db_pass, $db_name);

if($connection->connect_errno!=0)
{
    echo "Error: ".$connection->connect_errno;
}

//user id 1 mysql read
$user1 = mysqli_query($connection, "select * from user where id=1 ");
$row1 = mysqli_fetch_assoc($user1);

//user id 2 mysql read
$user2 = mysqli_query($connection, "select * from user where id=2 ");
$row2 = mysqli_fetch_assoc($user2);

//user id 3 mysql read
$user3 = mysqli_query($connection, "select * from user where id=3 ");
$row3 = mysqli_fetch_assoc($user3);

//user id 4 mysql read
$user4 = mysqli_query($connection, "select * from user where id=4 ");
$row4 = mysqli_fetch_assoc($user4);

//user id 5 mysql read
$user5 = mysqli_query($connection, "select * from user where id=5 ");
$row5 = mysqli_fetch_assoc($user5);





?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tabela</title>
    <link rel="stylesheet" href="styles/style-table.css">
    <script src="libs/jquery-min.js"></script>
    <script src="script.js"></script>
</head>
<body>

<div class="container">


    <div class="up">


        <select class="month" name="month">
            <option value="january">Styczeń</option>
            <option value="february">Luty</option>
            <option value="march">Marzec</option>
            <option value="april">Kwiecień</option>
            <option value="may">Maj</option>
            <option value="june">Czerwiec</option>
            <option value="july">Lipiec</option>
            <option value="august">Sierpień</option>
            <option value="september">Wrzesień</option>
            <option value="october">Październik</option>
            <option value="november">Listopad</option>
            <option value="december">Grudzień</option>
        </select>

        <select class="year" name="year">
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
        </select>
    </div>


    <div class="left"></div>
    <div class="center">
        <table id="table-header">
            <tr>

                <th class="table-header-month"></th>
                <th class="table-header-year"></th>
            </tr>
        </table>




        <table id="table-data">
            <tr>

                <th class="day-0"></th>
                <th class="day-1">1</th>
                <th class="day-2">2</th>
                <th class="day-3">3</th>
                <th class="day-4">4</th>
                <th class="day-5">5</th>
                <th class="day-6">6</th>
                <th class="day-7">7</th>
                <th class="day-8">8</th>
                <th class="day-9">9</th>
                <th class="day-10">10</th>
                <th class="day-11">11</th>
                <th class="day-12">12</th>
                <th class="day-13">13</th>
                <th class="day-14">14</th>
            </tr>

            <form>

            <tr>
                <th class="row-1-day-0"><?php echo $row1['name']; ?></th>
                <th class="row-1-day-1"></th>
                <th class="row-1-day-2"></th>
                <th class="row-1-day-3"></th>
                <th class="row-1-day-4"></th>
                <th class="row-1-day-5"></th>
                <th class="row-1-day-6"></th>
                <th class="row-1-day-7"></th>
                <th class="row-1-day-8"></th>
                <th class="row-1-day-9"></th>
                <th class="row-1-day-10"></th>
                <th class="row-1-day-11"></th>
                <th class="row-1-day-12"></th>
                <th class="row-1-day-13"></th>
                <th class="row-1-day-14"></th>
            </tr>
            <tr>
                <th class="row-2-day-0"><?php echo $row2['name']; ?></th>
                <th class="row-2-day-1"></th>
                <th class="row-2-day-2"></th>
                <th class="row-2-day-3"></th>
                <th class="row-2-day-4"></th>
                <th class="row-2-day-5"></th>
                <th class="row-2-day-6"></th>
                <th class="row-2-day-7"></th>
                <th class="row-2-day-8"></th>
                <th class="row-2-day-9"></th>
                <th class="row-2-day-10"></th>
                <th class="row-2-day-11"></th>
                <th class="row-2-day-12"></th>
                <th class="row-2-day-13"></th>
                <th class="row-2-day-14"></th>
            </tr>
            <tr>
                <th class="row-3-day-0"><?php echo $row3['name']; ?></th>
                <th class="row-3-day-1"></th>
                <th class="row-3-day-2"></th>
                <th class="row-3-day-3"></th>
                <th class="row-3-day-4"></th>
                <th class="row-3-day-5"></th>
                <th class="row-3-day-6"></th>
                <th class="row-3-day-7"></th>
                <th class="row-3-day-8"></th>
                <th class="row-3-day-9"></th>
                <th class="row-3-day-10"></th>
                <th class="row-3-day-11"></th>
                <th class="row-3-day-12"></th>
                <th class="row-3-day-13"></th>
                <th class="row-3-day-14"></th>
            </tr>
            <tr>
                <th class="row-4-day-0"><?php echo $row4['name']; ?></th>
                <th class="row-4-day-1"></th>
                <th class="row-4-day-2"></th>
                <th class="row-4-day-3"></th>
                <th class="row-4-day-4"></th>
                <th class="row-4-day-5"></th>
                <th class="row-4-day-6"></th>
                <th class="row-4-day-7"></th>
                <th class="row-4-day-8"></th>
                <th class="row-4-day-9"></th>
                <th class="row-4-day-10"></th>
                <th class="row-4-day-11"></th>
                <th class="row-4-day-12"></th>
                <th class="row-4-day-13"></th>
                <th class="row-4-day-14"></th>
            </tr>
            <tr>
                <th class="row-5-day-0"><?php echo $row5['name']; ?></th>
                <th class="row-5-day-1"></th>
                <th class="row-5-day-2"></th>
                <th class="row-5-day-3"></th>
                <th class="row-5-day-4"></th>
                <th class="row-5-day-5"></th>
                <th class="row-5-day-6"></th>
                <th class="row-5-day-7"></th>
                <th class="row-5-day-8"></th>
                <th class="row-5-day-9"></th>
                <th class="row-5-day-10"></th>
                <th class="row-5-day-11"></th>
                <th class="row-5-day-12"></th>
                <th class="row-5-day-13"></th>
                <th class="row-5-day-14"></th>
            </tr>


                <input class="change_" type="submit" value="Potwierdź zmiany"/>

            </form>


        </table>
        </form>




    </div>
    <div class="right"></div>
    <div class="footer">

        <p class="footer-text">Michał Ciołek<br>Zadanie testowe IntraworQ<br>PhpStorm</p>



    </div>
</div>
</body>
</html>


