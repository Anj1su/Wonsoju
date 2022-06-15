<?php include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/start.html"; ?>
<?php include "./db.php" ?>

<!--메인 페이지에만 적용되는 style-->
<link rel="stylesheet" href="./css/style.css?var=1">
<script src="./script/script.js?var=1"></script>

<!--header-->
<?php include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/header.php"; ?>
<?php
  if(isset($_SESSION['userid'])) {
    include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/inc_head.php";
  }
?>

<div class="toCon-Warp">
    <button type="button" class="toTopCon">상단으로</button>
    <button type="button" class="toBotCon">하단으로</button>
</div>

<!--메인화면 시작-->
<main>
    <!--메인 슬라이드-->
    <div class="mainSlide">
        <div class="slide-area">
            <ul class="slide-list">
                <li class="slide-cont slide-cont01">
                    <a href="#">
                        <img src="./img/imgSlide01.png" alt="원소주 슬라이드 이미지01">
                    </a>
                </li>
                <li class="slide-cont">
                    <a href="#">
                        <img src="./img/imgSlide02.png" alt="원소주 슬라이드 이미지02">
                    </a>
                </li>
                <li class="slide-cont">
                    <a href="#">
                        <img src="./img/imgSlide03.png" alt="원소주 슬라이드 이미지03">
                    </a>
                </li>
            </ul>
            <ul class="slide-btn-area">
                <li>
                    <button class="slide-btn">slide1</button>
                    <button class="slide-btn">slide2</button>
                    <button class="slide-btn">slide3</button>
                </li>
            </ul>
            <div class="slide-btn-arrow">
                <button type="button" class="btn prev">이전슬라이드</button>
                <button type="button" class="btn next">다음슬라이드</button>
            </div>
        </div>
    </div>
    <!--메인 컨텐츠-->
    <!--contents01-->
    <section class="contents01">
        <div class="contents01-left">
            <h3 class="small-tit">375ML / 22% VOL</h3>
            <h2 class="big-tit">WON SOJU</h2>
            <div class="product-dis">
                <p>
                    원소주의 첫번째 작품인 <strong>WON ORIGINAL</strong>은<br>
                    전통주의 풍미를 즐기면서, 또한 남녀노소, 국내외의<br>
                    모든 고객들이 쉽게 접할 수 있도록 부드러움을 갖춘<br>
                    작품입니다.
                </p>
            </div>
            <div class="product-form">
                <div class="form-left">
                    <h1>FORMAT</h1>
                    <div class="toCart">
                        <button type="submit" class="toCart-btn toCart-ml on">375ML</button>
                        <button type="submit" class="toCart-btn toCart-set">Gift SET</button>
                        <div class="toCart-set-text">
                            원소주 기프트세트 출시<span>Sold out</span>
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <h1>QUANTITY</h1>
                    <div class="quantity-content">
                        <form class="quantity-form">
                            <input name="price" type="hidden" class="price" value="14900">
                            <input type="button" value="+" name="add" class="add">
                            <input type="text" class="number" value="1" maxlength="2">
                            <input type="button" value="-" name="minus" class="minus">
                        </form>
                    </div>
                </div>
            </div>
            <div class="product-cart">
                <p>￦</p>
                <input name="cost" class="cost" value="14900">
                <button class="add-to-btn">ADD TO CART</button>
            </div>
        </div>
        <div class="contents01-right">
            <div class="circle-area">
                <div id="circle1"></div>
                <div id="circle2"></div>
            </div>
        </div>
    </section>
    <!--contents02-->
    <section class="contents02">
        <div class="contents02-area">
            <div class="contents02-left">
                <div class="cont02-left-in">
                    <h3 class="small-tit">WON ORIGINAL</h3>
                    <h2 class="big-tit">Our Process</h2>
                    <ul class="process-keyword">
                        <li>#한국 소주</li>
                        <li>#전통증류식 소주</li>
                        <li>#WONSOJU</li>
                    </ul>
                    <div class="prorcess-in">
                        <p>
                            인공 감미료 없이 순수 국내산 쌀로만 만들어진<br>
                            원소주는 깔끔하고 부드러운 맛을 내고 있습니다.
                        </p>
                    </div>
                </div>
            </div>
            <div class="contents02-right">
                <ul class="process-compo">
                    <li class="process-step step01">
                        <div class="stepIcon"></div>
                        <div class="step-text">
                            <h3>STEP 01</h3>
                            <p>원소주는 국내산 쌀 100%로 만들어졌습니다.</p>
                        </div>
                    </li>
                    <li class="process-step step02">
                        <div class="stepIcon"></div>
                        <div class="step-text">
                            <h3>STEP 02</h3>
                            <p>2주 간의 옹기 숙성을 통해 더욱 부드러운<br>소주 맛을 느낄 수 있습니다.</p>
                        </div>
                    </li>
                    <li class="process-step step03">
                        <div class="stepIcon"></div>
                        <div class="step-text">
                            <h3>STEP 03</h3>
                            <p>감압증류 방식을 사용하여 부드럽고 깔끔한 맛을 냈습니다.</p>
                        </div>
                    </li>
                    <li class="process-step step04">
                        <div class="stepIcon"></div>
                        <div class="step-text">
                            <h3>STEP 04</h3>
                            <p>
                                감압, 상압의 증류 방식의 차이에서 오는 매력, 숙성의 정도에 따른 맛의 변화까지
                                원소주는 전통주의 가진 모든 매력을 최대한 전할 수 있게 촤선을 다할 예정입니다.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div id="soju">
        <article>
            <img src="./img/img1/ren1.png" alt="소주 3D">
        </article>
    </div>
    <!--contents03-->
    <section class="contents03">
        <div class="search-area">
            <div class="search-text">
                <h3 class="small-tit"></h3>
                <h2 class="big-tit">Our Process</h2>
                <p>
                    모든 cs는 홈페이지 내 채널톡을 통해 접수 바랍니다.<br>
                    그 외 채널을 통한 문의는 접수가 불가능합니다.
                </p>
            </div>
            <div class="search-form-area">
                <form class="search-form">
                    <input class="search" type="input" required placeholder="무엇을 찾아드릴까요?">
                    <button class="searchCon"></button>
                </form>
                <div class="find-store">
                    <a href="#">입점매장 바로가기</a>
                </div>
            </div>
        </div>
    </section>

    <!--메인 페이지에만 적용되는 js-->
    <script src="./script/slide.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/wonsoju/inc/footer.html"; ?>