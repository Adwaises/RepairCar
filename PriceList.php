<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="your description goes here" />
        <meta name="keywords" content="your,keywords,goes,here" />
        <meta name="author" content="Your Name / Design by Daniel Carlsson http://allyourbasearebelongtous.se" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="nivo/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="nivo/themes/default/default.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Trade+Winds' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <title>ГСК ПЛАНЕТА-4</title>
    </head>

    <body>

        <!-- Header block -->
        <div class="alpha60 header rounded" >
            <h1>ГСК ПЛАНЕТА-4</h1>
            <div class="alpha50">
                <div class="alpha50" >СТАНЦИЯ ТЕХНИЧЕСКОГО ОБСЛУЖИВАНИЯ</div>
            </div>
            <div class="mainmenu">
                <ul class="cf">
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="PriceList.php">Прайс-лист</a></li>
                    <li><a href="https://2gis.ru/ulyanovsk/firm/70000001006636493%2C48.333192%2C54.2496?queryState=center%2F48.332859%2C54.250045%2Fzoom%2F18" target="_blank">Карта</a></li>
                </ul>
            </div>
        </div>
        <!-- / Header block -->
        <!-- Layout setting -->
        <div id="container" class="alpha60 rounded">
            <div class="alpha60 headline rounded">
                <h1>Прайс-лист</h1>
            </div>
            <!-- Headline block -->
            <!-- Single content block -->
            <div class="singlecontent alpha60">


                <?php
                if (file_exists("text.txt")) {

                    $f = file('text.txt');

                    echo "<table style='margin: auto' border='1' cellpadding='6'> 
      <tr> 
      <th>Услуга</th><th>Автомобиль</th><th>Цена (руб)</th>
      </tr>";
                    echo "<tr>";
                    // Читать построчно до конца файла
                    foreach ($f as $line_num => $line) {
                        $array = explode("|", $line);
                        for ($q = 0; $q < 3; $q++) {
                            echo "<td>  " . $array[$q] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table> <p></p>";
                } else {
                    echo "Файла не существует";
                }
                ?>

            </div>
            <!-- / Single content block -->

            <!-- Double content block -->
            <div class="doublecontent">
                <div class="doubleleft">
                    <h2>Адрес</h2>
                    <div class="pNoMargin" >ул. Хрустальная, 70, Ульяновск</div>
                    <p>432044, Россия</p>
                </div>


                <div class="doubleleft">
                    <h2>Контакты</h2>
                    <div class="pNoMargin">Телефон: 97-43-13</div>
                    <p>+7 (951) 097-43-13</p>
                </div>

                <div class="doubleleft">
                    <h2>Часы работы</h2>
                    <div class="pNoMargin">ПН–ПТ: 9:00-17:00</div>
                    <p>СБ–ВС: Выходной</p>
                </div>
                <div class="clear">&nbsp;</div>
            </div>
            <!-- / Double content block -->
        
        <!-- / Layout setting -->
        <!-- Footer block -->
        <div class="alpha60 footer">
            <p> © 2017 Константинов Андрей | E-mail <a href="mailto:vlad@htmlbook.ru">adwaises@mail.ru</a><br/>
        </div>
        </div>
        <!-- / Footer block -->
        <script type="text/javascript">
            $(window).load(function () {
                $('#slider').nivoSlider();
            });
        </script>
    </body>
</html>
