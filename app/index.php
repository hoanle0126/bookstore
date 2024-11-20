<?php
include 'db.php';
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
    integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css file link -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- header section starts -->

  <header class="header">

    <div class="header-1">

      <a href="#" class="logo"> <i class="fas fa-book"></i> bookly</a>

      <form action="" class="search-form">
        <input type="search" name="" placeholder="Tìm kiếm ...." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div id="login-btn" class="fas fa-user"></div>
      </div>
    </div>

    <div class="header-2">
      <nav class="navbar">
        <a href="#home">Trang chủ</a>
        <a href="#featured">Nổi bật</a>
        <a href="#arrivals">sản phẩm</a>
        <a href="#reviews">Đánh giá</a>
        <a href="#contact">Liên hệ</a>
      </nav>
    </div>
  </header>

  <!-- header section ends -->

  <!-- bottom navbar -->

  <nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
  </nav>

  <!-- login form -->
  <div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
      <h3>đăng kí</h3>
      <span>email</span>
      <input type="email" name="" class="box" placeholder="Nhập email của bạn" id="">
      <span>mật khẩu</span>
      <input type="password" name="" class="box" placeholder="Nhập mật khẩu">
      <div class="checkbox">
        <input type="checkbox" name="" id="remember-me">
        <label for="remember-me">lưu đăng nhập</label>
      </div>
      <input type="submit" value="đăng kí" class="btn">
      <p>quên mật khẩu ? <a href="#">Nhấn vào đây</a></p>
      <p>không có tài khoản ? <a href="#">tạo một cái </a></p>
    </form>

  </div>

  <!-- home section starts -->

  <section class="home" id="home">

    <div class="row">

      <div class="content">
        <h3>giảm 25%</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, blanditiis soluta odit tempora magni eius
          reiciendis possimus.</p>
        <a href="#" class="btn">mua ngay</a>
      </div>

      <div class="swiper books-slider">
        <div class="swiper-wrapper wraper">
          <a href="#" class="swiper-slide"><img src="image/ảnh 1.jpg" alt=""></a>
          <a href="#" class="swiper-slide"><img src="image/ảnh 2.jpg" alt=""></a>
          <a href="#" class="swiper-slide"><img src="image/ảnh 3.jpg" alt=""></a>
          <a href="#" class="swiper-slide"><img src="image/ảnh 4.jpg" alt=""></a>
          <a href="#" class="swiper-slide"><img src="image/ảnh 5.jpg" alt=""></a>
          <a href="#" class="swiper-slide"><img src="image/ảnh 6.jpg" alt=""></a>
        </div>
        <img class="stand" src="image/stand.png" alt="">
      </div>
    </div>
  </section>

  <!-- home section ends -->

  <!-- icons section starts -->

  <section class="icons-container">

    <div class="icons">
      <i class="fas fa-plane"></i>
      <div class="content">
        <h3>miễn phí ship</h3>
        <p>Đơn hàng trên 100k</p>
      </div>
    </div>

    <div class="icons">
      <i class="fas fa-lock"></i>
      <div class="content">
        <h3>bảo mật thanh toán</h3>
        <p>100 thanh toán an toàn</p>
      </div>
    </div>

    <div class="icons">
      <i class="fas fa-redo-alt"></i>
      <div class="content">
        <h3>hoàn trả dễ dàng</h3>
        <p>hoàn trả trước 10 ngày</p>
      </div>
    </div>

    <div class="icons">
      <i class="fas fa-headset"></i>
      <div class="content">
        <h3>hỗ trợ 14/7</h3>
        <p>gọi mọi lúc</p>
      </div>
    </div>

  </section>

  <!-- icons section ends -->

  <!-- featured section starts -->

  <section class="featured" id="featured">

    <h1 class="heading"><span>Sách nổi bật</span></h1>

    <div class="swiper featured-slider">

      <div class="swiper-wrapper wraper">
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="<?= $row['image'] ?>" alt="">
            </div>
            <div class="content">
              <h3><?= $row['name'] ?></h3>
              <div class="price"><?= $row['price'] ?>k <span><?= $row['sales'] ?>k</span></div>
              <a href="#" class="btn">thêm vào giỏ hàng</a>
            </div>
          </div>
        <?php endwhile; ?>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>

  <!-- deal section starts -->

  <section class="deal">

    <div class="content">
      <h3>Giao dịch trong ngày</h3>
      <h1>Giảm 50%</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero accusantium earum sapiente.</p>
      <a href="#" class="btn">mua ngay</a>
    </div>

    <div class="image">
      <img src="image/ảnh 6.jpg" alt="">
    </div>

  </section>

  <!-- deal section ends -->

  <!-- footer section starts -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>Chi nhánh</h3>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Hanoi</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Saigon</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Dalat</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>HoiAn</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Danang</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Hue</a>
      </div>

      <div class="box">
        <h3>liên kết nhanh</h3>
        <a href="#"><i class="fas fa-arrow-right"></i>trang chủ</a>
        <a href="#"><i class="fas fa-arrow-right"></i>nổi bật</a>
        <a href="#"><i class="fas fa-arrow-right"></i>sản phẩm</a>
        <a href="#"><i class="fas fa-arrow-right"></i>đánh giá</a>
        <a href="#"><i class="fas fa-arrow-right"></i>blogs</a>
      </div>

      <div class="box">
        <h3>liên kết bổ sung</h3>
        <a href="#"><i class="fas fa-arrow-right"></i>thông tin tài khoản</a>
        <a href="#"><i class="fas fa-arrow-right"></i>hàng đã đặt</a>
        <a href="#"><i class="fas fa-arrow-right"></i>chính sách bảo mật</a>
        <a href="#"><i class="fas fa-arrow-right"></i>phương thức thanh toán</a>
        <a href="#"><i class="fas fa-arrow-right"></i>dịch vụ của chúng tôi</a>
      </div>

      <div class="box">
        <h3>thông tin liên hệ</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-789</a>
        <a href="#"><i class="fas fa-phone"></i>+321-456-987</a>
        <a href="#"><i class="fas fa-envelope"></i>huydh.22it@vku.udn.vn</a>
        <img src="image/worldmap.webp" class="map" alt="">
      </div>
    </div>

    <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-pinterest"></a>
    </div>

  </section>

  <!-- footer section ends -->











































  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- js file link -->
  <script src="script.js"></script>
</body>

</html>