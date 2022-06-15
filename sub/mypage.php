<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/start.html"; ?>
<?php include "../db.php" ?>
<!--서브 페이지에만 적용되는 style-->
<link rel="stylesheet" href="../css/connect.css">
<!--header-->
<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/header.php"; ?>
<?php
  if(isset($_SESSION['userid'])) {
    include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/inc_head.php";
  }
?>

<!--본문 시작-->
<div class="mypage-Warp">
    <div class="tit-area">
        <h2>MY PAGE</h2>
    </div>
    <div class="mypage-area">
        <div class="benefit">
            <div class="benefit-tit"><span>일반회원</span></div>
            <div class="benefit-inner">
                <ul>
                    <li>총적립금<span>0원</span></li>
                    <li>총주문<span>0 KRW(0회)</span></li>
                </ul>
                <ul>
                    <li>가용적립금<span class="">0원</span><button type="button" title="조회">조회</button></li>
                    <li>사용적립금<span>0원</span></li>
                    <li>쿠폰<span>0원</span><button type="button" title="조회">조회</button></li>
                </ul>
            </div>
        </div>
        <div class="orderstate">
            <div class="title">
                <h3>나의 주문처리 현황</h3>
                <span>(최근 <b>3개월</b> 기준)</span>
            </div>
            <div class="state">
                <ul>
                    <li>입금전<a href="#">0</a></li>
                    <li>배송준비중<a href="#">0</a></li>
                    <li>배송중<a href="#">0</a></li>
                    <li>배송완료<a href="#">0</a></li>
                    <li>
                        <ul>
                            <li>취소&ensp;:&ensp;<a href="#">0</a></li>
                            <li>교환&ensp;:&ensp;<a href="#">0</a></li>
                            <li>반품&ensp;:&ensp;<a href="#">0</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="myshopMain">
            <ul>
                <li>
                    <h4><a href="#"><strong>order</strong>주문내역조회</a></h4>
                    <a href="#">
                        고객님께서 주문하신 상품의 주문내역을 확인하실 수 있습니다.<br>
                        비회원의 경우, 주문서의 주문번호와 비밀번호호 주문조회가 가능합니다.
                    </a>
                </li>
                <li>
                    <h4><a href="#"><strong>profile</strong>회원 정보</a></h4>
                    <a href="#">
                        회원이신 고객님의 개인정보를 관리하는 공간입니다.<br>
                        개인정보를 최신 정보로 유지하시면 보다 간편히 쇼핑을 즐기실 수 있습니다. 
                    </a>
                </li>
                <li>
                    <h4><a href="#"><strong>wishlist</strong>관심상품</a></h4>
                    <a href="#">
                        관심상품으로 등록하신 목록을 보여드립니다.
                    </a>
                </li>
                <li>
                    <h4><a href="#"><strong>mieage</strong>적립금</a></h4>
                    <a href="#">
                        적립금은 상품구매 시 사용하실 수 있습니다.<br>
                        적립된 금액은 현금으로 환불되지 않습니다.
                    </a>
                </li>
                <li>
                    <h4><a href="#"><strong>coupon</strong>쿠폰</a></h4>
                    <a href="#">
                        고객님의 보유하고 계신 쿠폰내역을 보여드립니다.
                    </a>
                </li>
                <li>
                    <h4><a href="#"><strong>board</strong>게시물 관리</a></h4>
                    <a href="#">
                        고객님께서 작성하신 게시물을 관리하는 공간입니다.<br>
                        고객님께서 작성하신 글을 한눈에 관리하실 수 있습니다.
                    </a>
                </li>
                <li>
                    <h4><a href="#"><strong>address</strong>배송 주소록 관리</a></h4>
                    <a href="#">
                        자주 사용하는 배송지를 등록하고 관리하실 수 있습니다.
                    </a>
                </li>
                <li>
                    <h4><a href="#"><strong>regular</strong>정기배송 관리</a></h4>
                    <a href="#">
                        정기 배송을 등록하고 관리하실 수 있습니다.
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/footer.html"; ?>