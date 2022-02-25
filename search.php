<?php
    if(trim($_POST['search'])==''){
        echo "<script>alert('无法搜索空');history.go(-1);</script>";
        exit;
    }
    $search = $_POST['search'];
    // $sql_li = "SELECT * FROM wordli WHERE title LIKE '%$search%' OR author LIKE '%$search%' OR descript LIKE '%$search%' OR content LIKE '%$search%'";
    // $sth = $pdo->prepare($sql_li);
    // $sth->execute();
    // $b = $sth->fetchAll();
    // foreach($b as $bb => $b_v){
    //     echo $b_v[2];
    // };
    // var_dump($b)
    header("location:admin.php?result=$search");
?>