<select name="" id="" class="filter-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
  <option value="index.php?act=products_field&field=special&condition=1">Mới nhất</option>
  <option <?php if (isset($_GET['field']) && ($_GET['field'] == "id_pro") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
            echo "selected";
          } ?> value="index.php?act=products_field&field=id_pro&sort=asc">Cũ đến mới</option>
  <option <?php if (isset($_GET['field']) && ($_GET['field'] == "views")) {
            echo "selected";
          } ?> value="index.php?act=products_field&field=views&sort=desc">Nổi bật nhất</option>
  <option <?php if (isset($_GET['field']) && ($_GET['field'] == "price") && (isset($_GET['sort'])) && ($_GET['sort'] == "desc")) {
            echo "selected";
          } ?> value="index.php?act=products_field&field=price&sort=desc">Giá giảm dần</option>
  <option <?php if (isset($_GET['field']) && ($_GET['field'] == "price") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
            echo "selected";
          } ?> value="index.php?act=products_field&field=price&sort=asc">Giá tăng dần</option>
  <option <?php if (isset($_GET['act']) && ($_GET['act'] == "products")) {
            echo "selected";
          } ?> value="index.php?act=products">Sắp xếp</option>
  <option <?php if (isset($_GET['field']) && ($_GET['field'] == "pro_name") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
            echo "selected";
          } ?> value="index.php?act=products_field&field=pro_name&sort=asc">A - Z</option>
  <option <?php if (isset($_GET['field']) && ($_GET['field'] == "pro_name") && (isset($_GET['sort'])) && ($_GET['sort'] == "desc")) {
            echo "selected";
          } ?> value="index.php?act=products_field&field=pro_name&sort=desc">Z - A</option>
</select>