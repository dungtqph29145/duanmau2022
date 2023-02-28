<div class="row mb">
        <div class="box-left mr">
        <div class="row mb">
                <div class="box-title">SẢN PHẨM <strong><?=$tendm?></strong></div>
                <div class="box-content row">
                    <?php
                         $i=0;
                        foreach($dssp as $ds){
                            extract($ds);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==11)){
                                $mr="";
                            }else{
                                 $mr="mr";   
                            }
                            echo '<div class="box-shop '.$mr.'">
                            <div class="row img"><img src="'.$hinh.'" alt=""></div>
                            <p>'.$price.'</p>
                            <a href="#">'.$name.'</a>
                        </div>';
                        $i+=1;
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