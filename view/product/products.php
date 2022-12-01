<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Giày</a>
      </div>
    </div>
  </section>

  <section class="products-banner">
    <div class="products-container">
      <img src="././public/images/product-banner.webp" alt="" class="products-banner-image" />
    </div>
  </section>

  <section class="products-filter">
    <div class="products-container">
      <div class="filter">
        <h3 class="filter-title">SẮP XẾP THEO</h3>
        <select name="" id="" class="filter-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
          <option value="">Bán chạy nhất</option>
          <option value="">Mới nhất</option>
          <option value="">Giá giảm dần</option>
          <option value="">Cũ đến mới</option>
          <option value="" selected>Sắp xếp</option>
          <option value="">A - Z</option>
          <option value="">Z - A</option>
        </select>
      </div>
    </div>
  </section>

  <section class="products products-container">
    <aside class="aside">
      <div class="products-col">
        <div class="products-col-header">
          <i class="fa-sharp fa-solid fa-caret-down"></i>
          <h3 class="products-col-heading">Giới tính</h3>
        </div>
        <div class="products-col-list">
          <form action="" class="product-col-form">
            <div class="products-col-item">
              <input type="checkbox" class=" products-col-input" id="male" />
              <label for="male" class="products-col-label">Nam</label>
            </div>
            <div class=" products-col-item">
              <input type="checkbox" class="products-col-input" id="female" />
              <label for="female" class="products-col-label">Nữ</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="unisex" />
              <label for="unisex" class="products-col-label">Unisex</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="male-boy" />
              <label for="male-boy" class="products-col-label">Bé trai</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="female-girl" />
              <label for="female-girl" class="products-col-label">Bé gái</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="kid" />
              <label for="kid" class="products-col-label">Trẻ em</label>
            </div>
          </form>
        </div>
      </div>
      <?php
      include "products_category.php";
      ?>
      <div class="products-col">
        <div class="products-col-header">
          <i class="fa-sharp fa-solid fa-caret-down"></i>
          <h3 class="products-col-heading">Kích thước</h3>
        </div>
        <div class="products-col-list">
          <form action="" class="product-col-form">
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="34" />
              <label for="34" class="products-col-label">34</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="35" />
              <label for="35" class="products-col-label">35</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="36" />
              <label for="36" class="products-col-label">36</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="37" />
              <label for="37" class="products-col-label">37</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="38" />
              <label for="38" class="products-col-label">38</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="39" />
              <label for="39" class="products-col-label">39</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="40" />
              <label for="40" class="products-col-label">40</label>
            </div>
          </form>
        </div>
      </div>
      <?php
      include "products_brand.php";
      ?>
      <div class="products-col">
        <div class="products-col-header">
          <i class="fa-sharp fa-solid fa-caret-down"></i>
          <h3 class="products-col-heading">Giá</h3>
        </div>
        <div class="products-col-list">
          <form action="" class="product-col-form">
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="500-1000" />
              <label for="500-1000" class="products-col-label">500.000đ - 1.000.000đ</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="1000-2000" />
              <label for="1000-2000" class="products-col-label">1.000.000đ - 2.000.000đ</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="2000-3000" />
              <label for="2000-3000" class="products-col-label">2.000.000đ - 3.000.000đ</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="3000-4000" />
              <label for="3000-4000" class="products-col-label">3.000.000đ - 4.000.000đ</label>
            </div>
            <div class="products-col-item">
              <input type="checkbox" class="products-col-input" id="4000-5000" />
              <label for="4000-5000" class="products-col-label">4.000.000đ - 5.000.000đ</label>
            </div>
          </form>
        </div>
      </div>
    </aside>
    <article class="article">
      <div class="products-list">
        <?php
        foreach ($list_pro as $lp) {
          extract($lp);
          $link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
          $product_img = $img_path_view . $image;
          $percent_discount = number_format(($price_sale - $price) / $price * 100);
        ?>
          <div class="products-item product-item">
            <div class="products-image product-image">
              <a href="<?= $link_product ?>" class="products-link">
                <img src="<?= $product_img ?>" alt="" />
              </a>
              <?php
              if ($price_sale != 0) {
                echo "<div class='product-bestsell-tag product-tag'>" . $percent_discount . "%</div>";
              } else if ($id_cate == 1) {
                echo "<div class='product-new-tag product-tag'>Mới</div>";
              }
              ?>
            </div>
            <div class="products-content product-content">
              <h3 class="products-title">
                <a href="<?= $link_product ?>"> <?= $pro_name ?> </a>
              </h3>
              <div class="products-cost product-cost">
                <?php
                if ($price_sale != 0) {
                  echo "<span class='products-price products-price-sale'>" . number_format($price_sale, 0, ",", ".") . "đ</span>";
                  echo "<span class='products-price-old'> " . number_format($price, 0, ",", ".") . "đ</span>";
                } else {
                  echo "<span class='products-price'>" . number_format($price, 0, ",", ".") . "đ</span>";
                }
                ?>
              </div>
              <div class="products-info">
                <a href="<?= $link_product ?>" class="products-info-link">
                  <i class="fa-regular fa-circle-info"></i>
                </a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
        <!-- <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-2.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Unisex Fila Webseeker </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price products-price">2.395.000₫</span>
              <span class="products-prices-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-3.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Nữ Nike Air Max Dawn </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price products-price">3.519.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-4.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#">
                Giày Chạy Bộ Nam Under Armour HOVR Infinite 4
              </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price products-price">3.795.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/product-5.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">-50%</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#">
                Giày Chạy Bộ Nam New Balance Fuelcell Racer
              </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price products-price products-price-sale">2.248.000₫</span>
              <span class="products-price-old products-price-old">4.495.000₫</span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-1.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Unisex Fila Rockblunt Fila </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price product-price">2.395.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-1.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Unisex Fila Rockblunt Fila </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price product-price">2.395.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-1.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Unisex Fila Rockblunt Fila </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price product-price">2.395.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-1.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Unisex Fila Rockblunt Fila </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price product-price">2.395.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-1.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Unisex Fila Rockblunt Fila </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price product-price">2.395.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="products-item product-item">
          <div class="products-image product-image">
            <a href="#" class="products-link">
              <img src="././public/images/products-1.webp" alt="" />
            </a>
            <div class="products-new-tag products-tag">Mới</div>
          </div>
          <div class="products-content product-content">
            <h3 class="products-title">
              <a href="#"> Giày Thời Trang Unisex Fila Rockblunt Fila </a>
            </h3>
            <div class="products-cost product-cost">
              <span class="products-price product-price">2.395.000₫</span>
              <span class="products-price-old"></span>
            </div>
            <div class="products-info">
              <a href="#" class="products-info-link">
                <i class="fa-regular fa-circle-info"></i>
              </a>
            </div>
          </div>
        </div> -->
      </div>
      <div class="products-pages">
        <a href="#" class="products-pages-item active">1</a>
        <a href="#" class="products-pages-item">2</a>
        <a href="#" class="products-pages-item">3</a>
        <a href="#" class="products-pages-item">4</a>
      </div>
    </article>
  </section>
</main>