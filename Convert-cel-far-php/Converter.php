<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Converter.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="main">
            <div class="main-box">
                <h2>Calculator</h2>
                <form method="POST">
                    <div class="form-box">
                        <input type="number" name="text1" placeholder="Enter Number" required>
                    </div>

                    <div class="form-select">
                        <div>
                            <label for="radio">Calcius</label>
                            <input type="radio" value="cel" name="units" required>
                        </div>
                        

                        <div>
                            <label for="radio">Faranite</label>
                            <input type="radio" value="far" name="units">
                        </div>
                    </div>

                    <button name="submit">Convert</button>
                    
                </form>

                <div class="output">
                    <p>
                        <?php
                        if(isset($_POST ['submit'])){
                            $num1= $_POST ['text1'];
                            $temp= $_POST ['units'];

                            if($temp == "cel"){
                                $celcious = ($num1 - 32) * 5 / 9;
                                echo "Celcius: $celcious";

                            } else{
                                $faranite = $num1 * 9 / 5 + 32;
                                echo "Fahrenheit: $faranite";

                            };
            
                            
                        }

                        ?>
                    </p>
                </div>

            </div>
        </div>
    </main>
</body>
</html>