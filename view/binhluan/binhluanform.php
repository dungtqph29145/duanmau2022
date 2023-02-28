<?php
    $idpro=$_REQUEST['idpro'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="row mb">
                <div class="box-title">Bình luận</div>
                <div class="box-content2 menu-doc">
                    <ul>
                        <?php
                        echo "Nội dung bình luận ở đây: ".$idpro;
                            // foreach($dsdm as $dm){
                            //     extract($dm);
                            //     $linkdm="index.php?act=sanpham&iddm=".$id;
                            //     echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                            // }
                        ?>
                    </ul>
                </div>
                <div class="box-footer search-box">
                    <form action="index.php?act=add_binhluan" method="post">
                        <input type="text" name="msg">
                        <input type="submit" name="guibinhluan" value="gửi bình luận">
                    </form>
                </div>
</div>
</body>
</html>
