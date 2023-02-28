<div class="row">
            <div class="row header">
                <h1>DANH SACH LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
                   <div class="row mb10 frmloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th></th>
                            </tr>
                            <?php
                                    foreach ($listdanhmuc as $item) :
                                    ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td><?php echo $item['id'] ?></td>
                                            <td><?php echo $item['name'] ?></td>
                                            <td>
                                                <a href="index.php?act=suadm&id=<?= $item['id'] ?>"><input type="button" name="" value="Sửa"></a>
                                                <a href="index.php?act=xoadm&id=<?= $item['id'] ?>"><input type="button" name="" value="Xóa"></a>
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