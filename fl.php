<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Letter</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="nav">
        <ul class="nav-items">
        <li class="nav-item"><a class="nav-link" href="site.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="fl.php">First Letter</a></li>
        </ul>
    </div>

    <form action="" method="get">
        <input type="text" name="fl" placeholder="Enter First Letter">
        Display Index: <input type="checkbox" name="displayIndex" id="">
        <input type="submit">
    </form>

    <div class="out">
    <div class="row">Names</div>
    <?php 
        $names = array("Ali", "Hamza", "Ammarah", "Rabia", "Rafay", "Faizan", "Usman", "Junaid", "Yousuf");
        $fl = $_GET["fl"];

        for ($i = 0; $i < count($names); $i++){
            if (strtolower($names[$i][0]) == strtolower($fl)){
                echo "<div class=\"row\">$names[$i]</div>";
            }
            else if($fl == ""){
                echo "<div class=\"row\">Input string is empty.</div>";
                break;
            }
            else if($fl == "-a"){
                echo "<div class=\"row\">$names[$i]</div>";
            }


        }


    ?>
    </div>

</body>
</html>