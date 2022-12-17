<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task-php-1-style.css">
</head>
<body>
    <h1>PHP-Task 1</h1>
    <div class="main1">
        <h2>String</h2>
        <div class="string1">
            <form method="post">
                <br>
                String1 <input type="text" name="str1" /><br>          
                String2 <input type="text" name="str2" /><br><br>
                <input type="submit" name="concat" value="Concatenate" /><br>
            </form>
            <?php
                if(array_key_exists('concat', $_POST)) {
                    echo  "<br>" . $_POST['str1'] . " " . $_POST['str2'];
                }
            ?>
        </div>
        <div class="string2">
            <h3>Welcome to PHP course</h3>
            <form method="post">                                
                <input type="submit" name="length" value="Length"/>
                <input type="submit" name="rev" value="Revers"/>
                <input type="submit" name="words" value="Words"/>
                <input type="submit" name="rep" value="Replace"/>
                <input type="submit" name="pos" value="Position"/>
            </form>
            <?php
                $text="Welcome to PHP course";
                if(array_key_exists('length', $_POST)) {
                    getLength();
                }
                else if(array_key_exists('rev', $_POST)) {
                    getRev();
                }
                if(array_key_exists('words', $_POST)) {
                    getWords();
                }
                else if(array_key_exists('rep', $_POST)) {
                    getReplace();
                }
                else if(array_key_exists('pos', $_POST)) {
                    getPos();
                }
                function getLength() {
                    global $text;
                    echo strlen($text);
                }
                function getRev() {
                    global $text;
                    echo strrev($text);
                }
                function getWords() {
                    global $text;
                    echo str_word_count($text);
                }
                function getReplace() {
                    global $text;
                    echo str_replace("Welcome","Hello",$text);
                }
                function getPos() {
                    global $text;
                    echo strpos($text,"PHP");
                }
            ?>
        </div>
        <div class="string3">
            <form method="post">
                <br>
                Degree <input type="text" name="degree" /><br>                          
                <input type="submit" name="grade" value="Grade?" /><br>
            </form>
            <?php
                if(array_key_exists('grade', $_POST)) {
                    $deg= $_POST['degree'];
                    $grd="";
                    if($deg<50 && $deg>=0) {
                        $grd="Failed.";
                    }elseif($deg>=50 && $deg<65){
                        $grd="Good.";
                    }elseif($deg>=65 && $deg<80){
                        $grd="Very Good.";
                    }elseif($deg>=80 && $deg<=100){
                        $grd="Excellent.";
                    }else{
                        $grd="Invalid Degree!";
                    }
                    echo $grd;
                }
            ?>
        </div>            
    </div>
    <div class="main2">
        <div>
            <h2>Loop</h2>
            <h3>Hello World - 10 times</h3>
        </div>
        <div>
            <h4> By While loop:</h4>
            <?php
                $counter=1;
                while($counter<=10){
                    echo "<p>$counter- Hello World.</p>";
                    $counter++;
                }
            ?>
        </div>
        <div>
            <h4> By Do While loop:</h4>
            <?php
                $counter=0;
                do{
                    $counter++;
                    echo "<p>$counter- Hello World.</p>";        
                }while($counter<10);
            ?>
        </div>
        <div>
            <h4> By Do For loop:</h4>
            <?php
                for($i=1;$i<=10;$i++){
                    echo "<p>$i- Hello World.</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>