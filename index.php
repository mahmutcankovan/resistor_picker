<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
        <title>Resistor Color Code Calculator</title>
    </head>
    <body>
        <h1>Resistor Color Code Calculator</h1>
        <section class="selector">

            <div id="digit-info">
                <h3>Introductions</h3>
                <p>A regular tht resistor contains 3 to 6 color band (or digit) for symbolizing its specifications.</p>
                <ul>
                    <li>Basic resistors contain 3 or 4 band. Their first three color is its resistor value and 4. value is for tolerance. If there is no 4. band, then the tolerance is %20 </li>
                    <li>Some resistors might have 5 or 6 band. If 5, the first 4 band is for resistor value and 5. value is for tolerance. If 6, then the last band (sixth band) is for temperature coefficient (ppm/K)  </li>
                </ul>
            </div>
            <div class="subtitle">
                <h3>Choose Your Resistor Color</h3>
            </div>
            <div class="form">
            <form action="index.php" method="post">
                <select name="first-digit" id="first-digit-selector" required>
                    
                    <option value="">1. Band Color</option>
                    <option value="black">Black</option>
                    <option value="brown" selected>Brown</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="violet">Violet</option>
                    <option value="grey">Grey</option>
                    <option value="white">White</option>
                    
                </select>
                <select name="second-digit" id="second-digit-selector" required>
                    <option value="">2. Band Color</option>
                    <option value="black">Black</option>
                    <option value="brown" selected>Brown</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="violet">Violet</option>
                    <option value="grey">Grey</option>
                    <option value="white">White</option>
                                    
                </select>
                <select name="third-digit" id="third-digit-selector" required>
                    <option value="">3. Band Color</option>
                    <option value="black" selected>Black</option>
                    <option value="brown">Brown</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="violet">Violet</option>
                    <option value="grey">Grey</option>
                    <option value="white">White</option>
                                    
                </select>
                <select name="fourth-digit" id="fourth-digit-selector">
                    <option value="">4. Band Color</option>
                    <option value="black">Black</option>
                    <option value="brown">Brown</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="violet">Violet</option>
                    <option value="grey">Grey</option>
                    <option value="white">White</option>
                    <option value="gold">Gold</option>
                    <option value="silver">Silver</option>
                    <option value="burlywood" selected>No-color</option>                 
                </select>
                <select name="fifth-digit" id="fifth-digit-selector">
                    <option value="">5. Band Color</option>

                    <option value="brown">Brown</option>
                    <option value="red">Red</option>

                    <option value="green">Green</option>
                    <option value="blue" selected>Blue</option>
                    <option value="violet">Violet</option>
                    <option value="grey">Grey</option>

                    <option value="gold">Gold</option>
                    <option value="silver">Silver</option>
                    <option value="burlywood">No-color</option>                 
                </select>
                <select name="sixth-digit" id="sixth-digit-selector" >
                    <option value="">6. Band Color</option>
                    <option value="black">Black</option>
                    <option value="brown">Brown</option>
                    <option value="red">Red</option>
                    <option value="orange">Orange</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="violet">Violet</option>
                    <option value="grey">Grey</option>

                    <option value="burlywood" selected>No-color</option>                 
                </select>
                <input type="submit">

            </form>
            </div>
        </section>
        <section class="main">

            <div id="resistor-body">
                <div id="resistor-terminal-left"></div>
                <div class="resistor-color-band" id="first-digit"></div>
                <div class="resistor-color-band" id="second-digit"></div>
                <div class="resistor-color-band" id="third-digit"></div>
                <div class="resistor-color-band" id="fourth-digit"></div>
                <div class="resistor-color-band" id="fifth-digit"></div>
                <div class="resistor-color-band" id="sixth-digit"></div>
                <div id="resistor-terminal-right"></div>
            </div>
        </section>
        <?php 
            /*Submit'e basınca değerler neden sıfırlanıyor? */
            $firstDigitColor = $_POST["first-digit"];
            $secondDigitColor = $_POST["second-digit"];
            $thirdDigitColor = $_POST["third-digit"];
            $fourthDigitColor = $_POST["fourth-digit"];
            $fifthDigitColor = $_POST["fifth-digit"];
            $sixthDigitColor = $_POST["sixth-digit"];

            /*function isNoColor($selectedColor){
                if($selectedColor == nocolor){
                    $selectedColor = burlywood;
                    return $selectedColor;
                }else {
                    return $selectedColor;
                }
            } */

            function resistorTypeFinder($firstDigitColor, $secondDigitColor, $thirdDigitColor, $fourthDigitColor, $fifthDigitColor, $sixthDigitColor){
                if ($fourthDigitColor == "burlywood" & $fifthDigitColor == burlywood & $sixthDigitColor == burlywood){
                    $resType= "three-digit";
                }
                elseif($fourthDigitColor == burlywood & $fifthDigitColor != burlywood & $sixthDigitColor == burlywood){    
                    $resType= "four-digit";
                }
                elseif($fourthDigitColor != burlywood & $fifthDigitColor != burlywood & $sixthDigitColor == burlywood){
                    $resType= "five-digit";
                }
                elseif($fourthDigitColor != burlywood & $fifthDigitColor != burlywood & $sixthDigitColor != burlywood){
                   
                    $resType= "six-digit";
                }
                else{
                    /*TODO Hatalı renk dizilimi seçimi */
                    echo "none";
                }
                return $resType;
            }
            /*NoColor geldiğinde ne yapacağı belli değil çünkü nocolor gelmiyor aslında burlywood geliyor. Value = nocolor yerine burlywood yazarsan sorun kendiliğinden çözülüyor. isNoColor fonksiyonu işlevsizleşiyor. resistorCalculator fonk. bu yüzden girmiyor. */

            function resistorCalculator($firstDigitValue, $secondDigitValue, $thirdDigitValue, $fourthDigitValue, $fifthDigitValue, $sixthDigitValue, $fifthDigitColor, $sixthDigitColor, $resType){
                if ($resType === "three-digit"){
                    $resValue = ($firstDigitValue*10 + $secondDigitValue) * (10**$thirdDigitValue); 
                    $resTolerance = "20%";
                    $resTempCoeff = "N/A";
                }
                elseif($resType === "four-digit"){
                    $resValue = ($firstDigitValue*10 + $secondDigitValue) * (10**$thirdDigitValue); 
                    $resTolerance = toleranceCalculator($fifthDigitColor);
                    $resTempCoeff = "N/A";
                }
                elseif($resType === "five-digit"){
                    $resValue = ($firstDigitValue*100 + $secondDigitValue*10 + $thirdDigitValue) * (10**$fourthDigitValue); 
                    $resTolerance = toleranceCalculator($fifthDigitColor);
                    $resTempCoeff = "N/A";
                }
                elseif($resType === "six-digit"){
                    $resValue = ($firstDigitValue*100 + $secondDigitValue*10 + $thirdDigitValue) * (10**$fourthDigitValue);  
                    $resTolerance = toleranceCalculator($fifthDigitColor); 
                    $resTempCoeff = tempCoeffCalculator($sixthDigitColor); 
                }
                else {
                    echo "No Res Type";
                }
                return array($resValue , $resTolerance, $resTempCoeff);

            }

            function toleranceCalculator($fifthDigitColor){
                switch ($fifthDigitColor){
                    case "brown":
                        $resTolerance = "1%";
                        break;
                    case "red":
                        $resTolerance = "2%";
                        break;
                    case "green":
                        $resTolerance = "0.5%";
                        break;
                    case "blue":
                        $resTolerance = "0.25%";
                        break;
                    case "violet":
                        $resTolerance = "0.1%";
                        break;
                    case "grey":
                        $resTolerance = "0.05%";
                        break;
                    case "gold":
                        $resTolerance = "5%";
                        break;
                    case "silver":
                        $resTolerance = "10%";
                        break;
                    default:
                        echo "Default Tolerance Value is 20%";
                        break;
                }
                return $resTolerance;
            }

            function tempCoeffCalculator($sixthDigitColor){
                switch ($sixthDigitColor){
                   case "black":
                        $resCoeff = "250";
                    case "brown":
                        $resCoeff = "100";
                        break;
                    case "red":
                        $resCoeff = "50";
                        break;
                    case "orange":
                        $resCoeff = "15";
                        break;
                    case "yellow":
                        $resCoeff = "25";
                        break;    
                    case "green":
                        $resCoeff = "20";
                        break;
                    case "blue":
                        $resCoeff = "10";
                        break;
                    case "violet":
                        $resCoeff = "5";
                        break;
                    case "grey":
                        $resCoeff = "1";
                        break;
                    default:
                        echo "No Temperature Coeff. Value";
                        break;
                }
                return $resCoeff;
            }

            function colorToValue($selectedColorValue){
                switch ($selectedColorValue){
                    case "black":
                        $selectedColorValue = 0;
                        break;
                    case "brown":
                        $selectedColorValue = 1;
                        break;
                    case "red":
                        $selectedColorValue = 2;
                        break;
                    case "orange":
                        $selectedColorValue = 3;
                        break;
                    case "yellow":
                        $selectedColorValue = 4;
                        break;
                    case "green":
                        $selectedColorValue = 5;
                        break;
                    case "blue":
                        $selectedColorValue = 6;
                        break;
                    case "violet":
                        $selectedColorValue = 7;
                        break;
                    case "grey":
                        $selectedColorValue = 8;
                        break;
                    case "white":
                        $selectedColorValue = 9;
                        break;
                    case "gold":
                        $selectedColorValue = 0.1;
                        break;
                    case "silver":
                        $selectedColorValue = 0.01;
                        break;
                    case "burlywood":
                        $selectedColorValue = "N/A";
                    default:
                        /* TODO */
                        break;
                }
                return $selectedColorValue;
            }

            $firstDigitValue = colorToValue($firstDigitColor);
            $secondDigitValue = colorToValue($secondDigitColor);
            $thirdDigitValue = colorToValue($thirdDigitColor);
            $fourthDigitValue = colorToValue($fourthDigitColor);
            $fifthDigitValue = colorToValue($fifthDigitColor);
            $sixthDigitValue = colorToValue($sixthDigitColor);

            $resType = resistorTypeFinder($firstDigitColor, $secondDigitColor, $thirdDigitColor, $fourthDigitColor, $fifthDigitColor, $sixthDigitColor);
            $resData = resistorCalculator($firstDigitValue, $secondDigitValue, $thirdDigitValue, $fourthDigitValue, $fifthDigitValue, $sixthDigitValue, $fifthDigitColor, $sixthDigitColor, $resType);
            
            echo "Resistor Value is: " . $resData[0];
            echo "<br>";
            echo "Resistor Tolerance is: ", $resData[1] ;
            echo "<br>";
            echo "Resistor Temp. Coeff is: ", $resData[2];
        
            echo "<style>#first-digit {background-color: $firstDigitColor;}</style>";
            echo "<style>#second-digit {background-color: $secondDigitColor;}</style>";
            echo "<style>#third-digit {background-color: $thirdDigitColor;}</style>";
            echo "<style>#fourth-digit {background-color: $fourthDigitColor;}</style>";
            echo "<style>#fifth-digit {background-color: $fifthDigitColor;}</style>";
            echo "<style>#sixth-digit {background-color: $sixthDigitColor;}</style>";
        ?>      
    </body>
</html>

