<?php
session_start();

include "../global.php";

include "../model/category.php";
include "../model/comment.php";
include "../model/order.php";
include "../model/product.php";
include "../model/stat.php";
include "../model/user.php";

include "layout/header.php";

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case "add_product":
      if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
        $pro_name = $_POST['pro_name'];
        $id_pro = $_POST['id_pro'];
        $image = $_FILES['image']['name'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        $price = $_POST['price'];
        $price_sale = $_POST['price_sale'];
        $special = $_POST['special'];
        // $color = $_POST['color'];
        $gender = $_POST['gender'];
        $description = htmlentities($_POST['description']);
        $id_cate = $_POST['id_cate'];
        $id_brand = $_POST['id_brand'];

        addProductAdmin($pro_name, $image, $price, $price_sale, $special, $gender, $description, $id_cate, $id_brand);
        $message = "Thêm sản phẩm mới thành công";
      }

      if (isset($_POST['btn_insert_color']) && ($_POST['btn_insert_color'])) {
        $color = $_POST['color'];
        $id_pro = $_POST['id_pro'];

        addProductColor($color, $id_pro);
        $message_color = "Thêm màu giày thành công";
      }

      if (isset($_POST['btn_insert_size']) && ($_POST['btn_insert_size'])) {
        $size = $_POST['size'];
        $id_pro = $_POST['id_pro'];
        addProductSize($size, $id_pro);
        $message_size = "Thêm size giày thành công";
      }
      $list_pro = listProductAdmin();
      $list_brand = listBrand();
      $list_cate = listCategory();
      include "product/add.php";
      break;

    case "list_product":
      $list_pro = listProductAdmin2('id_pro', 10);
      include "product/list.php";
      break;

    case "update_product":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $product = getProductById($_GET['id_pro']);
      }
      $list_brand = listBrand();
      $list_cate = listCategory();
      include "product/update.php";
      break;

    case "update_pro":
      if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
        $pro_name = $_POST['pro_name'];
        $id_pro = $_POST['id_pro'];
        $image = $_FILES['image']['name'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        $price = $_POST['price'];
        $price_sale = $_POST['price_sale'];
        $special = $_POST['special'];
        // $color = $_POST['color'];
        $gender = $_POST['gender'];
        $description = htmlentities($_POST['description']);
        $id_cate = $_POST['id_cate'];
        $id_brand = $_POST['id_brand'];

        updateProductAdmin($id_pro, $pro_name, $image, $price, $price_sale, $special, $gender, $description, $id_cate, $id_brand);
        $message = "Cập nhật sản phẩm thành công";
      }
      $list_pro = listProductAdmin2('id_pro', 10);
      include "product/list.php";
      break;

    case "delete_product":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $product = deleteProductAdmin($_GET['id_pro']);
      }
      $list_pro = listProductAdmin2('id_pro', 10);
      include "product/list.php";
      break;

    case "list_pro_size":
      $list_pro_size = listProductsSize("id_pro", 10);
      include "product/product_size/list_size.php";
      break;

    case "pro_detail_size":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      include "product/product_size/detail_pro_size.php";
      break;

    case "update_pro_size":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      if (isset($_GET['id_pro_size']) && ($_GET['id_pro_size'] > 0)) {
        $product_size = getProductSize($_GET['id_pro_size']);
      }
      include "product/product_size/update_pro_size.php";
      break;

    case "update_size":
      if (isset($_POST['btn_update_size']) && ($_POST['btn_update_size'])) {
        $id_pro_size = $_POST['id_pro_size'];
        $size = $_POST['size'];
        $id_pro = $_POST['id_pro'];
        updateProductSize($id_pro_size, $size, $id_pro);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      include "product/product_size/detail_pro_size.php";
      break;

    case "delete_pro_size":
      if (isset($_GET['id_pro_size']) && ($_GET['id_pro_size'] > 0)) {
        $product = deleteProductSize($_GET['id_pro_size']);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_size = detailProductSize($_GET['id_pro']);
      }
      include "product/product_size/detail_pro_size.php";
      break;

    case "list_pro_color":
      $list_pro_color = listProductsColor("id_pro", 10);
      include "product/product_color/list_color.php";
      break;

    case "pro_detail_color":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      include "product/product_color/detail_pro_color.php";
      break;

    case "update_pro_color":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      if (isset($_GET['id_pro_color']) && ($_GET['id_pro_color'] > 0)) {
        $product_color = getProductColor($_GET['id_pro_color']);
      }
      include "product/product_color/update_pro_color.php";
      break;

    case "update_color":
      if (isset($_POST['btn_update_color']) && ($_POST['btn_update_color'])) {
        $id_pro_color = $_POST['id_pro_color'];
        $color = $_POST['color'];
        $id_pro = $_POST['id_pro'];
        updateProductColor($id_pro_color, $color, $id_pro);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      include "product/product_color/detail_pro_color.php";
      break;

    case "delete_pro_color":
      if (isset($_GET['id_pro_color']) && ($_GET['id_pro_color'] > 0)) {
        $product = deleteProductColor($_GET['id_pro_color']);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_color = detailProductColor($_GET['id_pro']);
      }
      include "product/product_color/detail_pro_color.php";
      break;

    case "add_pro_detail_img":
      if (isset($_POST['btn_insert_img']) && ($_POST['btn_insert_img'])) {
        $pro_detail_image = $_FILES['pro_detail_image']['name'];
        $id_pro = $_POST['id_pro'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['pro_detail_image']['name']);

        if (move_uploaded_file($_FILES['pro_detail_image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        addProductDetailImg($pro_detail_image, $id_pro);
        $message_detail_img = "Thêm ảnh thành công";
      }
      $list_pro = listProductAdmin();
      include "product/product_detail_img/add.php";
      break;

    case "list_detail_pro_img":
      $list_pro_detail_img = listProductsDetailImg("id_pro", 10);
      include "product/product_detail_img/list_detail_pro_img.php";
      break;

    case "pro_detail_images":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      include "product/product_detail_img/detail_pro_image.php";
      break;

    case "update_pro_detail_img":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      if (isset($_GET['id_pro_detail_img']) && ($_GET['id_pro_detail_img'] > 0)) {
        $product_detail_image = getProductDetailImg($_GET['id_pro_detail_img']);
      }
      include "product/product_detail_img/update_detail_pro_img.php";
      break;

    case "update_pro_detail_image":
      if (isset($_POST['btn_update_detail_img']) && ($_POST['btn_update_detail_img'])) {
        $id_pro_detail_img = $_POST['id_pro_detail_img'];
        $pro_detail_image = $_FILES['pro_detail_image']['name'];
        $id_pro = $_POST['id_pro'];

        $target_dir = $img_path_admin;
        $target_file = $target_dir . basename($_FILES['pro_detail_image']['name']);

        if (move_uploaded_file($_FILES['pro_detail_image']['tmp_name'], $target_file)) {
          $thong_bao = "Đăng tải ảnh thành công";
        } else {
          $thong_bao = "Đăng tải ảnh lên thất bại !";
        }

        updateProductDetailColor($id_pro_detail_img, $pro_detail_image, $id_pro);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      include "product/product_detail_img/detail_pro_image.php";
      break;

    case "delete_pro_detail_img":
      if (isset($_GET['id_pro_detail_img']) && ($_GET['id_pro_detail_img'] > 0)) {
        $product = deleteProductDetailImg($_GET['id_pro_detail_img']);
      }
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $list_detail_pro_images = detailProductDetailImg($_GET['id_pro']);
      }
      include "product/product_detail_img/detail_pro_image.php";
      break;

    default:
      include "layout/home.php";
      break;
  }
} else {
  include "layout/home.php";
}

include "layout/footer.php";
