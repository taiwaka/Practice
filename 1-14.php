<?php
    define("HOZON", "hozon.html");
    date_default_timezone_set("Asia/Tokyo");
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $text = $_POST["aaaa"] . "\t" . date("m月d日H時i分s秒") . "\n";
        file_put_contents(HOZON, $text, FILE_APPEND);

        header("Location: 1-14.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
    <form  action="" method="post">
        <input type="text" name="aaaa">
    </form>
投稿一覧：<?php 
            $filename="hozon.html";
            $open = fopen($filename,"r");
            while(!feof($open)){
                $txt = fgets($open);
                echo nl2br(htmlspecialchars($txt));
            }
        ?>
</body>
</html>