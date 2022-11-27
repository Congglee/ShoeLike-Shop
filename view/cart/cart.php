<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Giỏ hàng của bạn</a>
      </div>
    </div>
  </section>

  <section class="cart">
    <div class="container">
      <h3 class="cart-title heading">Giỏ hàng của bạn</h3>
      <div class="cart-container">
        <form action="" class="cart-table-form" method="post">
          <table class="cart-table">
            <thead class="cart-thead">
              <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tbody class="cart-tbody">
              <?php
              $total = 0;
              $i = 0;
              foreach ($_SESSION['cart'] as $cart) {
                $cart_image = $img_path_view . $cart[2];
                $into_money = $cart[3] * $cart[4];
                $total += $into_money;
                $delete_cart = "index.php?act=delete_cart&id_cart=" . $i;
              ?>
                <tr>
                  <td class="cart-info">
                    <img src="<?= $cart_image ?>" alt="" />
                    <span><?= $cart[1] ?></span>
                  </td>
                  <td class="cart-price"><?= number_format($cart[3], "0", ",", ".") ?>đ</td>
                  <td class="cart-quantity">
                    <input type="number" name="quantity" id="" min="1" step="1" value="<?= $cart[4] ?>" class="cart-input" disabled />
                  </td>
                  <td class="cart-total"><?= number_format($into_money, "0", ",", ".") ?>đ</td>
                  <td class="cart-remove">
                    <a href="<?= $delete_cart ?>">
                      <i class="fa fa-times"></i>
                    </a>
                  </td>
                </tr>
              <?php
                $i++;
              }
              ?>
              <!-- <tr>
                <td class="cart-info">
                  <img src="././public/images/pro-detail-1-01-small.avif" alt="" />
                  <span>Giày Thời Trang Unisex Fila Rockblunt</span>
                </td>
                <td class="cart-price">2.395.000₫</td>
                <td class="cart-quantity">
                  <input type="number" name="" id="" min="1" step="1" value="1" class="cart-input" />
                </td>
                <td class="cart-total">2.395.000₫</td>
                <td class="cart-remove">
                  <a href="#">
                    <i class="fa fa-times"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="cart-info">
                  <img src="././public/images/pro-detail-1-01-small.avif" alt="" />
                  <span>Giày Thời Trang Unisex Fila RockbluntRockblunt</span>
                </td>
                <td class="cart-price">2.395.000₫</td>
                <td class="cart-quantity">
                  <input type="number" name="" id="" min="1" step="1" value="1" class="cart-input" />
                </td>
                <td class="cart-total">2.395.000₫</td>
                <td class="cart-remove">
                  <a href="#">
                    <i class="fa fa-times"></i>
                  </a>
                </td>
              </tr> -->
            </tbody>
          </table>
          <div class="cart-checkout-button">
            <button class="cart-checkout-submit">
              <a href="#">Tiếp tục mua hàng</a>
            </button>
            <button class="cart-checkout-submit" name="btn_update_cart">
              <a href="#">Cập nhật giỏ hàng</a>
            </button>
          </div>
        </form>

        <div class="cart-checkout">
          <div class="cart-checkout-header">
            <div class="cart-checkout-container">
              <h4 class="heading-small">Tóm tắt giỏ hàng</h4>
            </div>
          </div>
          <div class="cart-checkout-container">
            <div class="cart-checkout-content">
              <div class="cart-checkout-subtotal cart-checkout-content-item">
                <span>Tổng phụ</span>
                <span><?= number_format($total, "0", ",", ".") ?>đ</span>
              </div>
              <div class="cart-checkout-ship cart-checkout-content-item">
                <span>Shipping</span>
                <span>0đ</span>
              </div>
            </div>
            <div class="cart-checkout-bottom">
              <div class="cart-checkout-total">
                <h3>Tổng cộng</h3>
                <h3><?= number_format($total, "0", ",", ".") ?>đ</h3>
              </div>
              <a href="index.php?act=bill" class="cart-checkout-submit full">Thanh toán</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>