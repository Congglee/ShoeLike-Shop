<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Tài khoản</a>
      </div>
    </div>
  </section>

  <section class="user">
    <div class="container">
      <div class="user-container">
        <aside class="user-aside">
          <div class="user-column">
            <h3 class="user-title">Đơn hàng</h3>
            <div class="user-list">
              <div class="user-item">
                <a href="index.php?act=user_info" class="user-link">Tài khoản</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=user_bill" class="user-link active">Đơn hàng của tôi</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=user_password" class="user-link">Đổi mật khẩu</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=signout" class="user-link">Đăng xuất</a>
              </div>
            </div>
          </div>
        </aside>
        <article class="user-article">
          <div action="" class="user-bill user-form-layout">
            <div class="user-bill-header">
              <h2>Lịch sử đơn hàng</h2>
            </div>

            <table class="user-bill-table">
              <thead class="user-bill-thead">
                <tr>
                  <th>Đơn hàng</th>
                  <th>Ngày</th>
                  <th>Tình trạng thanh toán</th>
                  <th>Tình trạng đơn hàng</th>
                  <th>Tổng cộng</th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="user-bill-tbody">
                <?php
                if (is_array($list_order)) {
                  foreach ($list_order as $lo) {
                    extract($lo);
                    $user_detail_order = "index.php?act=user_bill_detail&id_order=" . $id_order;
                    $user_delete_order = "index.php?act=user_bill_delete&id_order=" . $id_order;
                ?>
                    <tr>
                      <td>
                        <a href="<?= $user_detail_order ?>" class="user-bill-link"><?= $id_bill ?></a>
                      </td>
                      <td>
                        <span><?= $date ?></span>
                      </td>
                      <td>
                        <span>
                          <?php
                          if ($payment == 2) {
                            echo "Chưa thanh toán";
                          } else if ($payment == 1 && $status == 0) {
                            echo "Chưa thanh toán";
                          } else if ($payment == 1 && $status != 0) {
                            echo "Đã thanh toán";
                          }
                          ?>
                        </span>
                      </td>
                      <td>
                        <span>
                          <?php
                          if ($status == 0) {
                            echo "Chưa thực hiện";
                          } else if ($status == 1) {
                            echo "Đang xử lý";
                          } else if ($status == 2) {
                            echo "Đang giao hàng";
                          } else if ($status == 3) {
                            echo "Đã giao hàng";
                          }
                          ?>
                        </span>
                      </td>
                      <td>
                        <span><?= number_format($total_order, "0", ",", ".") ?>đ</span>
                      </td>
                      <td>
                        <a href="<?= $user_delete_order ?>" onclick="return confirm('Bạn có chắc là muốn hủy đơn hàng này chứ ?')" class="user-bill-remove">Hủy</a>
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
                <!-- <tr>
                  <td>
                    <a href="#" class="user-bill-link">SHOELIKE98726</a>
                  </td>
                  <td>
                    <span>28 Tháng 11, 2022</span>
                  </td>
                  <td>
                    <span>Chưa thanh toán</span>
                  </td>
                  <td>
                    <span>Chưa thực hiện</span>
                  </td>
                  <td>
                    <span>3.256.000đ</span>
                  </td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </article>
      </div>
    </div>
  </section>
</main>