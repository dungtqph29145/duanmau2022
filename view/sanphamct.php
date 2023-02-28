<div class="row mb">
        <div class="box-left mr">
        <div class="row mb">
            <?php
                extract($onesp);
            ?>
                <div class="box-title"><?=$name?></div>
                <div class="box-content row card    ">
                    <?php
                        // extract($onesp);
                        $img=$img_path.$img;
                        echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                        echo $productDesc;
                    ?>
              
               
              </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                 $("span").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                });
            </script>
            <div class="row mb">
                <div class="box-title">BÌNH LUẬN</div>
                <div class="box-content row">
                    
                
                </div>
           
            </div>
            <div class="row" id="binhluan"></div>
            <div class="row mb">
                <div class="box-title">SẢN PHẨM CÙNG LOẠI</div>
                <div class="box-content row">
                    <?php
                        foreach ($sp_cung_loai as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                        }
                    ?>
                
                </div>
            </div>
        </div>
        <div class="box-right">
        <?php
            include "boxright.php";
        ?>
        </div>
    </div>