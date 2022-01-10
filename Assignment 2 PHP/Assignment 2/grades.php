<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
</head>

<body>


    <div style="width: 70%; margin: auto; text-align: center">
        <h1>Calculate Grades</h1>

        <?php

            $marks = "";
            if(isset($_POST['submit'])){
                $marks = $_POST['marks'];
                $is_numeric = "";
                $grade = "";

                if(is_numeric($marks)){

                    if($marks > 100){
                        echo "<span style='color: white; background-color: red; padding: 10px; margin-bottom: 15px; display: inline-block'>Marks Range is 0 to 100. Invalid Range!</span>";
                    } else if($marks >= 85){
                        $grade = "A";
                        echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Your Grade is: <b>'".$grade."'<b></span>";

                    } else if($marks >= 75){
                        $grade = "B";
                        echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Your Grade is: <b>'".$grade."'<b></span>";
                    } else if($marks >= 60){
                        $grade = "C";
                        echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Your Grade is: <b>'".$grade."'<b></span>";
                    } else if($marks >= 0){
                        $grade = "F";
                        echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Your Grade is: <b>'".$grade."'<b></span>";
                    } else{
                        echo "<span style='color: white; background-color: red; padding: 10px; margin-bottom: 15px; display: inline-block'>Marks Range is 0 to 100. Invalid Range!</span>";
                    }

                } else{
                    
                    $marks = strtoupper($marks);
                    switch ($marks) {
                        case 'A':
                            echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Grade A: 85-100</span>";
                            break;
                        case 'B':
                            echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Grade B: 75-84.99</span>";
                            break;
                        case 'C':
                            echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Grade C: 60-74.99</span>";
                            break;
                        case 'F':
                            echo "<span style='color: white; background-color: blue; padding: 10px; margin-bottom: 15px; display: inline-block'>Grade F: 0-59.99</span>";
                            break;
                        default:
                            echo "<span style='color: white; background-color: red; padding: 10px; margin-bottom: 15px; display: inline-block'>Invalid Grade Value!</span>";
                            break;
                    }


                }

            }

        ?>

        <form action="" method="post">
            <label for="marks">Marks/Grade: </label>
            <input type="text" value="<?php echo $marks; ?>" name="marks" id="marks">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>