<?php
$num = rand(1,100);
session_start();
if (!isset($_SESSION["guess-target"])) {
    $_SESSION["guess-target"] = $num;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

echo"session";
echo"<br>";
echo"value: ";
echo $_SESSION["guess-target"]; 
    if (isset($_POST["guess"])) {
        if ($_POST["guess"] == $_SESSION["guess-target"]) {
            $num = rand(1,100);
            echo"<br>";
            echo"correct";
            $_SESSION["guess-target"] = $num;
        }
        elseif ($_POST["guess"] >= $_SESSION["guess-target"]){
            echo"<br>";
            echo"lower";
        }
        elseif ($_POST["guess"] <= $_SESSION["guess-target"]) {
            echo"<br>";
            echo"higher";
        };
    };

?>
<form name="guess" method="POST">
     <input type="text" id="guess" name="guess"><br><br>
     <input type="submit" value="Submit">
</form>
</body>
</html>