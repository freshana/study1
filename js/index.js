$(function() {
    $("#login-btn").click(function() {
        var id = $("[name=id]").val();
        var password = $("[name=password]").val();

        if(id.length == 0) {
            alert("아이디를 입력하시오");
            $("[name=id]").focus();
            return;
        }

        if(password.length == 0) {
            alert("패스워드를 입력하세요.");
            $("[name=password]").focus();
            return;
        }

        //$("[name=login-form]").submit();
        $.ajax({
            url: "/login.php",
            type: "POST",
            data: {
                id: id,
                password: password
            },
            dataType: "json",
            error: function() {
                alert("로그인 실패");
            },
            success: function(json) {
                if(json.code == 200) {
                    alert(json.msg);
                    location.href = "/hsm.php"
                }else {
                    alert(json.msg);
                }
            }

        });
    });
});

