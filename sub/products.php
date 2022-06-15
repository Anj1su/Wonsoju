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
<div class="product-Warp">
    <ul class="prod-list">
        <li>
            <a href="#" class="list-inner">
                <span class="list-img"></span>
                <p class="name">WONSOJU Gift SET</p>
                <p>65,900 원</p>
            </a>
        </li>
    </ul>
    <div class="prod-paging">
        <ul>
            <li><a href="#none" class="first">첫 페이지</a></li>
            <li><a href="#none">이전 페이지</a></li>
            <ol><li><a href="#" class="record-this">1</a></li></ol>
            <li><a href="#none">다음 페이지</a></li>
            <li><a href="#" class="last">마지막 페이지</a></li>
        </ul>
    </div>
</div>


<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/footer.html"; ?>