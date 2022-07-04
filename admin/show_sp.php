<?php include_once "../class/class.php"; ?>
<?php
require_once "../admin/show_all.php"; ?>
<?php
$list_product = new user_class();
if (isset($_GET['delid'])) {
    $delUser = $list_product->delete_hanghoa($_GET['delid']);
}
if (isset($delUser)) echo $delUser;

?>

<form action="" class="menu2">
    <h3>Danh sách sản phẩm</h3>
    <p><a href="insert_sp.php">Thêm sản phẩm</a></p>
    <table border="1" style="border-collapse:collapse; width: 700px;">
        <tr>            <th style="width:200px">Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Giảm giá</th>
            <th>Mô tả sản phẩm</th>
            <th>Đặc biệt</th>
            <th>Xử lý</th>        </tr>
        <?php
        $users = $list_product->show_hanghoa();
        foreach($users as $row){
        ?>
                <tr>
                    <td><img src="img/<?php echo $row['hinh'] ?>"></td>
                    <td><?php echo $row['ten_hh'] ?></td>
                    <td><?php echo $row['don_gia'] ?>đ</td>
                    <td><?php echo $row['gian_gia'] ?>đ</td>
                    <td><?php echo $row['mo_ta'] ?></td>
                    <td><?php echo $row['dac_biet'] ?></td>
                    <td>
                        <a href="update_sp.php?update_hanghoa=<?php echo $row['ma_hh']; ?>">Sửa</a> |
                        <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')" href="show_sp.php?delid=<?php echo $row['ma_hh']; ?>">Xóa</a>
                    </td>
                </tr>
        <?php
            }
        
        ?>
    </table>
</form>

