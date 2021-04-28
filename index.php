<html>
    <head>
        <title>Конвертер</title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="hotSwap.js"></script>
    </head>

    <body>
        <div class="converter">
            <form name="conv" action="index.php" method="GET">
                <fieldset>
                    <legend>Конвертер Валют</legend>
                        <select id="curlst1" name="curlst1">
                            <option><?php if(isset($_GET['curlst1'])) echo $_GET['curlst1']; else echo "USD";?></option>
                            <option>USD</option>
                            <option>RUB</option>
                            <option>EUR</option>
                            <option>GBP</option>
                            <option>YEN</option>
                        </select>
                    <br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16" id="doubleArrow" onclick="swap()">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    <br>
                    <select id="curlst2" name="curlst2">
                            <option><?php if(isset($_GET['curlst2'])) echo $_GET['curlst2']; else echo "USD"; ?></option>
                            <option>USD</option>
                            <option>RUB</option>
                            <option>EUR</option>
                            <option>GBP</option>
                            <option>YEN</option>
                    </select>
                    <br>
                    <br>
                    <span class="summa">Сумма</span>
                    <br>
                    <input type="number" id="curCount" name="curCount" required value="<?php if(isset($_GET['curCount'])) echo $_GET['curCount']; ?>">
                    <br>
                    <input type="submit" value="Расчет">
                    <br>
                    <input type="text" id="curDone" readonly value="
<?php
                        if((isset($_GET['curCount']))&&(isset($_GET['curlst1']))&&(isset($_GET['curlst2']))){
                            $curriences_values = [  
                                'RUB' => 1.,
                                'USD' => 0.0131,
                                'EUR' => 0.0111,
                                'GBP'=> 0.0095,
                                "YEN" => 1.4448
                            ];

                            $from_currience = $_GET['curlst1'];
                            $to_currience = $_GET['curlst2'];
                            $value_to_convert = $_GET['curCount']; 
                            
                            $converted_value = round (($value_to_convert / $curriences_values[$from_currience]) * $curriences_values[$to_currience] , 4);

                            echo $converted_value," ", $to_currience;
                        }
?>">
                </fieldset>
            </form>
        </div>
    </body>
</html>