<?php
    session_start();
    include 'dbconfig.php';
    echo '<h2> Hello to dbtest 1</h3>';
    echo '<hr>';
    echo '<hr>';
    //
    $qry1 = $connect -> prepare('select * from dept');
    $qry1 -> execute();
    $data1 = $qry1 -> fetchAll();
    foreach ($data1 as $row) {
        echo '<p>' . $row['deptnum'];
        echo '<p>' . $row['name'];
        echo '<p>' . $row['location'];
        echo '<hr>';
    }
    //
    echo '<hr>';
    $qry2 = $connect -> prepare('select * from dept');
    $qry2 -> execute();
    $data2 = $qry2 -> fetch();//row 1
    echo '<p>' . $data2['deptnum'];
    echo '<p>' . $data2['name'];
    echo '<p>' . $data2['location'];
    echo '<hr>';

    $data2 = $qry2 -> fetch();//row 2
    echo '<p>' . $data2['deptnum'];
    echo '<p>' . $data2['name'];
    echo '<p>' . $data2['location'];
    echo '<hr>';

    $data2 = $qry2 -> fetch();//row 3

    $data2 = $qry2 -> fetch();//row 4
    echo '<p>' . $data2['deptnum'];
    echo '<p>' . $data2['name'];
    echo '<p>' . $data2['location'];
    echo '<hr>';
    //
    echo '<hr>';
    //$qry2 = $connect -> prepare('select * from dept');
    $qry2 -> execute();
    while ($newrow = $qry2 -> fetch(PDO::FETCH_ASSOC)){
        $res [] = $newrow;
    }
    print_r($res);
    echo '<br>';
    //
    $i=0;
    while($i<count($res)){
        echo '<p>' . $res[$i]['deptnum'];
        echo '<p>' . $res[$i]['name'];
        echo '<p>' . $res[$i]['location'];
        echo '<hr>';
        $i++;
    }
    echo '<hr>';
    //
    //
    $qry3 = $connect -> prepare('select * from dept');
    $qry3 -> execute();
    while ($newrow = $qry3 -> fetch(PDO::FETCH_ASSOC)){                
        echo '<p>' . $newrow['deptnum'];
        echo '<p>' . $newrow['name'];
        echo '<p>' . $newrow['location'];
        echo '<hr>';
    }
    echo '<hr>';
    echo '<br>';
    //
    //
    $qry3 -> execute();
    $resCount = $qry3->rowCount();
    echo $resCount . ' Rows';
    for($i=0;$i<=$resCount;$i++){
        $data3 = $qry3 -> fetch();
        echo '<p>' . $data3['deptnum'];
    }
    echo '<hr>';
    echo '<hr>';
    //
    //
    $qry4 = $connect -> prepare('select * from dept where deptnum = 3');
    $qry4 -> execute();
    //echo $qry4 -> rowCount();
    if($qry4 -> rowCount() > 0){
        $data4 = $qry4 -> fetch();
        echo '<p>' . $data4['name'];
    }else{
        echo '<p> No data matching. </p>';
    }
    echo '<hr><hr>';
    //
    $qry5 = $connect -> prepare('select * from dept where deptnum = 3001');
    $qry5 -> execute();
    if($qry5 -> rowCount() > 0){
        $data5 = $qry5 -> fetch();
        echo '<p>' . $data5['name'];
    }else{
        echo '<p> No data matching. </p>';
    }
    echo '<hr><hr>';
    //
    $depnumVar=4001;
    $qry6 = $connect -> prepare('select * from dept where deptnum = ?');
    $qry6 -> execute(array($depnumVar));
    if($qry6 -> rowCount() > 0){
        $data6 = $qry6 -> fetch();
        echo '<p>' . $data6['name'];
    }else{
        echo '<p> No data matching. </p>';
    }
    echo '<hr><hr>';
    //
    $depnumVar1='';
    //type in URL: https://localhost/mytests/connect-1/data.php?num=1001 or 2001,5001
    if($_GET['num']){
        $depnumVar1 = $_GET['num'];
    }
    $qry6 = $connect -> prepare('select * from dept where deptnum = ?');
    $qry6 -> execute(array($depnumVar1));
    if($qry6 -> rowCount() > 0){
        $data6 = $qry6 -> fetch();
        echo '<p>' . $data6['name'];
    }else{
        echo '<p> No data matching. </p>';
    }
    echo '<hr><hr>';
    //
    //
    $depnumVar2='';
    if(isset($_GET['num']) && !empty($_GET['num'])){
        $depnumVar2 = $_GET['num'];
    }
    $qry7 = $connect -> prepare('select * from dept where deptnum = ?');
    $qry7 -> execute(array($depnumVar2));
    if($qry7 -> rowCount() > 0){
        $data7 = $qry7 -> fetch();
        echo '<p>' . $data7['name'];
    }else{
        echo '<p> No data matching. </p>';
    }
    echo "<a href='data.php?num=1001'>Dept 1001 </a>";
    echo '<hr><hr>';
?>  