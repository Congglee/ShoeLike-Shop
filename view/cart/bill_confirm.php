<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Giỏ hàng</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Xác nhận</a>
      </div>
    </div>
  </section>

  <section class="ship-info">
    <div class="container">
      <div class="ship-info-container">
        <div class="ship-info-confirm">
          <div class="ship-info-contact ship-info-confirm-list">
            <div class="ship-info-contact-list ship-info-confirm-item">
              <h3>Cảm ơn quý khách đã đặt hàng</h3>
            </div>
          </div>

          <div class="ship-info-method-shipping ship-info-confirm-list">
            <h3>Mã đơn hàng</h3>
            <div class="ship-info-method-shipping-list ship-info-confirm-item">
              <div class="ship-info-method-shipping-item">
                <div class="ship-info-method-shipping-radio">
                  <?php
                  if (isset($_SESSION['id_order']) && ($_SESSION['id_order'] > 0)) {
                    // $list_order = showOrder($_SESSION['id_order']);
                    $list_order = showOrder2($_SESSION['id_order']);
                    // var_dump($list_order);
                    extract($list_order);
                    if (count($list_order) > 0) {
                  ?>
                      <label for="ship_radio">
                        <?= $id_bill ?>
                      </label>
                  <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="ship-info-method-payment ship-info-confirm-list">
            <h3>Thông tin đặt hàng</h3>
            <div class="ship-info-contact-list ship-info-confirm-item">
              <?php
              if (isset($_SESSION['id_order']) && ($_SESSION['id_order'] > 0)) {
                // $list_order = showOrder($_SESSION['id_order']);
                $list_order = showOrder2($_SESSION['id_order']);
                // var_dump($list_order);
                extract($list_order);
                if (count($list_order) > 0) {
              ?>
                  <div class="ship-info-contact-item">
                    <span class="ship-info-contact-title">Người đặt hàng</span>
                    <!-- <span class="ship-info-contact-content"><?= $list_order[0]['order_name'] ?></span> -->
                    <span class="ship-info-contact-content"><?= $order_name ?></span>
                  </div>
                  <div class="ship-info-contact-item">
                    <span class="ship-info-contact-title">Vận chuyển tới</span>
                    <!-- <span class="ship-info-contact-content">
                      <?= $list_order[0]['order_address'] ?>
                    </span> -->
                    <span class="ship-info-contact-content"><?= $order_address ?></span>
                  </div>
                  <div class="ship-info-contact-item">
                    <span class="ship-info-contact-title">Email</span>
                    <!-- <span class="ship-info-contact-content">
                      <?= $list_order[0]['order_email'] ?>
                    </span> -->
                    <span class="ship-info-contact-content"><?= $order_email ?></span>
                  </div>
                  <div class="ship-info-contact-item">
                    <span class="ship-info-contact-title">Điện thoại</span>
                    <!-- <span class="ship-info-contact-content">
                      <?= $list_order[0]['order_address'] ?> </span> -->
                    <span class="ship-info-contact-content"><?= $order_phone ?></span>
                  </div>
                  <div class="ship-info-contact-item">
                    <span class="ship-info-contact-title">Tổng giá tiền</span>
                    <!-- <span class="ship-info-contact-content">
                      <?= number_format($list_order[0]['total_order'], "0", ",", ".") ?>đ</span> -->
                    <span class="ship-info-contact-content"><?= number_format($total_order, "0", ",", ".") ?>đ</span>
                  </div>
                  <div class="ship-info-contact-item">
                    <span class="ship-info-contact-title">Phương thức thanh toán</span>
                    <span class="ship-info-contact-content">
                      <?php
                      if ($payment == 1) {
                        echo "Chuyển khoản qua ngân hàng";
                      } else if ($payment == 2) {
                        echo "Thanh toán trực tiếp";
                      }
                      ?>
                    </span>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>

          <button class="ship-info-confirm-submit">
            Quan lại trang chủ
          </button>
        </div>

        <div class="ship-info-bill ship-info-confirm-bill">
          <?php
          if (isset($_SESSION['id_order']) && ($_SESSION['id_order'] > 0)) {
            $list_cart = showOrderDetail($_SESSION['id_order']);
            if (isset($list_cart) && (count($list_cart) > 0)) {
              $total = 0;
              $i = 0;
              foreach ($list_cart as $lc) {
                $cart_image = $img_path_view . $lc['image'];
                $into_money = $lc['price'] * $lc['quantity'];
                $total += $into_money;
          ?>
                <div class="bill-header">
                  <img src="<?= $cart_image ?>" alt="" class="bill-image" />
                  <div class="bill-product">
                    <h3><?= $lc['name'] ?></h3>
                    <span>Số lượng: <?= $lc['quantity'] ?></span>
                  </div>
                  <div class="bill-price">
                    <span><?= number_format($lc['price'], "0", ",", ".") ?>đ</span>
                  </div>
                </div>
            <?php
              }
            }
          } else {
            ?>
            <div class="bill-header">
              <img src="" alt="" class=" bill-image" />
              <div class="bill-product">
                <h3></h3>
                <span>Số lượng: </span>
              </div>
              <div class="bill-price">
                <span>đ</span>
              </div>
            </div>
          <?php
          }
          ?>
          <div class="bill-content">
            <div class="bill-content-item">
              <span> Giá tạm tính</span>
              <span><?= number_format($total, "0", ",", ".") ?>đ</span>
            </div>
            <div class="bill-content-item">
              <span>Shipping</span>
              <span></span>
            </div>
          </div>
          <div class="bill-bottom">
            <div class="bill-total">
              <span class="bill-total-title">Tổng cộng</span>
              <span class="bill-total-unit">VND
                <span class="bill-total-money"><?= number_format($total, "0", ",", ".") ?>đ</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>