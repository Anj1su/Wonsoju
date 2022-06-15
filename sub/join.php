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
<div class="join-Warp">
    <h1>JOIN</h1>
    <form method="post" action="../member/join_ok.php" class="join-form">
        <div class="certify">
            <div class="certify-tit"><p>회원인증</p></div>
            <div class="certify-email">
                <label><input type="radio" value="value" checked="checked" onclick="return false">이메일인증</label>
                <p>기본정보 > 이메일 항목에 입력하신 정보로 본인인증을 진행합니다.</p>
                <p>회원가입 후에 입력하신 이메일 주소로 인증메일이 발송되오니, 확인해 주시기 바랍니다.
            </div>
        </div>
        <fieldset>
            <legend>입력사항</legend>
            <ul>
                <li>
                    <label title="아이디">아이디</label>
                    <input type="text" name="userid" require>
                    <span>(영문소문자/숫자, 4~16자)</span>
                    <label title="비밀번호">비밀번호</label>
                    <input type="password" name="userpw" require>
                    <span>(영문 대소문자/숫자/특수문자 중 3가지 이상 조합)</span>
                    <label title="주소">주소</label>
                    <input type="text" name="adress" require>
                </li>
                <li>
                    <label title="이름">이름</label>
                    <input type="text" name="name" require>
                    <label title="핸드폰 번호">휴대전화</label>
                    <input type="tel" name="phone">
                    <label title="이메일">이메일</label>
                        <input type="email" name="email"> @
                        <select name="emadress" require>
                            <option value="naver.com">naver.com</option>
                            <option value="gmail.com">gmail.com</option>
                            <option value="hanmail.com">.com</option>
                        </select>
                </li>
            </ul>
            <div class="terms-of-use">
                <label for="check_all">
                    <input type="checkbox" id="check_all">이용약관 및 개인정보수집 및 이용에 모두 동의합니다.
                </label>
                <label for="check_01">
                    <input type="checkbox" id="check_01" class="check" name="making" value="yes">[필수] 이용약관동의
                    <span>자세히보기</span>
                </label>
                <label for="check_02">
                    <input type="checkbox" id="check_02" class="check" name="making" value="yes">[필수] 개인정보 수집 및 이용동의
                    <span>자세히보기</span>
                </label>
            </div>
            <div class="hoinBtn-area">
                <input type="submit" class="joinBtn" value="JOIN US">
            </div>
        </fieldset>
    </form>
</div>
<script>
    // 체크박스 전체 선택
    $("#check_all").click(function () {
    const checked = $(this).is(":checked");

    if(checked){
        $(this).parents(".terms-of-use").find('input').prop("checked", true);
    } else {
        $(this).parents(".terms-of-use").find('input').prop("checked", false);
    }
    });
</script>

<?php include $_SERVER["DOCUMENT_ROOT"]."/wonsoju/inc/footer.html"; ?>