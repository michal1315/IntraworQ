

<?php

require_once "database-connect.php";





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


        <form></form>

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
            <tr>
                <th class="row-1-day-0"></th>
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
                <th class="row-2-day-0"></th>
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
                <th class="row-3-day-0"></th>
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
                <th class="row-4-day-0"></th>
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
                <th class="row-5-day-0"></th>
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


