<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/start.html"; ?>
<?php include "../db.php" ?>
<!--서브 페이지에만 적용되는 style-->
<link rel="stylesheet" href="../css/connect.css?var=1">
<!--header-->
<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/header.php"; ?>
<?php
  if(isset($_SESSION['userid'])) {
    include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/inc_head.php";
  }
?>

<!--본문 시작-->
<div class="cart-Warp">
    <div class="tit-area">
        <h2>CART</h2>
    </div>
    <div class="order-area">
        <div class="order-left">
            <!--장바구니 비어있을 때-->
            <p>장바구니가 비어 있습니다</p>
        </div>
        <div class="order-right">
            <a href="#" class="all-order-btn">전체상품주문</a>
            <ul class="orderBtns">
                <li><a href="#">선택상품주문</a></li>
                <li><a href="#">쇼핑계속하기</a></li>
            </ul>
        </div>
    </div>
    <div class="order-basket-guide">
        <h3>이용안내</h3>
        <div class="order-guide-area">
            <div class="order-guide order-gu01">
                <h3>장바구니 이용안내</h3>
                <ul>
                    <li>해외배송 상품과 국내배송 상품은 함께 결제하실 수 없으니 장바구니 별로 따로 결제해 주시기 바랍니다.</li>
                    <li>해외배송 가능 상품의 경우 국내배송 장바구니에 담았다가 해외배송 장바구니로 이동하여 결제하실 수 있습니다.</li>
                    <li>선택하신 상품의 수량을 변경하시려면 수량변경 후 [변경] 버튼을 누르시면 됩니다.</li>
                    <li>[쇼핑계속하기] 버튼을 누르시면 쇼핑을 계속 하실 수 있습니다.</li>
                    <li>장바구니와 관심상품을 이용하여 원하시는 상품만 주문하거나 관심상품으로 등록하실 수 있습니다.</li>
                    <li>파일첨부 옵션은 동일상품을 장바구니에 추가할 경우 마지막에 업로드 한 파일로 교체됩니다.</li>
                </ul>
            </div>
            <div class="order-guide order-gu02">
                <h3>무이자할부 이용안내</h3>
                <ul>
                    <li>상품별 무이자할부 혜택을 받으시려면 무이자할부 상품만 선택하여 [주문하기] 버튼을 눌러 주문/결제 하시면 됩니다.</li>
                    <li>[전체 상품 주문] 버튼을 누르시면 장바구니의 구분없이 선택된 모든 상품에 대한 주문/결제가 이루어집니다.</li>
                    <li>단, 전체 상품을 주문/결제하실 경우, 상품별 무이자할부 혜택을 받으실 수 없습니다.</li>
                    <li>무이자할부 상품은 장바구니에서 별도 무이자할부 상품 영역에 표시되어, 무이자할부 상품 기준으로 배송비가 표시됩니다.<br>
                    실제 배송비는 함께 주문하는 상품에 따라 적용되오니 주문서 하단의 배송비 정보를 참고해주시기 바랍니다.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/footer.html"; ?>
