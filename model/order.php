<?php
function insertOrder($id_bill, $total_order, $payment, $id_user, $date, $note,  $order_name, $order_address, $order_email, $order_phone)
{
  $sql = "INSERT INTO `order`(id_bill, total_order, payment, id_user, date, note, order_name, order_address, order_email, order_phone) VALUES('$id_bill', '$total_order', '$payment', '$id_user', '$date', '$note', '$order_name', '$order_address', '$order_email', '$order_phone')";
  return pdo_execute_lastInsertId($sql);
}

function insertOrderTotal($id_order, $id_pro, $quantity, $price, $name, $image, $size, $color)
{
  $sql = "INSERT INTO `order_total`(id_order, id_pro, quantity, price, name, image, size, color) VALUES('$id_order', '$id_pro', '$quantity', '$price', '$name', '$image', '$size', '$color')";
  pdo_execute($sql);
}


function showOrderDetail($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = '$id_order'";
  $listCart = pdo_query($sql);
  return $listCart;
}

function showOrder($id_order)
{
  $sql = "SELECT * FROM `order` WHERE id_order = '$id_order'";
  $list_order = pdo_query($sql);
  return $list_order;
}

function showOrder2($id_order)
{
  $sql = "SELECT * FROM `order` WHERE id_order = '$id_order'";
  $list_order = pdo_query_one($sql);
  return $list_order;
}

function showAllOrder($id_user)
{
  $sql = "SELECT * FROM `order` WHERE 1";
  if ($id_user > 0) {
    $sql .= " AND id_user = '$id_user' ORDER BY date DESC";
  } else {
    $sql .= " ORDER BY id_order DESC";
  }
  $list_order = pdo_query($sql);
  return $list_order;
}

function detailOrderTotal($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = $id_order";
  $order_total = pdo_query_one($sql);
  return $order_total;
}

function countOrderTotal($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = $id_order";
  $order = pdo_query($sql);
  return sizeof($order);
}

function updateOrderAdmin($id_order, $status)
{
  $sql = "UPDATE `order` SET `status` = '$status' WHERE `order`.`id_order` = '$id_order'";
  pdo_execute($sql);
}

function deleteOrderUser($id_order)
{
  $sql = "DELETE FROM `order` WHERE id_order = '$id_order'";
  pdo_execute($sql);
}

function deleteOrderAdmin($id_order)
{
  $sql = "DELETE FROM `order` WHERE id_order = '$id_order'";
  pdo_execute($sql);
}

function deleteOrderTotalAdmin($id_order_total)
{
  $sql = "DELETE FROM `order_total` WHERE id_order_total = '$id_order_total'";
  pdo_execute($sql);
}

function getUserOrderById($id_order)
{
  $sql = "SELECT * FROM `order` WHERE id_order = '$id_order'";
  $user_order = pdo_query_one($sql);
  return $user_order;
}

function getUserOrderTotalById($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = '$id_order'";
  $user_order_total = pdo_query($sql);
  return $user_order_total;
}
