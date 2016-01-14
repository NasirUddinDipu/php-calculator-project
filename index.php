<?php include_once 'function.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <h1>CALCULATOR</h1>
        <div id="container">
            <form action="" method="post">
                <div id="result"><p>
                            <?php
                            if($_POST) {
                            $number_one = $_POST["number_one"];
                            $number_two = $_POST["number_two"];
                            $oparetor = $_POST["oparetor"];
                            echo form_processing($oparetor, $number_one, $number_two);
                            
                            }

                            ?>
                        
                    </p></div>
                <div id="button">
                    <p>
                        <label for="number_one"><span class="bold">Number One:</span></label>
                        <input type="text" name="number_one" id="number_one" value="<?php  
                        if(isset($number_one)) {
                            echo $number_one;
                        }else {
                            echo 0;
                        }
                        ?>" /> 
                    </p>
                    <p>
                        <label for="number_two"><span class="bold">Number Two:</span></label>
                        <input type="text" name="number_two" id="number_two" value="<?php 
                        if(isset($number_two)) {
                            echo $number_two;
                        } else {
                            echo 0;
                        }   
                        ?>" />
                    </p>
                    <input type="submit" name="oparetor" value="+" />
                    <input type="submit" name="oparetor" value="-" />
                    <input type="submit" name="oparetor" value="*" />
                    <input type="submit" name="oparetor" value="/" />
                    <input type="submit" name="oparetor" value="%" />
                </div>
            </form>
        </div>
    </body>
</html>
