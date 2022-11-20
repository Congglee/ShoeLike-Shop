<div class="box-pro">
    <div class="title product">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="alert">
        <?php
            if(isset($alert)&&($alert!="")) echo $alert;
        ?>
    </div>
    <div class="form-add-pro">
        <form action="index.php?act=add_pro" method="post" enctype="multipart/form-data">
            <div class="box cate">
                <label for="">DANH MỤC</label>
                <select name="id_cate" id="">
                    
                    <?php
                        foreach($list_cate as $cate){
                            extract($cate);
                            echo '<option value="'.$id_cate.'">'.$name.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="box content">
                <label for="">ID PRODUCT : </label>
                <br>
                <input type="number" name="id_pro" id="" disabled placeholder="     Auto number">
            </div>
            <div class="box content">
                <label for="">NAME : </label>
                <br>
                <input type="text" name="name" id="">
            </div>
            <div class="box content">
                <label for="">IMAGE : </label>
                <br>
                <input type="file" name="image" id="">
            </div>
            <div class="box content">
                <label for="">PRICE : </label>
                <br>
                <input type="number" name="price" id="">
            </div>
            <div class="box content">
                <label for="">PRICE SALE : </label>
                <br>
                <input type="number" name="price_sale" id="">
            </div>
            <div class="box content">
                <label for="">SPECIAL : </label>
                <br>
            </div>
            <div class="box content">
                <label for="">VIEWS : </label>
                <br>
            </div>
            <div class="box content">
                <label for="">GENDER : </label>
                <br>
                <select name="" id=""></select>
            </div>
            <div class="box content">
                <label for="">DESCRIPTION : </label>
                <br>
            </div>
        </form>
    </div>
</div>