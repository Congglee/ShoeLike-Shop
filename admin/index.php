

<?php
// session_start();

// if(isset($_SESSION['id_user'])&&($_SESSION['id_user']['role'])==1){

    include "../model/pdo.php";
    include "../model/category.php";
    //Controller
    include "../model/product.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'list_pro':
                $list_pro = show_pro();
                include "product/list_pro.php";
                break;
            case 'add_pro':
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $description = $_POST['description'];

                    $image = $_FILES['image']['name'];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                        // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " Upload thành công";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                add_pro($name,$image,$price,$price_sale,$description);
            }
            include "product/add_pro.php";
            break;

            case 'checkout':
                $list_pro = show_pro();
                include "thanhtoan/thanhtoan.php";
                break;
        
            case 'add_cate':
                // Thêm danh mục
                // Kiểm tra xem người dùng có nhấn vào nút thêm mới không
               
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

// }else{
//     // header('Location: index.php');
// }

?>




