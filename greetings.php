<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 

$your_opinion = $_GET["your_opinion"];
$bad_word = $_GET["bad_word"];

    echo  $your_opinion . "<br>";
    echo strlen($your_opinion) . "<br>";
    echo $bad_word . "<br>"; 
    echo $bad_word = str_replace($bad_word, "***", $bad_word);

var_dump($_GET);
?>