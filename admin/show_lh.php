<?php include_once "../class/class.php"; ?>
<?php

require_once "../admin/show_all.php"; ?>
<?php
$list_product = new user_class();
if (isset($_GET['delid'])) {
    $delUser = $list_product->delete_loai($_GET['delid']);
}
if (isset($delUser)) echo $delUser;
?>
<form action="" class="menu2">
    <h2>Danh sách loại hàng</h2>
    <p><a href="insert_lh.php">Thêm </a></p>
    <table border="1" style="border-collapse:collapse; width: 700px;">
        <tr>
            <th>Mã loại hàng</th>
            <th>Tên loại hàng</th>
            <th>Xử lý</th>
        </tr>
        <?php
        $users = $list_product->show_loai();
        foreach ($users as $row) {
        ?>
            <tr>
                <td><?php echo $row['ma_loai'] ?></td>
                <td><?php echo $row['ten_loai'] ?></td>
                <td>
                    <a href="update_lh.php?update_loai=<?php echo $row['ma_loai']; ?>">Sửa</a> |
                    <a onclick="return confirm('Bạn có chắc muốn xóa loại hàng này không?')" href="show_lh.php?delid=<?php echo $row['ma_loai']; ?>">Xóa</a>
                </td>
            </tr>
        <?php
        }

        ?>
    </table>
</form>