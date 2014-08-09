<?php

//echo "아이디" . $_POST['id'];
//echo "패스워드" . $_POST['password'];

if($_POST['id'] =="asdf") {
    $value['code']  = "200";
    $value['msg'] = "환영합니다";
} else {
    $value['code'] = "500";
    $value['msg'] = "패스워가 틀렸습니다.";
}

echo json_encode($value);

?>
