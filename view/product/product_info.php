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
        Review (0)
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
        <p>
          <?= $description ?>
        </p>
      </div>
    </div>

    <div class="product-info-policy product-info-content" id="returnPolicy"></div>

    <div class="product-info-term product-info-content" id="terms"></div>

    <div class="product-info-content" id="review">
      <div class="product-info-review">
        <div class="product-info-review-user">
          <img src="././public/images/user.jpg" alt="" class="product-info-review-image" />
          <div class="product-info-review-content">
            <div class="product-info-review-name">
              <h4>Jonh Doe</h4>
              <span>- 01 Jan 2045</span>
            </div>
            <div class="product-info-review-stars">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <p class="product-info-review-text">
              Diam amet duo labore stet elitr ea clita ipsum, tempor
              labore accusam ipsum et no at. Kasd diam tempor rebum
              magna dolores sed sed eirmod ipsum.
            </p>
          </div>
        </div>
        <div class="product-info-review-form">
          <form action="">
            <h3 class="product-info-review-title">Để lại đánh giá</h3>
            <div class="product-info-review-rate">
              <h3>Đánh giá của bạn *:</h3>
              <div class="product-info-review-star">
                <input type="radio" id="star5" name="danh_gia" value="5" />
                <label class="full" for="star5" title="Awesome - 5 stars"></label>

                <input type="radio" id="star4" name="danh_gia" value="4" />
                <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                <input type="radio" id="star3" name="danh_gia" value="3" />
                <label class="full" for="star3" title="Meh - 3 stars"></label>

                <input type="radio" id="star2" name="danh_gia" value="2" />
                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                <input type="radio" id="star1" name="danh_gia" value="1" />
                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
              </div>
            </div>
            <div class="product-info-review-comment">
              <label for="">Bình luận của bạn *</label>
              <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button class="product-info-review-submit">
              Để lại đánh giá của bạn
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>