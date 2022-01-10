<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Shop</title>
</head>

<body>


    <div style="width: 70%; margin: auto; text-align: center">
        <h1>Pizza Shop</h1>

        <?php

            if(isset($_POST['submit'])){
                $topping_price = 0;
                $pizza_price = 0;
                $total_amount = 0;
                $pizza = "";
                $toppings = "";
                $size = $_POST['size'];

                if($size == "extra-large"){
                    $pizza_price = 17.5;
                    $pizza = "Extra Large Pizza";
                } else if($size == "large"){
                    $pizza_price = 15;
                    $pizza = "Large Pizza";
                } else if($size == "medium"){
                    $pizza_price = 12.5;
                    $pizza = "Medium Pizza";
                } else if($size == "small"){
                    $pizza_price = 9;
                    $pizza = "Small Pizza";
                }

                if(isset($_POST['pepperoni'])){
                    $toppings .= "Pepperoni<br>";
                    $topping_price += 1;
                }
                if(isset($_POST['cheese'])){
                    $toppings .= "Cheese<br>";
                    $topping_price += 0;
                }
                if(isset($_POST['olive'])){
                    $toppings .= "Olive<br>";
                    $topping_price += 1;
                }
                if(isset($_POST['pineapple'])){
                    $toppings .= "Pineapple<br>";
                    $topping_price += 1;
                }
                if(isset($_POST['ham'])){
                    $toppings .= "Ham<br>";
                    $topping_price += 1;
                }

                $total_amount = $pizza_price + $topping_price;
                $total_amount = number_format($total_amount, 2);

                echo "<div style='background-color: blue; color: white; width: 50%; margin: auto; padding: 20px'>
                        Pizza Size: <b>".$pizza."</b><br><br>
                        Toppings: <br><b>".$toppings."</b><br><br>
                        Order Cost: <b>$".$total_amount."</b>

                    </div>";
            } else{

                ?>
        
        <form action="" method="post">
            <label for="size">Pizza Size: </label>
            <select name="size">
                <option value="extra-large" selected>Extra Large Pizza</option>
                <option value="large">Large Pizza</option>
                <option value="medium">Medium Pizza</option>
                <option value="small">Small Pizza</option>
            </select>
            <br><br>
            <label for="topping">Toppings:</label><br>
            <input type="checkbox" name="pepperoni">Pepperoni
            <input type="checkbox" name="cheese">Cheese
            <input type="checkbox" name="olive">Olive
            <input type="checkbox" name="pineapple">Pineapple
            <input type="checkbox" name="ham">Ham<br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
                <?php
        
        
            }

        ?>

       
    </div>
</body>
</html>