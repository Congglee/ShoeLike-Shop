<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="quantity" id="" min="1" step="1" value="1" />
    <button name="btn_submit">Cập nhật</button>
  </form>

  <?php
  if (isset($_POST['btn_submit'])) {
    $quantity = $_POST['quantity'];
    var_dump($quantity);
  }
  ?>
</body>

</html>