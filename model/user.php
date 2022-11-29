<?php
require_once "pdo.php";

function addUser($id_user, $password, $name, $email, $role)
{
  $sql = "INSERT INTO user(id_user, password, name, email, role) VALUES ('$id_user', '$password', '$name', '$email', '$role')";
  pdo_execute($sql);
}

function checkUser($id_user, $password)
{
  $sql = "SELECT * FROM user WHERE id_user = '$id_user' AND password = '$password'";
  $user_account = pdo_query_one($sql);
  return $user_account;
}

function checkUserExist($id_user)
{
  $sql = "SELECT count(*) FROM user WHERE id_user = '$id_user'";
  return pdo_query_value($sql) > 0;
}

function checkEmailExist($email)
{
  $sql = "SELECT count(*) FROM user WHERE email = '$email'";
  return pdo_query_value($sql) > 0;
}

function checkEmailExist2($email, $id_user)
{
  $sql = "SELECT count(*) FROM user WHERE email = '$email' AND id_user <> '$id_user'";
  return pdo_query_value($sql) > 0;
}

function getUserById($id_user)
{
  $sql = "SELECT * FROM user WHERE id_user = '$id_user'";
  $userById = pdo_query_one($sql);
  return $userById;
}

function updateUserByClient($id_user, $image, $name, $phone, $email, $address)
{
  if ($image != "") {
    $sql = "UPDATE user SET image = '$image', name = '$name', phone = '$phone', email = '$email', address = '$address' WHERE id_user = '$id_user'";
  } else {
    $sql = "UPDATE user SET name = '$name', phone = '$phone', email = '$email', address = '$address' WHERE id_user = '$id_user'";
  }
  pdo_execute($sql);
}

function changeUserPassword($id_user, $password2)
{
  $sql = "UPDATE user SET password = '$password2' WHERE id_user = '$id_user'";
  pdo_execute($sql);
}
