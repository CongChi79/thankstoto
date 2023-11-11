<?php

include "db.php";

//각 변수에 write.php에서 input name값들을 저장한다
$group_id = mysqli_real_escape_string($db,$_POST['group_id']);
$title = mysqli_real_escape_string($db,$_POST['title']);

if($group_id && $title){
    $sql = "select * from mng_res_time where group_id = '$group_id' and title = '$title'";
    $result = query($sql);
    if(mysqli_num_rows($result) <= 0){
        $response = array('success' => false);
        echo json_encode($response);
    }else{
        $response = array('success' => true);
        echo json_encode($response);
    }
}else{
    echo "<script>
    console.log('제목을 입력하세요');
    </script>";
}
?>