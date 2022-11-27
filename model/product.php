<?php
require_once "pdo.php";

function listProduct()
{
  $sql = "SELECT * FROM product ORDER BY id_pro DESC";
  $list_pro = pdo_query($sql);
  return $list_pro;
}

function listProductNew()
{
  $sql = "SELECT * FROM product p JOIN product_brand pb ON p.id_brand = pb.id_brand WHERE p.special = 1 ORDER BY id_pro DESC LIMIT 0,12";
  $list_pro_new = pdo_query($sql);
  return $list_pro_new;
}

function listProductFeature()
{
  $sql = "SELECT * FROM product p JOIN product_brand pb ON p.id_brand = pb.id_brand ORDER BY views DESC LIMIT 0,12";
  $list_pro_feature = pdo_query($sql);
  return $list_pro_feature;
}

function listProductPromo()
{
  $sql = "SELECT * FROM product p JOIN product_brand pb ON p.id_brand = pb.id_brand WHERE p.price_sale <> 0 ORDER BY id_pro LIMIT 0,8";
  $list_pro_promo = pdo_query($sql);
  return $list_pro_promo;
}

function listBrandImage()
{
  $sql = "SELECT * FROM product_brand WHERE logo <> ''";
  $list_brand = pdo_query($sql);
  return $list_brand;
}

function listBrand()
{
  $sql = "SELECT * FROM product_brand ORDER BY brand_name ASC";
  $list_brand = pdo_query($sql);
  return $list_brand;
}

function productDetail($id_pro)
{
  // $sql = "SELECT * FROM product p, product_brand pb WHERE p.id_brand = pb.id_brand AND id_pro = $id_pro";
  $sql = "SELECT * FROM product p, product_brand pb, product_color pc, product_size ps WHERE p.id_brand = pb.id_brand AND p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_pro = $id_pro";
  $product = pdo_query_one($sql);
  return $product;
}

function productDetailColor($id_pro)
{
  $sql = "SELECT * FROM product p, product_color pc WHERE p.id_pro = pc.id_pro AND p.id_pro = $id_pro";
  $product_color = pdo_query_one($sql);
  return $product_color;
}

function productDetailSize($id_pro)
{
  $sql = "SELECT * FROM product p, product_size ps WHERE p.id_pro = ps.id_pro AND p.id_pro = $id_pro";
  $product_size = pdo_query($sql);
  return $product_size;
}

function productDetailImage($id_pro)
{
  $sql = "SELECT * FROM product p, product_detail_img pdi WHERE p.id_pro = pdi.id_pro AND p.id_pro = $id_pro";
  $product_detail_img = pdo_query($sql);
  return $product_detail_img;
}

function productRelate($id_pro, $id_cate)
{
  $sql = "SELECT * FROM product p, product_brand pb WHERE p.id_brand = pb.id_brand AND id_cate = $id_cate AND id_pro <> $id_pro ORDER BY id_pro DESC LIMIT 0,12";
  $list_pro_relate = pdo_query($sql);
  return $list_pro_relate;
}

function updateViews($id_pro)
{
  $sql = "UPDATE product SET views = views + 1 WHERE id_pro = $id_pro";
  pdo_execute($sql);
}

// INSERT INTO employee_details (emp_id, emp_name, emp_designation, emp_rating) SELECT ed emp_id, ed.emp_name, ed.emp_designation, er.emp_rating FROM employee_designation ed LEFT JOIN employee_rating er ON ed.emp_id = er.emp_id;  
