<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>

    <link rel="stylesheet" href="style1.css">
</head>

<body>

<div class="container">

    <h1>Multiplication Table</h1>

    <table>

    <?php

    for($row = 0; $row <= 10; $row++){

        echo "<tr>";

        for($col = 0; $col <= 10; $col++){

            $result = $row * $col;

            // Alternating colors
            if(($row + $col) % 2 == 0){
                $color = "light";
            }else{
                $color = "dark";
            }

            echo "<td class='$color'>$result</td>";
        }

        echo "</tr>";
    }

    ?>

    </table>

</div>

</body>
</html>