<!DOCTYPE HTML>
<html>
<body>

    <?php
    $array1 = array_merge(range('A', 'Z'), range('a', 'z'));
    $array2 = range(0, 9);

    $string = "";
    $stringErr = "";
    $length = "";
    $result1 = $result2 = "";

    if (isset($_POST["submit"])) {
        if (!empty($_POST["length"])) {
            $length = $_POST["length"];
            if (!empty($_POST["character"])) {
                $selected = $_POST['character'];
                switch ($_POST['character']) {
                    case "number":
//                        $string = array_rand($array2, $length);
                        for ($i = 0; $i < $length; $i++) {
                            $string .= $array2[mt_rand(0, 9)];
                        }
                        $result1 = $string;
                        break;
                    case "letter":
                        for ($i = 0; $i < $length; $i++) {
                            $string .= $array1[mt_rand(0, 51)];
                        }
                        $result2 = $string;
                        break;
                    case "number_and_letter":
                        $new_array = array_merge($array1, $array2);
                        for ($i = 0; $i < $length; $i++) {
                            $string .= $new_array[mt_rand(0, 61)];
                        }
                        if (!preg_match('/[^0-9]/', $string)) {
                            $string = "";
                            $stringErr = "String is contained of only integers.";
                        } elseif (!preg_match('/[^A-Za-z]/', $string)) {
                            $string = "";
                            $stringErr = "String is contained of only letters.";
                        }
                        $result1 = preg_replace('/[^0-9]/', '', $string);
                        $result2 = preg_replace('/[^A-Za-z]/', '', $string);
                        break;
                }
            }
        }
    }

    ?>

<div style="width: 10%; height:50%; border:1px solid #000;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="length" value="<?php echo $length ?>" placeholder="length of a string"><br>
        <h3>Include in a string</h3>
        <select name="character">
            <option value="" disabled selected>Choose option</option>
            <option value="number" name="number" >number</option>
            <option value="letter" name="letter" >letter</option>
            <option value="number_and_letter" name="number_and_letter" >number and letter</option>
        </select></br>
        <br><br>
        <input type="submit" value="Generate" name="submit">
    </form>
</div>

    <?php
        echo "<h2>String:</h2>";
        echo $string . "<br>";
        echo "<h2>Extract numbers:</h2>";
        echo $result1 . "<br>";
        echo "<h2>Extract letters:</h2>";
        echo $result2 . "<br>";
        echo "<h2>String Errors:</h2>";
        echo $stringErr;
    ?>

</body>
</html>