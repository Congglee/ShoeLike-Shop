<?php
session_start();
ob_start();

include "global.php";

include "model/category.php";
include "model/comment.php";
include "model/order.php";
include "model/product.php";
include "model/stat.php"; // thống kê 
include "model/user.php";

include "view/layout/header.php";

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case "signin":
      if (isset($_POST['btn_submit'])) {
        $id_user = $_POST['id_user'];
        $password = $_POST['password'];
        $checkUser = checkUser($id_user, $password);
        if (is_array($checkUser)) {
          $_SESSION['user'] = $checkUser;
          header("Location: index.php");
        } else {
          $message = "Tài khoản bạn nhập không tồn tại !";
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
      include "view/layout/home.php";
      break;
  }
} else {
  include "view/layout/home.php";
}

include "view/layout/footer.php";
