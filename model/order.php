<?php
function insertOrder($id_bill, $total_order, $payment, $id_user, $date, $order_name, $order_address, $order_email, $order_phone)
{
  $sql = "INSERT INTO `order`(id_bill, total_order, payment, id_user, date, order_name, order_address, order_email, order_phone) VALUES('$id_bill', '$total_order', '$payment', '$id_user', '$date', '$order_name', '$order_address', '$order_email', '$order_phone')";
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
  $sql = "SELECT * FROM `order` WHERE id_user = '$id_user' ORDER BY date DESC";
  $list_order = pdo_query($sql);
  return $list_order;
}

function deleteOrderUser($id_order)
{
  $sql = "DELETE FROM `order` WHERE id_order = '$id_order'";
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
