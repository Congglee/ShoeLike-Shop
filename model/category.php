<?php

// Hàm thêm danh mục
function insert_cate($name){
    $sql = "INSERT INTO category(name) VALUES('$name')";
    pdo_execute($sql);
}

// Hàm xóa danh mục

function delete_cate($id_cate){
    $sql = "DELETE FROM category WHERE id_cate=".$id_cate;
    pdo_execute($sql);
}

// Hàm hiển thị tất cả danh mục

function load_all_cate(){
    $sql = "SELECT * FROM category ORDER BY id_cate DESC";
    $list_cate = pdo_query($sql);
    return $list_cate;
}

// Hàm hiển thị một danh mục theo mã danh mục : id_cate

function load_one_cate($id_cate){
    $sql = "SELECT * FROM category WHERE id_cate=".$id_cate;
    $cate = pdo_query_one($sql);
    return $cate;
}

// Hàm sửa danh mục

function update_cate($id_cate, $name){
    $sql = "UPDATE category SET name='".$name."' WHERE id_cate=".$id_cate;
    pdo_execute($sql);
}
?>