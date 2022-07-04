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
    <h2>Danh sách bình luận</h2>
    <table border="1" style="border-collapse:collapse; width: 700px;">
        <tr>
            
            <th>Nội dung bình luận</th>
            <th>Ngày bình luận</th>
            <th>Xử lý</th>
        </tr>

        <?php
        $users = $list_product->show_binhluantat();
        foreach ($users as $row) {
        ?>
            <tr>
                <td><?php echo $row['noi_dung'] ?></td>
                <td><?php echo $row['ngay_bl'] ?></td>
                <td>
                    <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')" href="show_kh.php?delid=<?php echo $row['ma_kh']; ?>">Xóa</a>
                </td>
            </tr>
        <?php
        }

        ?>
    </table>
</form>