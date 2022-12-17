<?php
    session_start();
    include 'dbconfig.php';
    echo '<h2> Hello to dbtest 2</h3>';
    echo '<hr>';
    echo '<hr>';
    //
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'All';
    }
    //
    if($action == 'All'){
        $qry1 = $connect -> prepare('select * from dept');
        $qry1 -> execute();
        $resNumber = $qry1 -> rowCount();
        if($resNumber>0){
            echo 'There is ' . $resNumber . ' Rows:<br>';
            $data1 = $qry1 -> fetchAll();
            foreach ($data1 as $row) {
                echo '<p>' . $row['deptnum'] .'</p>';
                echo '<p>' . $row['name'] .'</p>';
                echo '<p>' . $row['location'] .'</p>';
                echo '<br>';
                echo "<a href='data.php?action=single&id=" . $row['deptnum'] . 
                     "'>Show " . $row['deptnum'] ."</a><br>";
                echo "<a href='data.php?action=delete&id=" . $row['deptnum'] .
                     "'>Delete" . $row['deptnum'] . "</a>";
                echo '<hr>';
                }
            }else{
                echo 'No Data matched.';
            }        

    }elseif($action == 'single'){
        if(isset($_GET['id']) && !empty($_GET['id'])){            
            $qry2 = $connect -> prepare('select * from dept where deptnum=?');
            $qry2 -> execute(array($_GET['id']));
            $data2 = $qry2 -> fetch();
            echo '<h2> Department Informations</h2>';
            echo '<p>Dept Number: ' . $data2['deptnum'];
            echo '<p>Dept Name: ' . $data2['name'];
            echo '<p>Dept Location: ' . $data2['location'];
            echo '<br><br>';
            echo "<a href='data.php?action=delete&id=" . $data2['deptnum'] .
                 "'>Delete" . $data2['deptnum'] . "</a><br>";
            echo '<br>';            
        }else{
            echo 'oops: no data !';            
        }
        echo "<a href='data.php?action=All'>Show All </a>";
    }elseif($action == 'delete') {
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $deleted = $_GET['id'];
            $qry3 = $connect -> prepare('delete from dept where deptnum = ?');
            $qry3 -> execute(array($_GET['id']));
            echo $deleted . ' is deleted.';
            //header("Location:data.php");
            header("refresh: 3; url='data.php'");
            exit();
        }
        
    }

    
    
    
?>  