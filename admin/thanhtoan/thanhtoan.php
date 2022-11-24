
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <script src="https://cdn.tailwindcss.com"></script>
  
</head>
<style>
    img{
        width: 30px;
        height: 30px;
    }
</style>

<body>
    <header>
        <div class="flex justify-evenly bg-[#FFE178] py-2 mb-20">
            <div>
                <p>Miễn Phí Giao Hàng Từ 699k</p>
            </div>

            <div>
                <p>Miễn Phí Giao Hàng Từ 699k</p>
            </div>

            <div>
                <p>Miễn Phí Giao Hàng Từ 699k</p>
            </div>

        </div>

        <div class="border">
        </div>
    </header>
    <section class="max-w-7xl m-auto mt-20 ">
        <div class="grid grid-cols-2 gap-8 flex">
            <div class="columns">
                <div class="border bg-[#F9F9F9] py-8 px-4 mb-4">
                    <div class="flex justify-between px-8 py-4">
                        <div>
                            <h1 class="text-[17px] font-bold">Thông Tiên Liên Lạc</h1>
                        </div>
                        
                        <div>
                             <span class="">Bạn đã có tài khoản chưa ?</span><a href="" class="font-bold">Đăng Nhập</a>
                        </div>

                    </div>
                    <div class="text-center">
                        <form action="">

                            <input type="text" placeholder="Email" class="w-[95%] p-4 rounded-md">
                            <br>
                            <input type="checkbox" class="flex ml-8 my-8">

                        </form>
                    </div>

                
                </div>


                <div class="border bg-[#F9F9F9] py-8 px-4 mb-4">
                    <div class="px-8 py-4">
                    <h2 class="text-[17px] font-bold ">Địa chỉ giao hàng</h2>
                 </div>

                    <form action="" class="pl-8 ">
                        <input type="text" placeholder="Tên Người Nhận" class="w-[50%] p-4 ">
                        <input type="text" placeholder="Địa Chỉ Nhận Hàng" class="w-[95%] p-4 my-4">
                        <div class="">
                            <select name="" id="" value="" class="w-[30%] h-[55px] text-[15px]">
                                <option value="">Chọn Tỉnh / Thành</option>
                            </select>

                            <select name="" id="" value="" class="w-[30%] h-[55px] text-[15px]">
                                <option value="">Chọn Quận / Huyện</option>
                            </select>

                            <select name="" id="" value="" class="w-[30%] h-[55px] text-[15px]">
                                <option value="">Chọn Phường / Xã</option>
                            </select>
                        </div>
                        <br>
                        <input type="text" placeholder="Số Điện Thoại" class="w-[95%] p-4 ">
                        <br>
                        <input type="checkbox" class="mx-2 my-8">Lưu Thông Tin
                        <br>
                        <select name="" id="" class="w-[95%] h-[55px] my-4">
                            <option value="">Chọn Hình Thức Vận Chuyển</option>
                            <option value="">Free Ship</option>
                            <option value="">Speed Run</option>
                        </select>
                        <button type="submit" class="border w-[200px] h-[55px] font-bold bg-[#FFE178]">Thanh Toán</button>
                        
                    </form>

                </div>




            </div>

            <div class="columns">
                <div class="">
                    <h1 class="font-bold text-[20px] pb-4">Tổng Cộng</h1>
                </div>


                <?php
                foreach($list_pro as $pro){
                    extract($pro);
                    $edit_pro = "index.php?act=edit_pro&id=".$id_pro;
                    $delete_pro = "index.php?act=delete_pro&id".$id_pro;
                    $img = "../upload/".$image;
                    echo '
                    <tr>
                        
                        <th>'.$name.'</th>
                        <th><img src="'.$image.'"></img></th>
                        <th>'.$price.'</th>
                        <th>'.$price_sale.'</th>
                        <th>'.$description.'</th>
                        
    
                    </tr>
                    ';
                    
                }
            ?>

                <div class="border mt-11"></div>

                <div class="my-8 flex justify-between">
                    <p>Tổng Tiền Hàng</p>
                    <p>
                        <?php
                        foreach($list_pro as $pro){

                    ?>
                        <tr>
                            <th>
                                <?php echo $pro['price']?>
                            </th>
                        </tr>


                    <?php
                        }
                        
                        ?>
                    </p>
                </div>
                <div class="my-4  flex justify-between">
                    <p>Phí Vận Chuyển</p><p>2.000.000 đ</p>
                </div>

                <div class="border mt-11"></div>

                <div class="my-4  flex justify-between">
                    <p class="font-bold text-[20px]">Tổng Thanh Toán</p>   <p class="text-red-500 text-[17px]">2.000.000 đ</p>
                </div>




                


            </div>
        </div>

    </section>
    
</body>
</html>