<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task-php-1-1-style.css">
</head>
<body>
    <h1>PHP-Task 1</h1>
<?php
//Concatenation
    $str1="I like";
    $str2="PHP Script";
    $strRes=$str1 . " " . $str2;
    echo "<h3>Concatenating Tow Strings :</h3>";
    echo "<p> $str1 + $str2 =  $strRes </p>";
    echo "<hr>";
    //Student grade, by IF
    $degree=73;
    $grade="";
    if($degree<50 && $degree>=0) {
        $grade="Failed.";
    }elseif($degree>=50 && $degree<65){
        $grade="Good.";
    }elseif($degree>=65 && $degree<80){
        $grade="Very Good.";
    }elseif($degree>=80 && $degree<=100){
        $grade="Excellent.";
    }else{
        $grade="Degree is denied.";
    }
    echo "<h3>Grade of Student: :</h3>";
    echo"The DEGREE is $degree, so it's $grade";
    echo "<br><br>";
//Student grade, by SWITCH
    $stuDegree=81;
    $stuGrade="";
    switch($stuDegree){
        case ($stuDegree<50 && $stuDegree>=0):
            $stuGrade="Failed.";
            break;
        case ($stuDegree>=50 && $stuDegree<65):
            $stuGrade="Good.";
            break;
        case ($stuDegree>=65 && $stuDegree<80):
            $stuGrade="Very Good.";
            break;
        case ($stuDegree>=80 && $stuDegree<=100):
            $stuGrade="Excellent.";
            break;
        default:
            $stuGrade="Degree is denied.";
    }
    echo"The DEGREE is $stuDegree, so it's $stuGrade";
    echo "<hr>";
//Manipulating String
    $text="Welcome to PHP course";
    $textlen=strlen($text);
    $textres=strrev($text);
    $textcount=str_word_count($text);
    $textreplace=str_replace("Welcome","Hello",$text);
    $posphp=strpos($text,"PHP");
    echo "<h3>String Manipulating:</h3> <h2>'$text'</h2>";
    echo "<p> Length: $textlen </p>";
    echo "<p> Reversing: $textres </p>";
    echo "<p> Worlds Num: $textcount </p>";
    echo "<p> Replacing: $textreplace </p>";
    echo "<p> PHP Position: $posphp </p>";
    echo "<hr>";
//Loop-10 times
    echo "<h3>Hello World - 10 times:</h3>";
    //while
    echo "<h4> By While loop:</h4>";
    $counter=1;
    while($counter<=10){
        echo "<p>$counter- Hello World.</p>";
        $counter++;
    }
    //do while
    echo "<h4> By Do While loop:</h4>";
    $counter=0;
    do{
        $counter++;
        echo "<p>$counter- Hello World.</p>";        
    }while($counter<10);
    //for
    echo "<h4> By For loop:</h4>";
    for($i=1;$i<=10;$i++){
        echo "<p>$i- Hello World.</p>";
    }
?>
</body>
</html>