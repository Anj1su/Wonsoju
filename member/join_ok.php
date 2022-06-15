<?php 
    include "../db.php";
    include "../password.php";

    $userid = $_POST['userid'];
    $userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
    $username = $_POST['name'];
    $adress = $_POST['adress'];
    $usertel = $_POST['phone'];
    $email = $_POST['email'].'@'.$_POST['emadress'];
    setcookie($cookieName,$userid, time()+60, "/");
    
    $sql = mq("insert into member (id,pw,name,adress,phone,email) values('".$userid."','".$userpw."','".$username."','".$adress."','".$usertel."','".$email."')");

    if ($userid == "" || $userpw == "" || $username == "" || $adress == "" || $usertel == "" || $email == "") {
        echo '<script>alert("비어있는 항목이 있습니다.");</script>';
        echo '<script>history.back();</script>';
     }
     else {
        echo '<script>alert("회원 가입이 완료되었습니다.");</script>';
        echo "<script>location.replace('/wonsoju/index.php');</script>";
     }
?>
<meta charset="utf-8" />