<div class="row">
            <div class="row header">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                   <div class="row mb10 frmloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã TK</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Vai trò</th>
                                <th></th>
                            </tr>
                            <?php
                                    foreach ($listtaikhoan as $taikhoan) :
                                    ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td><?php echo $taikhoan['id'] ?></td>
                                            <td><?php echo $taikhoan['user'] ?></td>
                                            <td><?php echo $taikhoan['email'] ?></td>
                                            <td><?php echo $taikhoan['pass'] ?></td>
                                            <td><?php echo $taikhoan['address'] ?></td>
                                            <td><?php echo $taikhoan['tel'] ?></td>
                                            <td><?php echo $taikhoan['role'] ?></td>
                                            <td>
                                                <a href="index.php?act=suatk&id=<?= $taikhoan['id'] ?>"><input type="button" name="" value="Sửa"></a>
                                                <a href="index.php?act=xoatk&id=<?= $taikhoan['id'] ?>"><input type="button" name="" value="Xóa"></a>
                                            </td>
                                        </tr>
                             <?php endforeach ?>
                        </table>
                   </div>
                   <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="./admin.html"><input type="button" value="Nhập thêm"></a>
                   </div>
            </div>
        </div>