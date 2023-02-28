<div class="row mb">
        <div class="box-left mr">
        <div class="row mb">
                <div class="box-title">Quên mật khẩu</div>
                <div class="box-content row form ">
                    <form action="index.php?act=quenmk" method="post">
                        <div class="row mb10">
                            Email
                            <input type="email" name="email">
                        </div>
                       
                            <input type="submit" value="Gửi" name="guiemail">
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