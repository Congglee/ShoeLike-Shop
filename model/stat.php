<?php
require_once "pdo.php";

function listStatProduct()
{
  $sql = "SELECT ca.id_cate, ca.cate_name, COUNT(*) quantity, MIN(p.price) low_price, MAX(p.price) max_price, AVG(p.price) avg_price FROM product p, category ca WHERE p.id_cate = ca.id_cate GROUP BY ca.id_cate, ca.cate_name";
  $list_stat_pro = pdo_query($sql);
  return $list_stat_pro;
}
