<div class="box-pro">
    <div class="title product">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="alert">
        <?php
            if(isset($alert)&&($alert!="")) echo $alert;
        ?>
    </div><div class="container">
  <div class="page-title">

    <h4 class="mt-5 font-weight-bold text-center">Chi tiết Size sản phẩm</h4>
  </div>
  <div class="box box-primary">
    <div class="box-body">
      <form action="?btn_delete_all" method="post" class="table-responsive">
        <i class="ml-5">Sản phẩm:
          <b>
            <?= $list_detail_pro_color[0]['pro_name'] ?>
          </b>
        </i>
        <table width="100%" class="table table-hover table-bordered text-center">
          <thead class="thead-dark">
            <tr>
              <th>Mã màu sản phẩm</th>
              <th>Màu sắc</th>
              <th> <a href="index.php?act=add_product" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($list_detail_pro_color as $ldpc) {
              extract($ldpc);
              $update_pro_color = "index.php?act=update_pro_color&id_pro_color=" . $id_pro_color . "&id_pro=" . $id_pro;
              $delete_pro_color = "index.php?act=delete_pro_color&id_pro_color=" . $id_pro_color . "&id_pro=" . $id_pro;
            ?>
              <tr>
                <td><?= $id_pro_color ?></td>
                <td><?= $color ?></td>
                <td class="text-end">
                  <a href="<?= $update_pro_color ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                  <a href="<?= $delete_pro_color ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>

        </table>
        <input type="hidden" name="ma_hh" value="">
        <div class="mt-3" width="100%">
          <ul class="pagination justify-content-center">
          </ul>
        </div>
        <a class="btn btn-dark" href="index.php?act=list_pro_color">Quay lại</a>
      </form>
    </div>
  </div>
</div>
    <div class="box-pro content">
        <form action="index.php?act=list_pro" method="post">
            <label for="">Danh mục : </label>
            <input type="text" name="kyw" id="">
            <select name="id_cate" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                    foreach($list_cate as $cate){
                        extract($cate);
                        echo '<option value="'.$id_cate.'" >"'.$name.'"</option>';
                    }

                ?>
            </select>
            <input type="submit" value="Tìm kiếm" name="ok">
        </form>
        <table>
            <tr>
                <th>ID PRODUCT</th>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>PRICE SALE</th>
                <th>SPECIAL</th>
                <th>VIEWS</th>
                <th>GENDER</th>
                <th>DESCRIPTION</th>
                <th>ID BRAND</th>
                <th>ID PRODUCT COLOR</th>
                <th>ID PRODUCT SIZE</th>
                <th>ID CATE</th>

            </tr>
            <?php
                foreach($list_pro as $pro){
                    extract($pro);
                    $edit_pro = "index.php?act=edit_pro&id=".$id_pro;
                    $delete_pro = "index.php?act=delete_pro&id".$id_pro;
                    $img = "../upload/".$image;

                    echo '
                        <tr>
                        <th></th>
                        <th>'.$name.'</th>
                        <th><img src="'.$image.'"></img></th>
                        <th>'.$price.'</th>
                        <th>'.$price_sale.'</th>
                        <th>SPECIAL</th>
                        <th>VIEWS</th>
                        <th>GENDER</th>
                        <th>'.$description.'</th>
                        <th>ID BRAND</th>
                        <th>ID PRODUCT COLOR</th>
                        <th>ID PRODUCT SIZE</th>
                        <th>ID CATE</th>
    
                </tr>
                    
                    
                    
                    ';
                }
                
                

            ?>
        </table>
    </div>
</div>