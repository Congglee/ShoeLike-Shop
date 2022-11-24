<?php
function add_pro($name,$image,$price,$price_sale,$description){
    $sql = "INSERT into product(name,image,price,price_sale,description) values ('$name','$image','$price','$price_sale','$description')";
    pdo_execute($sql);
}

function show_pro(){
    $sql = "SELECT * FROM product ORDER BY id_pro DESC";
    $list_pro = pdo_query($sql);
    return $list_pro;
}
?>