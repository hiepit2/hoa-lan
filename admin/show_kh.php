<?php include_once "../class/class.php"; ?>
<?php
require_once "../admin/show_all.php"; ?>
<?php
$list_product = new user_class();
if (isset($_GET['delid'])) {
    $delUser = $list_product->delete_khachhang($_GET['delid']);
}
if (isset($delUser)) echo $delUser;
?>
<form action="" class="menu2">
    <h2>Danh sách khách hàng</h2>
    <table border="1" style="border-collapse:collapse; width: 500px;">
        <tr>
            <th style="width:50px;">Hình ảnh</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Xử lý</th>
        </tr>

        <?php
        $users = $list_product->show_khachhang();
        foreach ($users as $row) {
        ?>
            <tr>               
                <td ><img style="width:100px;" src="img/<?php echo $row['hinh'] ?>" alt=""></td>
                <td style="width:200px;"><?php echo $row['ten_kh'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['mat_khau'] ?></td>
                <td>
                    <a href="update_kh.php?update_khachhang=<?php echo $row['ma_kh']; ?>">Sửa</a> |
                    <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')" href="show_kh.php?delid=<?php echo $row['ma_kh']; ?>">Xóa</a>
                </td>
            </tr>
        <?php
        }

        ?>
    </table>
</form>