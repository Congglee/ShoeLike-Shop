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
        <h3 class="filter-title"></h3>
        <?php
        // include "products_filter.php";
        ?>
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
          <form action="index.php?act=products" class="product-col-form">
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=gender&condition=Nam">Nam</a>
            </div>
            <div class=" products-col-item">
              <a href="index.php?act=products_field&field=gender&condition=Nữ">Nữ</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=gender&condition=Unisex">Unisex</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=gender&condition=Bé Trai">Bé trai</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=gender&condition=Bé Gái">Bé Gái</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=gender&condition=Trẻ Em">Trẻ Em</a>
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
          <form name="gender" action="" class="product-col-form">
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=size&condition=34">34</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=size&condition=35">35</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=size&condition=36">36</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=size&condition=37">37</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=size&condition=38">38</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=size&condition=39">39</a>
            </div>
            <div class="products-col-item">
              <a href="index.php?act=products_field&field=size&condition=40">40</a>
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
        $param = "";
        foreach ($list_pro_keyword as $lpkw) {
          extract($lpkw);
          $link_product = "index.php?act=product_detail&id_pro=" . $id_pro;
          $product_img = $img_path_view . $image;
          $percent_discount = number_format(($price_sale - $price) / $price * 100);
          // $param = "product_keyword&keyword=" . $_SESSION['keyword'] . "&";
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
      </div>
      <div class="products-pages">
        <?php
        // include "products_pages.php";
        ?>
        <!-- <a href="index.php?act=products&page=2" class="products-pages-item">2</a>
        <a href="index.php?act=products&page=3" class="products-pages-item">3</a>
        <a href="index.php?act=products&page=4" class="products-pages-item">4</a> -->
      </div>
    </article>
  </section>
</main>