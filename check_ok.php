<?php

include "db.php";

//각 변수에 input name값들을 저장한다
$group_id = 1; //$_POST['group_id'];
$child_name = mysqli_real_escape_string($db, $_POST['child_name']);
$parent_name = mysqli_real_escape_string($db, $_POST['parent_name']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$buy_place1 = mysqli_real_escape_string($db, $_POST['buy_place1']);
$buy_place2 = mysqli_real_escape_string($db, $_POST['buy_place2']);
$buy_place3 = mysqli_real_escape_string($db, $_POST['buy_place3']);
$title = mysqli_real_escape_string($db, $_POST['title']);
$res_day = mysqli_real_escape_string($db, $_POST['res_day']);
$allergy = mysqli_real_escape_string($db, $_POST['allergy']);
$birthday1 = mysqli_real_escape_string($db, $_POST['birthday1']);
$birthday2 = mysqli_real_escape_string($db, $_POST['birthday2']);
$birthday3 = mysqli_real_escape_string($db, $_POST['birthday3']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$visit_route1 = mysqli_real_escape_string($db, $_POST['visit_route1']);
$visit_route2 = mysqli_real_escape_string($db, $_POST['visit_route2']);
$personal_info = mysqli_real_escape_string($db, $_POST['personal_info']);

$birthday = $birthday1.'-'.$birthday2.'-'.$birthday3;
$visit_route = '추천인: '.$visit_route1.' 온라인: '.$visit_route2;

if($buy_place1 === "" && $buy_place2 === ""){
  $buy_place = $buy_place3;
}else if($buy_place1 === "" && $buy_place3 === ""){
  $buy_place = $buy_place2;
}else if($buy_place2 === "" && $buy_place3 === ""){
  $buy_place = $buy_place1;
}else{
  $buy_place =  strval($buy_place1).strval($buy_place2).strval($buy_place3);
}



if ($group_id && $child_name && $parent_name && $phone && $email && $buy_place && $title && $res_day && $birthday && $address && $visit_route && $personal_info) {

  $sql = "INSERT INTO check_in(group_id,child_name,parent_name,phone,email,buy_place,title,res_day,allergy,birthday,address,visit_route,personal_info)
  values('$group_id','$child_name','$parent_name','$phone','$email','$buy_place','$title','$res_day','$allergy','$birthday','$address','$visit_route','$personal_info');"; 
  $result = query($sql);

  echo "<script>
      alert('check_in이 완료되었습니다.');
      location.href='/thanks_toto/index.html';</script>";

} else {
  echo "<script>
    console.log('$group_id && $child_name && $parent_name && $phone && $email && $buy_place && $title && $res_day && $birthday && $address && $visit_route && $personal_info')
    alert('check_in에 실패했습니다.');
    history.back();</script>";
}
?>