<?php include_once "../class/class.php"; ?>
<?php
$list_product = new user_class();
if (isset($_GET['delid'])) {
    $delUser = $list_product->delete_hanghoa($_GET['delid']);
}
if (isset($delUser)) echo $delUser;

?>

<form action="" class="menu2">
    <div class="container">
        <div class="row">
            <?php
            $users = $list_product->show_hanghoa();
            foreach ($users as $row) {
            ?>

                <div class="image">
                    <div class="image_img">
                        <a href="../admin/chitiet.php?ma_hh=<?php echo $row['ma_hh']; ?>"><img src="img/<?php echo $row['hinh']; ?>" alt=""></a>
                    </div>
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
                    <div class="image_cart">
                        <a href="../admin/chitiet.php?ma_hh=<?php echo $row['ma_hh']; ?>">Chi tiết</a>
                    </div>

                </div>

            <?php
            }

            ?>
        </div>
        <h2>Sản phẩm được xem nhiều nhất</h2>
        <div class="row">

            <?php
            $hanghoaslx = $list_product->show_hanghoaslx();
            foreach ($hanghoaslx as $row) {
            ?>

                <div class="image">
                    <div class="image_img">
                        <a href="../admin/chitiet.php?ma_hh=<?php echo $row['ma_hh']; ?>"><img src="img/<?php echo $row['hinh']; ?>" alt=""></a>
                    </div>
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
                    <div class="image_cart">
                        <a href="../admin/chitiet.php?ma_hh=<?php echo $row['ma_hh']; ?>">Chi tiết</a>
                    </div>

                </div>

            <?php
            }

            ?>
        </div>
    </div>

</form>



<style>
    .row {
        width: 90%;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        column-gap: 20px;
        row-gap: 20px;
    }

    h2 {
        margin-top: 50px;
    }

    .image p {
        font-weight: bolder;
        font-size: 20px;
        margin-top: 10px;
    }

    .image a img {
        width: 100%;
    }

    .image_name,
    .image_price,
    .image_cart {
        padding-left: 10px;
    }

    .image_price {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .image_cart {
        text-align: center;
        background-color: brown;
        padding: 10px;
        margin-bottom: 20px;
        margin-top: 5px;
    }

    .image_cart a {
        text-decoration: none;
        color: white;
    }
    h2{
        text-align: center;
        margin-bottom: 20px;
    }
</style>