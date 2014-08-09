<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" />
    <title>스터디중 ㅋㅋ</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet"/>
    <script src="/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/index.js"></script>
</head>
<body>
<div class="login-body">
    <div class="login-box">
        <form method="post" name="login-form" action="login.php">
            <div class="header">
                <h2 class="heading">로그인해라</h2>
            </div>
            <div class="body">
                <div class="id">
                    <input class="form-control" type="text" name="id" value="" placeholder="아이디 입력하세요"/>
                </div>
                <div class="password">
                    <input class="form-control" type="password" name="password" value="" placeholder="패스워드를 입력하세요"/>
                </div>
            </div>
            <div class="footer">
                <button type="button" id="login-btn" class="btn btn-info">로그인</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" onclick="" class="btn btn-danger">회원가입</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>