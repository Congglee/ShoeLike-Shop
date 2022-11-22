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
