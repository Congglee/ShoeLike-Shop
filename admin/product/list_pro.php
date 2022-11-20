<div class="box-pro">
    <div class="title product">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="alert">
        <?php
            if(isset($alert)&&($alert!="")) echo $alert;
        ?>
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
                    $img = "";
                }

            ?>
        </table>
    </div>
</div>