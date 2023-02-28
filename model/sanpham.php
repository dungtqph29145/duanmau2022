<?php
    /**
     * Chứa tất cả các thao tác
     * Tập hợp các funciton
     */

     //funciton thêm
     function insert_sanpham($tensp,$giasp,$img,$mota,$iddm){
        $sql="INSERT INTO sanpham(name,price,img,productDesc,iddm) VALUES ('$tensp','$giasp','$img','$mota','$iddm')";
        pdo_execute($sql);
     }
   //   funciton danh sách
   function loadall_sanpham_top10(){
      $sql="SELECT * FROM sanpham WHERE 1 order by view desc limit 0,10"; 
      $listsanpham=pdo_query($sql);
      return $listsanpham;
   }
     function loadall_sanpham_home(){
      $sql="SELECT * FROM sanpham WHERE 1 order by id desc limit 0,9"; 
      $listsanpham=pdo_query($sql);
      return $listsanpham;
   }
     function loadall_sanpham($kyw="",$iddm=0){
        $sql="SELECT * FROM sanpham WHERE 1"; 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
         $sql.=" and iddm ='".$iddm."'";
      }
        $sql.=" order by id asc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
     }
     function load_ten_dm($iddm){
      if($iddm>0){
         $sql="SELECT * FROM danhmuc WHERE id=".$iddm;
         $dm= pdo_query_one($sql);
         extract($dm);
         return $name;
      }else{
         return "";
      }
    
      
   }
     //funciton sua dm
     function loadone_sanpham($id){
      $sql="SELECT * FROM sanpham WHERE id=".$id;
      $sp= pdo_query_one($sql);
      return $sp;
   }
   function load_sanpham_cungloai($id,$iddm){
      $sql="SELECT * FROM sanpham WHERE iddm=".$iddm." AND id<>".$id;
      $listsanpham=pdo_query($sql);
      return $listsanpham;
   }

      //update sanpham
      function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$img){
         if($img!="")
            $sql="UPDATE sanpham SET iddm ='".$iddm."',name ='".$tensp."',price ='".$giasp."',productDesc='".$mota."',img ='".$img."' WHERE id=".$id;
         else
             $sql="UPDATE sanpham SET iddm ='".$iddm."',name ='".$tensp."',price ='".$giasp."',productDesc='".$mota."'WHERE id=".$id;
         pdo_execute($sql);
      }
     //funciton xóa
     function delete_sanpham($id){
        $sql="DELETE FROM sanpham WHERE id=".$id;
        pdo_execute($sql);
     }
?>