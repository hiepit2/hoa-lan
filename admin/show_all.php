<?php
include_once "../class/class.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>QUẢN LÝ TRANG WEB</h2>
    <li>
        <a href="../admin/index.php">Trang chủ</a>
        <a href="../admin/show_lh.php">Loại hàng</a>
        <a href="../admin/show_sp.php">Hàng hóa</a>
        <a href="../admin/show_kh.php">Khách hàng</a>
        <a href="../admin/show_bl.php">Bình luận</a>
        <a href="">Thống kê</a>
    </li>
</body>
<style>
    body {
        width: 80%;
        margin: auto;
    }

    h2 {
        text-align: center;
        background-color: greenyellow;
        padding: 20px 0px;
        font-size: 30px;
        border-radius: 10px;
    }

    a {
        text-decoration: none;
        padding-left: 20px;
        color: black;
    }

    li {
        list-style-type: none;
        background-color: rgba(6, 85, 23, 0.425);
        padding: 20px 0px;
        font-size: 25px;
        padding-left: 20px;
        border-radius: 10px;
    }
</style>

</html>
