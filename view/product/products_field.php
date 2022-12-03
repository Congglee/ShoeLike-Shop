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
        <?php
        include "products_filter.php";
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
        $param = "";
        if (isset($_GET['field']) && ($_GET['field'] != "") && isset($_GET['sort']) && ($_GET['sort'] != "")) {
          // $field = isset($_GET['field']) ? $_GET['field'] : "";
          // $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
          $param = "products_field&field=" . $field . "&sort=" . $sort . "&";
          if ($field == "price" && $sort == "desc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
        ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field == "price" && $sort == "asc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field == "pro_name" && $sort == "asc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field == "pro_name" && $sort == "desc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field == "views" && $sort == "desc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          } else if ($field == "id_pro" && $sort == "asc") {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
            <?php
            }
          }
        } else if (isset($_GET['field']) && ($_GET['field'] != "") && isset($_GET['condition']) && ($_GET['condition'] != "")) {
          $param = "products_field&field=" . $field . "&condition=" . $condition . "&";
          if ($field == "special" && $condition == 1) {
            foreach ($list_pro_field as $lpf) {
              extract($lpf);
            ?>
              <?php
              include "products_foreach.php";
              ?>
        <?php
            }
          }
        }
        ?>
      </div>
      <div class="products-pages">
        <?php
        include "products_pages.php";
        ?>
      </div>
    </article>
  </section>
</main>