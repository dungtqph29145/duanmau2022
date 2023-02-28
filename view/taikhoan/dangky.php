<div class="row mb">
        <div class="box-left mr">
        <div class="row mb">
                <div class="box-title">Đăng ký thành viên</div>
                <div class="box-content row form ">
                    <form action="index.php?act=dangky" method="post">
                        <div class="row mb10">
                            Email
                            <input type="email" name="email">
                        </div>
                       <div class="row mb10">
                            Tên đăng nhập
                            <input type="text" name="user">
                        </div>
                        <div class="row mb10">
                            Mật khẩu
                             <input type="password" name="pass">
                        </div>
                            <input type="submit" value="Đăng Ký" name="dangky">
                            <input type="reset" value="Nhập lại">
                    </form>
                    <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                    ?>
                    </h2>
              </div>
            </div>
        </div>
        <div class="box-right">
        <?php
            include "view/boxright.php";
        ?>
        </div>
    </div>