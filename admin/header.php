<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
    <header>

        <div class="header-left">
            <img src="../admin/img/ll.jpg" alt="">
        </div>
        <div class="header-center">
            <h3>HOA LAN LÊ ANH</h3>
        </div>
        <div class="header-right">
            <a href="../admin/insert_kh.php">Đăng ký</a> |
            <?php if (!isset($_SESSION['user'])) :  ?>
                <a href="../admin/formdn.php">Đăng nhập</a>
            <?php else : ?>
                <a href="../admin/formdx.php">Đăng xuất</a> |
                <a href="thong_tin.php">Thông tin tài khoản</a>
                <?php if ($_SESSION['user']['vai_tro'] == 1) :  ?>
                    |<a href="../admin/show_all.php">Quản trị</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>

    </header>
</body>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        width: 1200px;
    }

    header {
        width: 80%;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 3fr 1fr;
        margin-bottom: 50px;
    }

    .header-left>img {
        width: 70%;
    }

    .header-center {
        text-align: center;
        margin-top: 25px;
        font-size: 40px;
    }

    .header-center h3 {
        font-size: 35px;
    }

    .header-right {
        margin-top: 35px;
        font-size: 20px;
        text-align: right;
    }

    .header-right a {
        text-decoration: none;
        color: black;
    }
</style>

</html>