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
$list_brand = listBrand();
include "view/layout/header.php";

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case "products":
      $list_cate = listCategory();
      $list_brand = listBrand();
      $list_pro = listProduct(20);
      include "view/product/products.php";
      break;

    case "products_field":
      $list_cate = listCategory();
      $list_brand = listBrand();
      if (isset($_GET['field_sort']) && ($_GET['field_sort'] != "") && isset($_GET['sort']) && ($_GET['sort'] != "")) {
        $field_sort = isset($_GET['field_sort']) ? $_GET['field_sort'] : "";
        $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
        $list_pro_field = listProductsFieldSort("$field_sort", "$sort", 20);
      } else if (isset($_GET['field']) && ($_GET['field'] != "") && isset($_GET['condition']) && ($_GET['condition'] != "")) {
        $field = isset($_GET['field']) ? $_GET['field'] : "";
        $condition = isset($_GET['condition']) ? $_GET['condition'] : "";
        $field2 = isset($_GET['field2']) ? $_GET['field2'] : "";
        $condition2 = isset($_GET['condition2']) ? $_GET['condition2'] : "";
        $list_pro_field = listProductsFieldConditions("$field", $condition, $field2, $condition2, 20);
        if (isset($_GET['sort_field']) && ($_GET['sort_field'] != "") && isset($_GET['sort']) && ($_GET['sort'] != "")) {
          $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
          $sort_field = isset($_GET['sort_field']) ? $_GET['sort_field'] : "";
          $list_pro_field = listProductsFieldConditionsSort("$field", $condition, $field2, $condition2, $sort_field, $sort, 20);
        }
      }
      // else if (isset($_GET['field']) && ($_GET['field'] != "") && isset($_GET['condition']) && ($_GET['condition'] != "") && isset($_GET['field2']) && ($_GET['field2'] != "") && isset($_GET['condition2']) && ($_GET['condition2'] != "")) {
      //   $field = isset($_GET['field']) ? $_GET['field'] : "";
      //   $condition = isset($_GET['condition']) ? $_GET['condition'] : "";
      //   $field2 = isset($_GET['field2']) ? $_GET['field2'] : "";
      //   $condition2 = isset($_GET['condition2']) ? $_GET['condition2'] : "";
      //   $list_pro_field = listProductsFieldConditions("$field", $condition, "$field2", $condition2, 20);
      // }
      include "view/product/products_field.php";
      break;

    case "product_keyword":
      $list_cate = listCategory();
      $list_brand = listBrand();
      $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : "";
      // $_SESSION['keyword'] = $keyword;
      $list_pro_keyword = listProductKeyword($keyword, 20);
      include "view/product/products_keyword.php";
      break;

    case "product_detail":
      if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
        $id_pro = $_GET['id_pro'];
        $product = productDetail($id_pro);
        updateViews($id_pro);
        extract($product);
        $product_size = productDetailSize($id_pro);
        $product_detail_img = productDetailImage($id_pro);
        $product_relate = productRelate($id_pro, $id_cate);

        if (isset($_POST['rate'])) {
          $content = $_POST['content'];
          $date = date_format(date_create(), 'Y-m-d');
          $rate = $_POST['rate'];

          addComment($content, $date, $rate, $id_pro, $_SESSION['user']['id_user']);
        }
        $list_comment = getCommentByIdPro($id_pro);
        $countComment = count($list_comment);
      }
      include "view/product/product_detail.php";
      break;

    case "add_to_cart":
      if (isset($_POST['btn_insert_cart'])) {
        $id_pro = $_POST['id_pro'];
        $pro_name = $_POST['pro_name'];
        $price = (int)$_POST['price'];
        $image = $_POST['image'];
        $size = $_POST['size'];
        $color = $_POST['color'];
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
          if ($cart[1] == $pro_name && $size == $cart[6]) {
            $new_quantity = $quantity + $cart[4];
            $_SESSION['cart'][$i][4] = $new_quantity;
            $flag = 1;
            break;
          } else if ($cart[1] == $pro_name && $size != $cart[6]) {
            $flag = 2;
            break;
          }
          $i++;
        }
        if ($flag == 0) {
          $list_cart = array($id_pro, $pro_name, $image, $price, $quantity, $into_money, $size, $color);
          // $_SESSION['cart'][] = $list_cart;
          array_push($_SESSION['cart'], $list_cart);
        } else if ($flag == 2) {
          $list_cart = array($id_pro, $pro_name, $image, $price, $quantity, $into_money, $size, $color);
          // $_SESSION['cart'][] = $list_cart;
          array_push($_SESSION['cart'], $list_cart);
        }
        // var_dump($_SESSION['cart']);
        header("Location: index.php?act=product_detail&id_pro=" . $id_pro);
      }
      break;

    case "update_cart":
      if (isset($_POST['btn_update_cart'])) {
        $cart_id = $_GET['id_cart'];
        $quantity = $_POST['quantity'];

        if (isset($_GET['id_cart'])) {
          $_SESSION['cart'][$cart_id][4] = $quantity;
        }
      }
      header("Location: index.php?act=cart");
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
      if (isset($_POST['btn_checkout_submit'])) {
        $message = "Giỏ hàng của bạn đang trống, vui lòng chọn sản phẩm !";
        $alert = "alert-fail";
      }
      if (isset($_SESSION['user'])) {
        $id_user = $_SESSION['user']['id_user'];
        $user = getUserById($id_user);
        $_SESSION['user_bill'] = $user;
      }
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
        // $note = $_POST['note'];

        $note = $_POST['note'];
        $_SESSION['note'] = $note;

        $_SESSION['user_bill']['email'] = $order_email;
        $_SESSION['user_bill']['name'] = $order_name;
        $_SESSION['user_bill']['address'] = $order_address;
        $_SESSION['user_bill']['phone'] = $order_phone;
      }
      include "view/cart/bill_payment.php";
      break;

    case "bill_confirm":
      if (isset($_POST['btn_submit'])) {
        if (isset($_SESSION['user_bill'])) {
          $id_user = $_SESSION['user_bill']['id_user'];
        } else {
          $id_user = "";
        }
        $total_order = $_POST['total_order'];
        $order_name = $_POST['name'];
        $order_email = $_POST['email'];
        $order_address = $_POST['address'];
        $order_phone = $_POST['phone'];
        $payment = $_POST['payment'];
        $note = $_POST['note'];
        $date = date_format(date_create(), "d/m/Y");
        // $date = date("h:i:sa d/m/Y");
        $id_bill = "SHOELIKE" . rand(0, 99999);

        $id_order = insertOrder($id_bill, $total_order, $payment, $id_user, $date, $note, $order_name, $order_address, $order_email, $order_phone);
        $_SESSION['id_order'] = $id_order;

        if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
          foreach ($_SESSION['cart'] as $cart) {
            insertOrderTotal($id_order, $cart[0], $cart[4], $cart[3], $cart[1], $cart[2], $cart[6], $cart[7]);
          }
          // unset($_SESSION['cart']);
        }
      }
      include "view/cart/bill_confirm.php";
      break;

    case "user_bill";
      $list_order = showAllOrder($_SESSION['user']['id_user']);
      include "view/user/user_bill.php";
      break;

    case "user_bill_detail":
      if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
        $user_order = getUserOrderById($_GET['id_order']);
        $user_order_total = getUserOrderTotalById($_GET['id_order']);
      }
      include "view/user/user_bill_detail.php";
      break;

    case "user_bill_delete":
      if (isset($_GET['id_order']) && ($_GET['id_order']) > 0) {
        $user_order = deleteOrderUser($_GET['id_order']);
      }
      $list_order = showAllOrder($_SESSION['user']['id_user']);
      include "view/user/user_bill.php";
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
        } else if (strlen($password) < 6) {
          $message = "Vui lòng nhập mật khẩu có từ 6 ký tự trở lên !";
          $alert = "alert-fail";
        } else if (checkUserExist($id_user)) {
          $message = "Tên đăng nhập đã tồn tại !";
          $alert = "alert-fail";
        } else if (checkEmailExist($email)) {
          $message = "Email bạn nhập đã tồn tại !";
          $alert = "alert-fail";
        } else {
          addUser($id_user, $password, $name, $email, $role);
          $message = "Đăng ký tài khoản thành công";
          $alert = "alert-success";
        }
      }
      include "view/user/signup.php";
      break;

    case "user_info":
      if (isset($_POST['btn_update'])) {
        $id_user = $_POST['id_user'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $image = $_FILES['image']['name'];

        $target_dir = $img_path_global;
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          $message = "Đăng tải ảnh thành công";
        } else {
          $message = "Đăng tải ảnh thất bại !";
          $alert = "alert-fail";
        }

        $user = getUserById($id_user);
        $_SESSION['user'] = $user;

        if (checkEmailExist2($email, $id_user) > 0) {
          $message = "Email đã tồn tại !";
          $alert = "alert-fail";
        } else {
          updateUserByClient($id_user, $image, $name, $phone, $email, $address);
          $alert = "alert-success";
          $message = "Cập nhật tài khoản thành công";
        }
      }
      include "view/user/user_info.php";
      break;

    case "user_password":
      if (isset($_POST['btn_change'])) {
        $id_user = $_POST['id_user'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $password3 = $_POST['password3'];
        if ($password2 != $password3) {
          $message = "Vui lòng xác nhận mật khẩu mới !";
          $alert = "alert-fail";
        } else if (strlen($password2) < 6) {
          $message = "Vui lòng nhập mật khẩu có từ 6 ký tự trở lên !";
          $alert = "alert-fail";
        } else {
          $user = getUserById($id_user);
          if ($user) {
            if ($user['password'] == $password) {
              changeUserPassword($id_user, $password2);
              $message = "Đổi mật khẩu thành công";
              $alert = "alert-success";
            } else {
              $message = "Mật khẩu cũ không đúng !";
              $alert = "alert-fail";
            }
          }
        }
      }
      include "view/user/user_password.php";
      break;

    case "signout":
      session_unset();
      header("Location: index.php");
      break;

    case "forgot_password":
      if (isset($_POST['btn_submit'])) {
        $id_user = $_POST['id_user'];
        $email = $_POST['email'];
        $user = getUserById($id_user);
        if ($user) {
          if ($user['email'] != $email) {
            $message = "Sai email đăng nhập !";
            $alert = "alert-fail";
          } else {
            $_SESSION['user_2'] = $user;
            header("Location: index.php?act=get_password");
            $alert = "alert-fail";
          }
        } else {
          $message = "Sai tên đăng nhập !";
          $alert = "alert-fail";
        }
      }
      include "view/user/forgot_password.php";
      break;

    case "get_password":
      if (isset($_POST['btn_submit'])) {
        $id_user = $_POST['id_user'];
        $password2 = $_POST['password2'];
        $password3 = $_POST['password3'];
        if (strlen($password2) < 6) {
          $message = "Vui lòng nhập mật khẩu có từ 6 ký tự trở lên !";
          $alert = "alert-fail";
        } else if ($password2 != $password3) {
          $message = "Vui lòng xác nhận lại mật khẩu mới !";
          $alert = "alert-fail";
        } else {
          changePassword($id_user, $password2);
          $message = "Đổi mật khẩu thành công";
          $alert = "alert-success";
        }
      }
      include "view/user/get_password.php";
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
