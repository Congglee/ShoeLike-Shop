<?php
// session_start();

if(isset($_SESSION['id_user'])&&($_SESSION['id_user']['role'])==1){

    include "../model/pdo.php";
    include "header.php";
    include "../model/category.php";
    //Controller

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'add_cate':
                // Thêm danh mục
                // Kiểm tra xem người dùng có nhấn vào nút thêm mới không
                if(isset($_POST['add_cate'])&&($_POST['add_cate'])){

                    $name = $_POST['name'];

                    // Kiểm tra biến tên danh mục
                    if(!$name=""){
                        // Nếu tên danh mục khác rỗng, gọi hàm thêm danh mục
                        insert_cate($name);
                        // Đưa ra thông báo thêm danh mục thành công
                        $alert = "Thêm danh mục thành công";
                    }else{
                        // Nếu tên danh mục bằng rỗng
                        // Đưa ra thông báo sau
                        $alert = "Chưa nhập tên danh mục. Vui lòng nhập tên danh mục";
                    }
                }
                include "category/add_cate.php";
                break;
            case 'delete_cate':
                if(isset($_GET['id_cate'])&&($_GET['id_cate'])){
                    delete_cate($_GET['id_cate']);
                }
                $list_cate = load_all_cate();
                include "category/update_cate.php";
                break;
            case 'edit_cate':
                if(isset($_GET['id_cate'])&&($_GET['id_cate']>0)){
                    $cate = load_one_cate($_GET['id_cate']);
                }
                include "category/list_cate.php";
                break;
            case 'update_cate':
                if(isset($_POST['update_cate'])&&($_POST['update_cate'])){
                    $id_cate = $_POST['id_cate'];
                    $name = $_POST['name'];

                    if(!$name=""){
                        update_cate($id_cate,$name);
                        $alert = "Cập nhật thành công";
                    }else{
                        $alert = "Bạn chưa nhập tên danh mục";
                    }
                }
                $list_cate = load_all_cate();
                include "category/list_cate.php";
                break;

            default:
                include "main.php";
                break;
        }
    }

    include "footer.php";

}else{
    header('Location: index.php');
}

?>