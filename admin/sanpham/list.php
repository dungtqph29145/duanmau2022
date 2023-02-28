<div class="row">
            <div class="row header mb">
                <h1>QUẢN LÍ SẢN PHẨM</h1>
            </div>
            <form action="index.php?act=lissp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                        <?php foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="GO">
                    </form>
            <div class="row formcontent">
                   <div class="row mb10 frmloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>DANH MỤC</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Hình Ảnh</th>
                                <th>Giá</th>
                                <th>Lượt xem</th>
                                <th></th>
                            </tr>
                            <?php 
                                    foreach ($listsanpham as $item) :
                                    ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td><?php echo $item['id'] ?></td>
                                            <td><?php echo $item['name'] ?></td>
                                            <td><img src="<?php echo "../upload/".$item['img']?>" width="100px"  alt=""></td> 
                                            <td><?php echo $item['price'] ?></td>
                                            <td><?php echo $item['view'] ?></td>
                                            <td>
                                                <a href="index.php?act=suasp&id=<?= $item['id'] ?>"><input type="button" name="" value="Sửa"></a>
                                                <a href="index.php?act=xoasp&id=<?= $item['id'] ?>"><input type="button" name="" value="Xóa"></a>
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