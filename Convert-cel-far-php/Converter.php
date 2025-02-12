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
                            <input type="radio" value="Calcius" name="cal">
                        </div>
                        

                        <div>
                            <label for="radio">Faranite</label>
                            <input type="radio" value="Faranite" name="cal">
                        </div>
                    </div>

                    <button name="submit">Convert</button>
                    
                </form>

                <div class="output">
                    <p>
                        <?php
                        if(isset($_POST ['submit'])){
                            $num1= $_POST ['text1'];
                            $num2= $_POST ['text2'];
            
                            switch ($_POST ['operation']) {
                                case 'add':
                                    $sum= $num1 + $num2;
                                    echo "$num1 + $num2= " .$sum;
                                    break;

                                    case 'sub':
                                        $sub= $num1 - $num2;
                                        echo "$num1 - $num2= " .$sub;
                                        break;

                                        case 'mult':
                                            $mult= $num1 * $num2;
                                            echo "$num1 * $num2= " .$mult;
                                            break;

                                            case 'divi':
                                                $divi= $num1 / $num2;
                                                echo "$num1 / $num2= " .$divi;
                                                break;

                                                case 'modulo':
                                                    $modulo= $num1 % $num2;
                                                    echo "$num1 % $num2= " .$modulo;
                                                    break;
                                
                                default:
                                    echo 'not exist';
                                    break;
                            }
                        }

                        ?>
                    </p>
                </div>

            </div>
        </div>
    </main>
</body>
</html>