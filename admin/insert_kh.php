<?php include_once "../class/class.php";
?>

<?php
$user = new user_class();
if (isset($_POST['uploadclick'])) {
    $insert_user = $user->insert_khachhang($_POST['hinh'], $_POST['ten_kh'], $_POST['email'],$_POST['mat_khau'] );
    echo $insert_user;
    header("location:index.php");
}
?>
<link rel="stylesheet" href="../admin/dkydnhap.css">
<!-- <form action="insert_kh.php" method="post">
    <label for="">Ảnh</label> <br>
    <input type="file" name="hinh"><br>
    <label for="">Tên </label> <br>
    <input type="text" name="ten_kh"> <br>
    <label for="">Mật khẩu</label> <br>
    <input type="text" name="mat_khau"> <br>
    <label for="">Email</label> <br>
    <input type="text" name="email"> <br>
    <button type="submit" name="uploadclick">Đăng ký</button>
</form> -->

<body>
    <form action="insert_kh.php" method="post">
        <div class="madal">
            <div class="madal_overlay"></div>

            <div class="madal_body">
                <div class="madal_inner">

                    <div class="auth-form">
                        <div class="auth-form_header">
                            <h1>Đăng ký</h1>
                        </div>

                        <div class="auth-form_form">
                            <div class="auth-form_group">
                                <label for="">Ảnh đại diện</label><br>
                                <input type="file" name="hinh"><br>
                            </div>

                            <div class="auth-form_group">
                                <label for="">Tên khách hàng</label><br>
                                <input type="text" name="ten_kh"> <br>
                            </div>

                            <div class="auth-form_group">
                                <label for="">Email</label><br>
                                <input type="text" name="email"> <br>
                            </div>

                            <div class="auth-form_group">
                                <label for="">Mật khẩu</label><br>
                                <input type="text" name="mat_khau"> <br>
                            </div>

                            <div class="auth-form_asaide">
                                <p class="auth-form_policy-text">
                                    Bằng việc đăng ký, bạn đã đồng ý về<br>
                                    <a href="auth-form_policy-link">Điều khoảng dịch vụ</a>&
                                    <a href="auth-form_policy-link">Chính sách bảo mật</a>
                                </p>
                            </div>

                            <div class="auth-form_contrals">
                                <button class="btn"><a href="">TRỞ LẠI</a></button>
                                <button class="btn btn--primary" type="submit" name="uploadclick"><a href="">ĐĂNG KÝ</a></button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>