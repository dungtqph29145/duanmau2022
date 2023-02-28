<div class="row mb">
                <div class="box-title">TÀI KHOẢN</div>
                <div class="box-content form">
                    <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user'])
                    ?>
                        <div class="row mb10">
                            Xin chào<br>
                           <?=$user?>
                        </div>
                        <div class="row mb10">
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a></li>
                            <?php if($role==1){?>
                            <li><a href="admin/index.php">Đăng nhập admin</a></li>
                            <?php }?>
                            <li><a href="index.php?act=thoat">Thoát</a></li>
                        </div>
                    <?php
                        }else{
                    ?>
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row mb10">
                            Tên đăng nhập <br>
                            <input type="text" name="user">
                        </div>
                        <div class="row mb10">
                            Mật khẩu <br>
                        <input type="password" name="pass">
                        </div>
                        <div class="row mb10">
                            <input type="checkbox" name="" id="">Ghi nhớ tài khoản? <br>
                        </div>
                        <div class="row mb10">
                            <input type="submit" value="Đăng nhập" name="dangnhap">
                        </div>
                        
                    </form>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                    <?php }?>
                </div>
            </div>
            <div class="row mb">
                <div class="box-title">DANH MỤC</div>
                <div class="box-content2 menu-doc">
                    <ul>
                        <?php
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                <div class="box-footer search-box">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw">
                        <input type="submit" name="timkiem" value="Tìm Kiếm">
                    </form>
                </div>
            </div>
            <div class="row ">
                <div class="box-title">TOP 10 YÊU THÍCH</div>
                <div class="box-content row">
                    <?php
                        foreach($dstop10 as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $img=$img_path.$img;
                            echo '<div class="row mb10 top10">
                            <img src="'.$img.'" alt="">
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        }
                    ?>
                    <!-- <div class="row mb10 top10">
                        <img src="./img/product/top1.jpg" alt="">
                        <a href="#">Sir Rodney Marmalade</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/anh1.jpg" alt="">
                        <a href="#">Cate do Bave</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top3.jpg" alt="">
                        <a href="#">Thanger Rosbramurts</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top4.jpg" alt="">
                        <a href="#">Mish Kote Nisu</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top5.jpg" alt="">
                        <a href="#">Carnavan Tigers</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top6.jpg" alt="">
                        <a href="#">Rac Coudavault</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top7.jpg" alt="">
                        <a href="#">Madsada Aplasd sadas</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top8.jpg" alt="">
                        <a href="#">Tar au se</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top9.jpg" alt="">
                        <a href="#">Change</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="./img/product/top10.jpg" alt="">
                        <a href="#">Russle Sauriarnla</a>
                    </div> -->
                </div>
            </div>