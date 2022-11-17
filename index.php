
=======
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
      // case "":
      // code ....
      // break;

    default:
      include "view/layout/home.php";
      break;
  }
} else {
  include "view/layout/home.php";
}

include "view/layout/footer.php";

