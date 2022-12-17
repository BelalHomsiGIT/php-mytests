<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>
<body>
    <?php 
        if( $_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['ok']) ){
            echo "<h3>You registered by:</h3>";
            foreach($_SESSION as $k => $v){
                echo $k . " :" . $v . "<br>";
            }
        }else{
            echo "Access denied. <br>";
            echo "You must input your data !";
            header('Refresh:5; url=form.php');
            exit;
            //or: header('Location:form.php');
            //when the user try to go to welcome.php directly by the URL bar
            //it will take him to the form.php directly.
        }
    ?>   
</body>
</html>