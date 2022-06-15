<?php
  if(isset($_SESSION['userid'])) {
    $jb_login = TRUE;
  }
?>

<!--로그인후 메인 페이지에만 적용되는 style & script-->
<link rel="stylesheet" href="../css/login_common.css">
<script src="../script/script.js"></script>
<script src="../script/common.js"></script>
<!--header-->

</head>
<body>
    <header>
        <div id="header_top">
            <div class="lang">
                <a href="#">KR</a>
                <a href="#">EN</a>
            </div>
            <div class="logo-area">
                <a href="/wonsoju/index.php"><span class="logo">상단로고</span></a>
            </div>
            <ul class="topIcon">
                <li>
                    <?php
                    if($jb_login){
                        echo "<p><b>{$_SESSION['userid']}</b> 님 환영합니다.</p>";
                    ?>
                     <?php
                    } else {}
                    ?>
                </li>
                <li><a href="/wonsoju/sub/mypage.php" class="top-myPage">마이페이지</a></li>
                <li><a href="/wonsoju/sub/cart.php" class="top-shoppingPage">장바구니로 가기</a></li>
            </ul>
        </div>
        <nav>
            <ul class="mainMenu">
                <li><a href="/wonsoju/index.php">HOME</a></li>
                <li><a href="/wonsoju/sub/aboutUs.php">ABOUT US</a></li>
                <li><a href="/wonsoju/sub/brand.php">BRAND</a></li>
                <li><a href="/wonsoju/sub/products.php">PRODUCTS</a></li>
                <li><a href="/wonsoju/sub/mypage.php">MYPAGE</a></li>
                <li><a href="/wonsoju/sub/logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
