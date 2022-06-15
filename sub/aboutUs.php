<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/start.html"; ?>
<?php include "../db.php" ?>
<!--style-->
<link rel="stylesheet" href="../css/about.css?var=1;">
<!--header-->
<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/header.php"; ?>
<?php
  if(isset($_SESSION['userid'])) {
    include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/inc_head.php";
  }
?>

<!--본문 시작-->
<div class="aboutUs-Warp">
    <div class="about-inner">
        <div class="inner-text">
            <h1>FOR THE PAST & TO THE FUTURE</h1>
            <p>
                WONSOJU는 전통 증류식 소주로 새로운 글로벌 스탠다드,<br>
                국가대표 소주가 될 수 있도록 최선을 다하고 있습니다.
            </p>
            <p>
                인공 감미료없이 순수 국내산 쌀로만 만들어진 원소주는<br>
                깔끔하고 부드러운 맛을 내고 있습니다.
            </p>
            <p>
                차례로 선보일 다양한 제조 방법을 통해 전세계에<br>
                한국 전통 소주의 멋과 맛을 알리기 위해 앞장서고자 합니다.
            </p>
        </div>
        <ul class="inner-keyword">
            <li>#미래를WON하여</li>
            <li>#WONSOJU</li>
        </ul>
    </div>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/footer.html"; ?>