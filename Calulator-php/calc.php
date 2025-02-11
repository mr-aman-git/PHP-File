<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calc.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="main">
            <div class="main-box">
                <h2>Calculator</h2>
                <form method="POST">
                    <div class="form-box">
                        <input type="number" name="text1" placeholder="Enter Number">
                    </div>

                    <div class="form-select">
                        <select name="operation" id="">
                            <option value="add">+</option>
                            <option value="sub">-</option>
                            <option value="mult">*</option>
                            <option value="divi">/</option>
                            <option value="modulo">%</option>
                        </select>
                    </div>

                    <div class="form-box">
                        <input type="number" name="text2" placeholder="Enter Number">
                    </div>

                    <button name="submit">Submit</button>
                    
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