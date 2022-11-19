<div class="box-cate">
    <div class="title category">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="alert">
        <?php
            if(isset($alert)&&($alert!="")) echo $alert;
        ?>
    </div>
    <div class="form-list-cate">
        <table>
            <tr class="tr-top">
                <th></th>
                <th>ID CATE</th>
                <th>NAME</th>
                <th><a href="index.php?act=add_cate"><input type="button" value="Thêm mới"></a></th>
            </tr>
            
            <?php
                foreach($list_cate as $cate){
                    extract($cate);
                    $edit_cate = "index.php?act=edit_cate&id=".$id_cate;
                    $delete_cate = "index.php?act=delete_cate&id=".$id_cate;
                    echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_cate.'</td>
                            <td>'.$name.'</td>
                            <td>
                                <a href="'.$edit_cate.'"><input type="button" value="Sửa" class="edit"></a>
                                <a href="'.$delete_cate.'"><input type="button" value="Xóa" class="delete"></a>
                            </td>
                        </tr>

                    ';
                }

            ?>
        </table>
    </div>
</div>