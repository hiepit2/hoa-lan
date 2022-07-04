<?php

require_once "../admin/header.php"; ?>
<?php

include_once "../class/class.php";
$usermodel = new user_class();
if (isset($_GET['ma_hh'])) :
    $ma_hh = $_GET['ma_hh'];
    $hanghoa = $usermodel->select_hanghoa($ma_hh);
    $updatelx = $usermodel->update_luotxem($ma_hh);
    // echo "<pre>";
    //     print_r($hanghoa);
    //     echo "</pre>";
?>
    <main>
        <div class="container-left">
            <div class="container-cart">
                <div class="image-left">
                    <img src="img/<?php echo $hanghoa['hinh']; ?>" alt="">
                </div>
                <div class="menu">
                    <div class="name-sp">
                        <h3><?php echo $hanghoa['ten_hh'] ?></h3>
                    </div>
                    <div class="image_price">

                        <?php if ($hanghoa['gian_gia'] != 0) { ?>
                            <p style="text-decoration-line:line-through ;"> <?php echo $hanghoa['don_gia'] . "đ"; ?></p>
                            <span> <?php echo $hanghoa['gian_gia'] . "đ"; ?></span>
                        <?php } else { ?>
                            <span><?php echo $hanghoa['don_gia'] . "đ"; ?></span>
                        <?php } ?>
                    </div>
                    <div class="cart">
                        <a href="muahang.php?ma_hh=<?php echo $hanghoa['ma_hh']; ?>">Mua</a>
                    </div>

                </div>

            </div>
            <div class="container-new">
                <p><?php echo $hanghoa['mo_ta'] ?></p>
            </div>
        </div>

        <div class="container-right">
            <h2>Sản phẩm ưu thích</h2>
            <div class="row">
                <?php
                $hanghoaslx = $usermodel->show_hanghoaslx();
                foreach ($hanghoaslx as $row) {
                ?>

                    <div class="image">
                        <div class="image_img">
                            <a href="../admin/chitiet.php?ma_hh=<?php echo $row['ma_hh']; ?>"><img src="img/<?php echo $row['hinh']; ?>" alt=""></a>
                        </div>
                        <div class="image-menu">
                            <div class="image_name">
                                <p><?php echo $row['ten_hh'] ?> </p>
                            </div>
                            <div class="image_price">

                                <?php if ($row['gian_gia'] != 0) { ?>
                                    <span style="text-decoration-line:line-through ;"> <?php echo $row['don_gia'] . "đ"; ?></span>
                                    <span> <?php echo $row['gian_gia'] . "đ"; ?></span>
                                <?php } else {
                                    echo $row['don_gia'] . "đ";
                                } ?>
                            </div>
                        </div>

                    </div>

                <?php
                }

                ?>
            </div>
        </div>
        <?php
        if (isset($_SESSION['user'])) :
        ?>
            <h2>Bình luận</h2>
            <?php
            if (isset($_POST['submit'])) {
                $noidung = $_POST['noi_dung'];
                $date = date('Y-m-d H:i');
                $usermodel->insert_binhluan($noidung, $ma_hh, $_SESSION['user']['ma_kh'], $date);
            }
            ?>
            <form action="" method="post">
                <label for="binh_luan">Bình luận</label>
                <input type="text" name="noi_dung" id="binh_luan"> <br>
                <input type="submit" name="submit" value="Gửi">

            </form>
            <?php
            $allbl = $usermodel->show_binhluan($ma_hh);
            // echo "<pre>";
            //         print_r($allbl);
            //         echo "</pre>";
            foreach ($allbl as $row) {
                echo "<p>Tên người bình luận: {$_SESSION['user']['ten_kh']}</p>";
                echo "<p>Ngày bình luận: {$row['ngay_bl']}</p>";
                echo "<p>Nội dung bình luận: {$row['noi_dung']}</p>";
                echo "--------------";
            }
            ?>
        <?php endif; ?>
    </main>

<?php
endif;
?>
<?php

require_once "../admin/footer.php"; ?>

<style>
    main {
        width: 80%;
        margin: auto;
        display: grid;
        grid-template-columns: 3fr 1fr;
    }

    .container-cart {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .image-left img {
        width: 90%;
    }

    .menu {
        margin-top: 30px;
    }

    .name-sp {
        margin-bottom: 20px;
    }

    .name-sp h3 {
        font-size: 25px;
    }

    .menu .image_price p {
        margin-bottom: 10px;
    }

    .menu .image_price span {
        font-weight: bolder;
        color: red;
    }

    .cart {
        background-color: brown;
        padding: 10px;
        margin-right: 80px;
        margin-top: 20px;
        text-align: center;
    }

    .cart a {
        text-decoration: none;
        color: white;
        font-size: 20px;
    }
    .image{
        display: grid;
        grid-template-columns: 1fr 2fr;
    }
    .image img{
        width: 100%;
    }
    .image-menu{
        padding: 7px;
    }
</style>