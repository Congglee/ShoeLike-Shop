<div class="box-cate">
    <div class="title category">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div>
    <div class="alert">
        <?php
            if(isset($alert)&&($alert!="")) echo $alert;
        ?>
    </div>
    <div class="form-add-cate">
        <form action="index.php?act=add_cate" method="post">
            <div class="row content">
                <label for="">ID CATE : </label>
                <br>
                <input type="number" name="id_cate" disabled placeholder="     Auto number">
            </div>
            <div class="row content">
                <label for="">NAME : </label>
                <br>
                <input type="text" name="name">
            </div>
            <div class="row button">
                <input type="submit" value="THÊM MỚI" name="add_cate">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=list_cate"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>