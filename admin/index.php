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
    default:
      include "layout/home.php";
      break;
  }
} else {
  include "layout/home.php";
}

include "layout/footer.php";
