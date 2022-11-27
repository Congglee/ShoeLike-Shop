<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShoeLike</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="././public/css/style.css" />
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header-top">
          <div class="header-language dropdow">
            <div class="header-language-select">
              <img src="././public/images/vn-logo.webp" alt="" class="header-nation" />
              <span>Tiếng Việt <i class="fa-solid fa-chevron-down"></i></span>
            </div>
            <ul class="header-language-list dropdow-list">
              <li class="header-language-item dropdow-item">
                <img src="././public/images/vn-logo.webp" alt="" class="header-nation" />
                <a href="#" class="dropdow-link">Tiếng Việt</a>
              </li>
              <li class="header-language-item dropdow-item">
                <img src="././public/images/usa-logo.webp" alt="" class="header-nation" />
                <a href="#" class="dropdow-link">English</a>
              </li>
            </ul>
          </div>

          <div class="header-auth">
            <a href="#" class="header-auth-text sign-up-offer">
              ĐĂNG KÝ VÀ NHẬN 100.000 VNĐ
            </a>


            <div class="dropdow">
              <a href="#" class="header-auth-text account">Tài khoản
                <i class="header-auth-text fa-solid fa-chevron-down"></i></a>
              <?php
              if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
              ?>
                <ul class="dropdow-list">
                  <?php
                  if ($role == 0) {
                  ?>
                    <li class="dropdow-item">
                      <a href="#" class="dropdow-link signup">Hello <?= $id_user ?></a>
                    </li>
                    <li class="dropdow-item">
                      <a href="#" class="dropdow-link signup">Tài khoản</a>
                    </li>
                    <li class="dropdow-item">
                      <a href="#" class="dropdow-link signup">Đơn hàng của tôi</a>
                    </li>
                    <li class="dropdow-item">
                      <a href="index.php?act=signout" class="dropdow-link signin">Đăng xuất</a>
                    </li>
                  <?php
                  } else {
                  ?>
                    <li class="dropdow-item">
                      <a href="#" class="dropdow-link signup">Hello <?= $id_user ?></a>
                    </li>
                    <li class="dropdow-item">
                      <a href="#" class="dropdow-link signup">Quản lý website</a>
                    </li>
                    <li class="dropdow-item">
                      <a href="index.php?act=signout" class="dropdow-link signin">Đăng xuất</a>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
              <?php
              } else {
              ?>
                <ul class="dropdow-list">
                  <li class="dropdow-item">
                    <a href="index.php?act=signup" class="dropdow-link signup">Đăng ký</a>
                  </li>
                  <li class="dropdow-item">
                    <a href="index.php?act=signin" class="dropdow-link signin">Đăng nhập</a>
                  </li>
                </ul>
              <?php
              }
              ?>
            </div>

            <a href="#" class="header-auth-text store-system">Hệ Thống 19 Cửa Hàng Toàn Quốc
              <i class="fa-solid fa-location-dot"></i></a>
          </div>
        </div>

        <div class="header-content">
          <a href="index.php" class="header-logo-link">
            <img srcset="././public/images/logo.png 2x" alt="" class="header-logo" />
          </a>
          <div class="header-feature">
            <div class="header-search">
              <form action="#" class="header-search-form">
                <input type="text" class="header-search-input" placeholder="Bạn đang tìm gì ..." />
                <button class="header-search-submit button button-green">
                  <i class="fa-sharp fa-solid fa-magnifying-glass header-search-icon"></i>
                  Tìm kiếm
                </button>
              </form>
            </div>

            <div class="header-cart">
              <?php
              if (isset($_SESSION['cart']) && ($_SESSION['cart'] > 0)) {
                echo " <a href='index.php?act=cart' class='header-cart-submit button        button-white'>
                       <i class='fa-solid fa-cart-shopping header-cart-icon'></i>
                      Giỏ hàng (" . count($_SESSION['cart']) . ")
                     </a>";
              } else {
                echo "<a href='index.php?act=cart' class='header-cart-submit button button-white'>
                <i class='fa-solid fa-cart-shopping header-cart-icon'></i>
                Giỏ hàng (0)
              </a>";
              }
              ?>
              <!-- <a href="index.php?act=cart" class="header-cart-submit button button-white">
                <i class="fa-solid fa-cart-shopping header-cart-icon"></i>
                Giỏ hàng (0)
              </a> -->
            </div>
          </div>
        </div>

        <div class="header-menu">
          <ul class="menu">
            <li class="menu-item">
              <a href="index.php" class="menu-link">Trang chủ</a>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="index.php?act=products" class="menu-link">Giày <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">Giày Dép</h2>
                      <a href="index.php?act=products" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <?php
                    foreach ($list_cate as $lc) {
                      extract($lc);
                    ?>
                      <div class="dropdow-menu-item">
                        <a href="#"><?= $cate_name ?></a>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img.avif" alt="" class="dropdow-menu-img" />
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img-02.avif" alt="" class="dropdow-menu-img" />
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="#" class="menu-link">Nam <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">Giày Dép</h2>
                      <a href="#" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <?php
                    foreach ($list_cate as $lc) {
                      extract($lc);
                    ?>
                      <div class="dropdow-menu-item">
                        <a href="#"><?= $cate_name ?></a>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img.avif" alt="" class="dropdow-menu-img" />
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img-02.avif" alt="" class="dropdow-menu-img" />
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="#" class="menu-link">Nữ <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">Giày Dép</h2>
                      <a href="#" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">Sản phẩm mới</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">Giày thời trang</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">Giày chạy bộ</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">Giày luyện tập</a>
                    </div>
                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img-03.avif" alt="" class="dropdow-menu-img" />
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img-04.avif" alt="" class="dropdow-menu-img" />
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">Trẻ em</a>
            </li>
            <li class="menu-item">
              <div class="dropdow-menu">
                <a href="#" class="menu-link">Thương hiệu <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdow-menu-list">
                  <div class="dropdow-menu-category">
                    <div class="dropdow-menu-info">
                      <h2 class="dropdow-menu-title">A - Z</h2>
                      <a href="#" class="dropdow-menu-link">Xem tất cả</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">ADIDAS</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">COLUMBIA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">CONVERSE</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">FILA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">JORDAN</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">HOKA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">NIKE</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">NEW BALANCE</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">PUMA</a>
                    </div>
                    <div class="dropdow-menu-item">
                      <a href="#">UNDER ARMOR</a>
                    </div>
                  </div>
                  <div class="dropdow-menu-images">
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img-05.avif" alt="" class="dropdow-menu-img" />
                    </a>
                    <a href="#" class="dropdow-menu-image">
                      <img src="././public/images/dropdow-menu-img.avif" alt="" class="dropdow-menu-img" />
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">Giới thiệu</a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">Tin tức</a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">Liên hệ</a>
            </li>
          </ul>

          <a href="#" class="promo button button-red">Ưu đãi</a>
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <div class="policy">
            <div class="policy-item">
              <a href="#" class="policy-image">
                <img src="././public/images/truck-icon.webp" alt="" class="policy-img" />
              </a>
              <a href="#" class="policy-link">MIỄN PHÍ GIAO HÀNG ĐƠN TỪ 699K</a>
            </div>
            <div class="policy-item">
              <a href="#" class="policy-image">
                <img src="././public/images/trade-icon.webp" alt="" class="policy-img" />
              </a>
              <a href="#" class="policy-link">15 NGÀY ĐỔI TRẢ DỄ DÀNG</a>
            </div>
            <div class="policy-item">
              <a href="#" class="policy-image">
                <img src="././public/images/installment-icon.webp" alt="" class="policy-img" />
              </a>
              <a href="#" class="policy-link">MUA HÀNG HIỆU TRẢ GÓP 0%</a>
            </div>
          </div>
        </div>
      </div>
    </header>