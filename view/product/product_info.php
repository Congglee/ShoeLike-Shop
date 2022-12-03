<section class="product-info">
  <div class="container">
    <div class="product-info-tab">
      <button class="product-info-btn" onclick="openTabProInfo(event, 'description')" id="defaultBtnOpen">
        Thông tin sản phẩm
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'returnPolicy')">
        Chính sách đổi trả
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'term')">
        ĐIỀU KHOẢN & ĐIỀU KIỆN
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'review')">
        Review (<?= $countComment ?>)
      </button>
    </div>
    <div class="product-info-content" id="description">
      <div class="product-info-description">
        <!-- <h3 class="heading-medium product-info-title">
            GIÀY THỜI TRANG UNISEX FILA ROCKBLUNT
          </h3>
          <img src="././public/images/fila-desc.webp" alt="" />
          <p>
            Sản phẩm thuộc Bộ Sưu Tập Fila Explorer. Phần thân giày được
            thiết kế với chất liệu tối ưu hóa độ nhạy với đường mòn khi di
            chuyển với logo EXPL, đồng thời cung cấp sự bền bỉ khi hoạt
            động.
          </p>
          <h3 class="heading-medium product-info-title-left">Thông số</h3>
          <ul>
            <li>Thân trên: 56.2% tổng hợp / 43.8% dệt may</li>
            <li>Đế giày: EVA / cao su</li>
          </ul> -->

        <!-- <h3 class="heading-medium product-info-title-left">
         GIÀY THỜI TRANG NỮ PUMA CITY RIDER
          </h3>
          <p>
           Thiết kế đường phố trên dòng giày Rider đặc trưng của PUMA, phiên bản City này đã sẵn sàng cho những bước tiến hiện đại. Với lớp lưới thoáng khí phía trên kết hợp với chất liệu da lộn cổ điển và màu sắc tươi sáng bắt mắt, những đôi giày này còn được trang bị lớp đệm êm ái cho bạn tận hưởng cảm giác thoải mái suốt cả ngày dài. Thiết kế cổ điển, phù hợp với mọi giới tính, bạn đã sẵn sàng thể hiện phong cách trên mọi nẻo đường?
          </p>
          <h3 class="heading-medium product-info-title-left">CÁC TÍNH NĂNG KHÁC</h3>
          <p>
          IMEVA: Một loại chất liệu của PUMA cho cảm giác nhẹ và thoải mái
          </p>
          <h3 class="heading-medium product-info-title-left">THÔNG SỐ</h3>
          <ul>
            <li>Lycra, phối lưới, da lộn và lớp phủ tổng hợp</li>
            <li>Đế giữa IMEVA</li>
            <li>Đế giày cao su</li>
            <li>Giày có dây thắt</li>
            <li>PUMA Wordmark ở lưỡi gà</li>
          </ul> -->
        <p>
          <?= htmlspecialchars_decode($description) ?>
        </p>
      </div>
    </div>

    <div class="product-info-policy product-info-content" id="returnPolicy"></div>

    <div class="product-info-term product-info-content" id="terms"></div>

    <?php
    include "comment/comment.php";
    ?>
  </div>
</section>