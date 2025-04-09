<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello!</title>
</head>
<body>
    Hello World1!<br>
    <?php
        // Comment1
        # Comment2
        /*
//         * Line1
//         * Line2
         */
        echo "Hello Worlds!2";
        echo "<br>";
        $name = "Kasidit";
        $name2 = "ditsiKa";
        echo "Hello {$name} {$name2}", "<br>";
        echo $name." ".$name2."<br>";
        echo 'Hello Worlds3!<br>';
        echo "<br>";

        $a = 1;
        $b = 2;
        echo "\$a = {$a}", "<br>\n";
        echo "\$b = {$b}", "<br>\n";
        echo '$c = $a + $b++'."<br>";
        $c = $a + $b++;
        echo "\$b = {$b}", "<br>\n";
        echo "\$c = {$c}", "<br>\n";
        echo $a.$b, "<br>\n";

        echo "<br>";
    ?>
    <?php

        $integer_10 = 1000;
        $integer_8 = -01000;
        $integer_16 = 0x1000;
        echo "integer_10: $integer_10 <br>";
        echo "integer_8: $integer_8 <br>";
        echo "integer_16: $integer_16 <br>";


        echo "<br>";

        $color = ["red", "green", "blue"];
        echo "$color[0]<br>";
        foreach ($color as $value) {
            echo "$value<br>";
        }
        echo "<br>";

        $info = ["name" => "Kasidit", "color" => "red"];
        echo "$info[name]<br>";
        foreach ($info as $value) {
            echo "$value<br>";
        }
        echo "<br>";

        $multi_array = [
                "fruit" => ["red" => "apple", "yellow" => "banana"],
                "flower" => ["red" => "apple", "yellow" => "banana"],
        ];
        echo "{$multi_array["fruit"]["red"]}<br>";
        echo "<pre>";
        echo var_dump($multi_array)."<br>";
        echo "</pre>";

        if (1+2!=3){
            echo "YAY 1+2=3<br>";
        } else{
    ?>
            False <br>
            Html here <br>
            1 <br>
            2 <br>
    <?php
        }
        echo "<br> Loop While i++ <br>";
        $i = 1;
        while ($i <= 10){
            echo $i++."<br>";
        }

        echo "<br> Loop While ++i <br>";
        $i = 1;
        while ($i <= 10){
            echo ++$i."<br>";
        }

        echo "<br> Loop Do-While <br>";
        $i = 1;
        do {
            echo $i++."<br>";
        } while ($i <= 10);

        echo "<br> for <br>";
        for($i = 1; $i <= 10; $i++){
            echo $i."<br>";
        }
    ?>

</body>
</html>