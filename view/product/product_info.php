<section class="product-info">
  <div class="container">
    <div class="product-info-tab">
      <button class="product-info-btn" onclick="openTabProInfo(event, 'description')" id="defaultBtnOpen">
        Thông tin sản phẩm
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'returnPolicy')">
        Chính sách đổi trả
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'terms')">
        ĐIỀU KHOẢN & ĐIỀU KIỆN
      </button>
      <button class="product-info-btn" onclick="openTabProInfo(event, 'review')">
        Review (<?= $countComment ?>)
      </button>
    </div>
    <div class="product-info-content" id="description">
      <div class="product-info-description product-info-content-text">
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
GIÀY BÓNG ĐÁ UNISEX NIKE FW PHANTOM GT2 CLUB TF
          </h3>
           <p>
    Được thiết kế dựa trên dòng giày đá bóng đa năng Phantom GT, Nike Phantom GT2 TF thế hệ mới được cải tiến đáng kể trong thiết kế với kiểu dáng và chức năng, hỗ trợ cực tốt cho các động tác chuyền và sút bóng với độ chính xác cao.
        </p>
          <h3 class="heading-medium product-info-title-left">Kiểm soát tốt hơn</h3>
          <p>
  Phần upper được làm từ các hạt nổi Generative Texture phủ với mật độ dày hơn, tăng độ bám giúp người mang cảm nhận được bóng nhiều hơn và kiểm soát bóng tốt hơn
        </p>
        <h3 class="heading-medium product-info-title-left">Thiết kế bền bỉ</h3>
        <p>
Giày được làm từ da tổng hợp bền và dễ lau chùi, mang lại sự êm ái vừa vặn cho bàn chân
      </p>
          <h3 class="heading-medium product-info-title-left">THÔNG SỐ</h3>
          <ul>
             <li>Đinh giày được làm từ cao su cao cấp có thiết kế hình chữ nhật, được phân bố đều khắp mặt đế giúp đôi giày có thể bám sân tốt hơn trên mặt sân cỏ nhân tạo.</li>
          </ul> -->
        <p>
          <?= htmlspecialchars_decode($description) ?>
        </p>
      </div>
    </div>

    <div class="product-info-content" id="returnPolicy">
      <div class="product-info-policy product-info-content-text">
        <p>QUY ĐỊNH ĐỔI TRẢ HÀNG TẠI <span class="product-info-policy-bold">ShoeLike Việt Nam</span></p>
        <p class="product-info-policy-red product-info-policy-red"><span class="product-info-policy-italic">Lưu ý:</span> Trong thời gian diễn ra chương trình khuyến mãi, thời gian giao hàng có thể kéo dài hơn so với dự kiến. Rất mong Quý khách thông cảm cho sự bất tiện này.</p>
        <p><span class="product-info-policy-bold">Sản phẩm áp dụng:</span> Tất cả sản phẩm được giao dịch tại Website ShoeLike.</p>
        <h3 class="heading-medium product-info-title-left">Sản phẩm không áp dụng:</h3>
        <ul>
          <li>Đồ lót, đồ bơi, Phụ kiện,....</li>
          <li>Không áp dụng cho các sản phẩm mua trực tiếp tại hệ thống cửa hàng của ShoeLike</li>
        </ul>
        <p><span class="product-info-policy-bold">Thời gian đổi trả hàng:</span> Trong vòng <span class="product-info-policy-bold">15 ngày (đối với sản phẩm nguyên giá)</span> và <span class="product-info-policy-bold">05 ngày (đối với sản phẩm khuyến mãi)</span> kể từ ngày khách hàng nhận được sản phẩm cho đến khi ShoeLike nhận lại được sản phẩm (căn cứ theo dấu bưu điện).
          Tham khảo thêm thông tin tại <a href="#" class="product-info-policy-italic">Chính sách đổi trả hàng</a></p>
      </div>
    </div>

    <div class="product-info-content" id="terms">
      <div class="product-info-term product-info-term-text">
        <p>Quý khách vui lòng đọc kỹ <span class="product-info-policy-bold">Điều khoản và điều kiện mua hàng sau:</span></p>
        <ul>
          <li>ShoeLike
            có nhiều loại sản phẩm được hiển thị trên trang Web theo từng thời điểm.</li>
          <li>Các khác biệt nhỏ về màu sắc và biến thể khác trên sản phẩm có thể xảy ra do kết quả của quy trình thu nhận ảnh, công nghệ hiển thị và các lý do kỹ thuật khác. ShoeLike
            không chịu trách nhiệm cho các biến thể và sai khác này.</li>
        </ul>
        <p>Trường hợp gặp trục trặc trong quá trình đặt hàng, khách hàng vui lòng liên hệ bộ phận chăm sóc khách hàng qua các hình thức sau để được hướng dẫn xử lý.</p>
        <ul>
          <li>Tổng đài: 1900 63 64 01 (từ 09h00 đến 18h00 hàng ngày)</li>
          <li>Email Bộ phận Chăm Sóc Khách Hàng (Offline + Online): <span class="product-info-policy-bold">ce@ShoeLike
              .com.vn</span></li>
        </ul>
      </div>
    </div>

    <?php
    include "comment/comment.php";
    ?>
  </div>
</section>