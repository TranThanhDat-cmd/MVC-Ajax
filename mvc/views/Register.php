<form action="/shopMVC/Register/processRegister" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input id="userName" name="userName" type="email" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        <div id="result" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" name="btnRegister" class="btn btn-primary">Submit</button>
</form>
<script src="./public/js/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("#userName").keyup(function() {
        $.post("/shopMVC/Register/checkUser", {
            userName: $("#userName").val()
        }, function(data) {
            if (data == 0) {
                $("#result").html("Tên Tài Khoản Hợp Lệ");
            } else {
                $("#result").html("Tên Tài Khoản Đã Tồn TẠi");
            }
        });
    });
});
</script>

<?php
if (isset($data["Result"])) {
    if ($data["Result"]) {
        echo "Dang ky thanh cong";
    } else {
        echo "Dang ky THAT BAI";
    }
}
?>