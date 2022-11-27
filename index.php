<?php
// http://localhost/PRO1014_WE17313/Assignment_congltph27602/index.php
session_start();
ob_start();

include "global.php";

include "model/category.php";
include "model/comment.php";
include "model/order.php";
include "model/product.php";
include "model/stat.php"; // thống kê 
include "model/user.php";

$list_cate = listCategory();
include "view/layout/header.php";

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case "products":
      $list_cate = listCategory();
      $list_brand = listBrand();
      $list_pro = listProduct();
      include "view/product/products.php";
      break;

    case "product_detail":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $id_pro = $_GET['id_pro'];
        $product = productDetail($id_pro);
        updateViews($id_pro);
        extract($product);
        // $product_color = productDetailColor($id_pro);
        $product_size = productDetailSize($id_pro);
        $product_detail_img = productDetailImage($id_pro);
        // var_dump($product);
        // var_dump($product_color);
        // var_dump($product_size);
        // var_dump($product_detail_img);
        $product_relate = productRelate($id_pro, $id_cate);
      }
      include "view/product/product_detail.php";
      break;

    case "add_to_cart":
      if (isset($_POST['btn_insert_cart'])) {
        $id_pro = $_POST['id_pro'];
        $pro_name = $_POST['pro_name'];
        $price = (int)$_POST['price'];
        $image = $_POST['image'];
        if (isset($_POST['quantity']) && ($_POST['quantity'] > 0)) {
          $quantity = (int)$_POST['quantity'];
        } else {
          $quantity = 1;
        }
        $into_money = $quantity * $price;
        // $quantity = (int)$_POST['quantity'];
        $flag = 0;
        $i = 0;
        foreach ($_SESSION['cart'] as $cart) {
          if ($cart[1] == $pro_name) {
            $new_quantity = $quantity + $cart[4];
            $_SESSION['cart'][$i][4] = $new_quantity;
            $flag = 1;
            break;
          }
          $i++;
        }
        if ($flag == 0) {
          $list_cart = array($id_pro, $pro_name, $image, $price, $quantity, $into_money);
          // $_SESSION['cart'][] = $list_cart;
          array_push($_SESSION['cart'], $list_cart);
        }
        header("Location: index.php?act=product_detail&id_pro=" . $id_pro);
      }
      break;

    case "delete_cart":
      if (isset($_GET['id_cart'])) {
        array_splice($_SESSION['cart'], $_GET['id_cart'], 1);
      } else {
        $_SESSION['cart'] = [];
      }
      header("Location: index.php?act=cart");
      break;

    case "cart":
      include "view/cart/cart.php";
      break;

    case "bill":
      include "view/cart/bill.php";
      break;

    case "bill_payment":
      if (isset($_POST['btn_submit'])) {
        $order_name = $_POST['name'];
        $order_email = $_POST['email'];
        $order_address = $_POST['address'];
        $order_phone = $_POST['phone'];
      }
      include "view/cart/bill_payment.php";
      break;

    case "bill_confirm":
      if (isset($_POST['btn_submit'])) {
        $total_order = $_POST['total_order'];
        $order_name = $_POST['name'];
        $order_email = $_POST['email'];
        $order_address = $_POST['address'];
        $order_phone = $_POST['phone'];
        $payment = $_POST['payment'];
        // $date = date("h:i:sa d/m/Y");
        $id_bill = "SHOELIKE" . rand(0, 99999);

        $id_order = insertOrder($id_bill, $total_order, $payment, $order_name, $order_address, $order_email, $order_phone);
        $_SESSION['id_order'] = $id_order;

        if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
          foreach ($_SESSION['cart'] as $cart) {
            insertOrderTotal($id_order, $cart[0], $cart[4], $cart[3], $cart[1], $cart[2]);
          }
          // unset($_SESSION['cart']);
        }
      }
      include "view/cart/bill_confirm.php";
      break;

    case "signin":
      if (isset($_POST['btn_submit'])) {
        $id_user = $_POST['id_user'];
        $password = $_POST['password'];
        $checkUser = checkUser($id_user, $password);
        if (is_array($checkUser)) {
          $_SESSION['user'] = $checkUser;
          header("Location: index.php");
        } else {
          $message = "Tài khoản hoặc mật khẩu bạn nhập không đúng, vui lòng nhập lại !";
          $alert = "alert-fail";
        }
      }
      include "view/user/signin.php";
      break;

    case "signup":
      if (isset($_POST['btn_submit'])) {
        $name = $_POST['name'];
        $id_user = $_POST['id_user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $role = $_POST['role'];

        if ($password != $password2) {
          $message = "Vui lòng nhập mật khẩu giống nhau !";
          $alert = "alert-fail";
        } else if (checkUserExist($id_user)) {
          $message = "Tên đăng nhập của bạn đã tồn tại vui lòng nhập tên khác !";
          $alert = "alert-fail";
        } else {
          addUser($id_user, $password, $name, $email, $role);
          $message = "Đăng ký tài khoản thành công";
          $alert = "alert-success";
        }
      }
      include "view/user/signup.php";
      break;

    case "signout":
      session_unset();
      header("Location: index.php");
      break;

    default:
      $list_pro_new = listProductNew();
      $list_pro_feature = listProductFeature();
      $list_pro_promo = listProductPromo();
      $list_brand = listBrandImage();
      include "view/layout/home.php";
      break;
  }
} else {
  $list_pro_new = listProductNew();
  $list_pro_feature = listProductFeature();
  $list_pro_promo = listProductPromo();
  $list_brand = listBrandImage();
  include "view/layout/home.php";
}

include "view/layout/footer.php";
