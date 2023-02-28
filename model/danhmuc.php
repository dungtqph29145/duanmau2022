<?php
    /**
     * Chứa tất cả các thao tác
     * Tập hợp các funciton
     */

     //funciton thêm
     function insert_danhmuc($tenloai){
        $sql="INSERT INTO danhmuc(name) VALUES ('$tenloai')";
        pdo_execute($sql);
     }
     //funciton danh sách
     function loadall_danhmuc(){
        $sql="SELECT * FROM danhmuc order by id asc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
     }
     //funciton sua dm
     function loadone_danhmuc($id){
      $sql="SELECT * FROM danhmuc WHERE id=".$id;
      $dm= pdo_query_one($sql);
      return $dm;
   }
      //update danhmuc
      function update_danhmuc($id,$tenloai){
         $sql="UPDATE danhmuc SET name ='".$tenloai."' WHERE id=".$id;
         pdo_execute($sql);
      }
     //funciton xóa
     function delete_danhmuc($id){
        $sql="DELETE FROM danhmuc WHERE id=".$id;
        pdo_execute($sql);
     }
?>