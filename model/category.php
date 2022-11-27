<?php
require_once "pdo.php";

function listCategory()
{
  $sql = "SELECT * FROM category";
  $list_cate = pdo_query($sql);
  return $list_cate;
}
