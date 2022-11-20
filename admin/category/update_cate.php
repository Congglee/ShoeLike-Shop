<?php

if((is_array($category))){
    extract($category);
}
?>

<div class="box-cate">
    <div class="title category">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="alert">
        <?php
            if(isset($alert)&&($alert!="")) echo $alert;
        ?>
    </div>
    <div class="form-update-cate">
        <form action="index.php?act=update_cate" method="post">
            <div class="row content">
                <label for="">ID CATE : </label>
                <br>
                <input type="number" name="id_cate" disabled placeholder="     Auto number">
            </div>
            <div class="row content">
                <label for="">NAME : </label>
                <br>
                <input type="text" name="name" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
            </div>
            <div class="row button">
                <input type="hidden" name="id_cate" value="<?php if(isset($id_cate)&&($id_cate!="")) echo $id; ?>">
                <input type="submit" value="CẬP NHẬT" name="update_cate">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=list_cate"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>