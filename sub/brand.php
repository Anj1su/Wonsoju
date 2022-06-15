<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/start.html"; ?>
<?php include "../db.php" ?>
<!--style-->
<link rel="stylesheet" href="../css/about.css">
<!--header-->
<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/header.php"; ?>
<?php
  if(isset($_SESSION['userid'])) {
    include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/inc_head.php";
  }
?>

<!--본문 시작-->
<div class="brand-Warp">
  <img src="../img/brand.jpg" alt="wonsoju brand keyword-one,won,want" style="width: 100%;">
  <p>
    원소주는 대한민국 화폐 단위인 '원'과 동전을 메인 모티브로 하였고, 태극기의 건곤감리를
    원 안에 배치하여 대한민국 대표 소주가 되고자하는 염원을 담았습니다.
    과거를 격려하고 미래를 응원하는 소주로 자리매김하길 바라고 있습니다.
  </p>
  <h3>FOR THE PAST&TO THE FUTURE</h3>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/footer.html"; ?>