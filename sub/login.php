<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/start.html"; ?>
<?php include "../db.php" ?>

<!--서브 페이지에만 적용되는 style-->
<link rel="stylesheet" href="../css/connect.css?var=1">
<!--header-->
<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/header.php"; ?>

<!--본문 시작-->
<div class="login-Warp">
    <h1>로그인</h1>
    <form method="post" action="../member/login_ok.php">
        <fieldset>
            <legend>로그인</legend>
            <label class="id" title="아이디">
                <input type="text" name="userid" placeholder="아이디" class="inph">
            </label>
            <label class="password" title="비밀번호">
                <input type="password" name="userpw" placeholder="비밀번호" class="inph">
            </label>
            <button type="submit" class="loginBtn" value="로그인">로그인</button>
        </fieldset>
    </form>
    <div class="kakao-login">
        <span>SNS계정으로 로그인</span>
        <a href="#">카카오 계정으로 로그인하기</a>
    </div>
    <ul class="login-others">
        <li><a href="#">아이디찾기</a></li>
        <li><a href="#">비밀번호찾기</a></li>
        <li><a href="./join.php">회원가입</a></li>
    </ul>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/footer.html"; ?>