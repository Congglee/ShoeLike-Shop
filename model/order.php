<?php
function insertOrder($id_bill, $total_order, $payment, $order_name, $order_address, $order_email, $order_phone)
{
  $sql = "INSERT INTO `order`(id_bill, total_order, payment, order_name, order_address, order_email, order_phone) VALUES('$id_bill', '$total_order', '$payment', '$order_name', '$order_address', '$order_email', '$order_phone')";
  return pdo_execute_lastInsertId($sql);
}

function insertOrderTotal($id_order, $id_pro, $quantity, $price, $name, $image)
{
  $sql = "INSERT INTO `order_total`(id_order, id_pro, quantity, price, name, image) VALUES('$id_order', '$id_pro', '$quantity', '$price', '$name', '$image')";
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
