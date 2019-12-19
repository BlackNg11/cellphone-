<?php
  define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
  define('TITLE', 'HOME');
  require_once DOC_ROOT.'\common\php\common.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php insertHeadInfo();  ?>
    <?php insertCSS('/top/css/style.css');  ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  </head>
  <body>
    <!-- Cart -->
    <div class="js-cart cart cart--disable">
      <div class="js-cartView cart__btn" data-count="3">
        <i class="fas fa-shopping-cart"></i>
      </div>
    </div>
    <!-- Notification -->
    <div class="js-notification notification" data-error='0'>
      <div class="notification-content">
        <div class="js-notiMessage notification-content-message"></div>
      </div>
    </div>
    <!-- HEADER -->
    <?php include_once DOC_ROOT.'\common\inc\header.inc'; ?>
    <!-- BANNER -->
    <?php include_once DOC_ROOT.'\common\inc\carousel.inc'; ?>
    <!-- ITEM LIST -->
    <div class="Responsive">
      <div class="product">
        <div class="product-head">
          <div class="product-head__txt">
            <a href="#">Ban Chay</a>
          </div>
          <div class="product-head__tag">
            <a href="#">Iphone</a>
            <a href="#">Iphone</a>
            <a href="#">Iphone</a>
            <a href="#">Iphone</a>
            <a href="#">Iphone</a>
            <a href="#">Iphone</a>
          </div>
        </div>
        <div class="product-content">
          <div class="product-content-list">
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 14 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 15 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
            <div class="product-content-item">
              <div class="product-content-item__img">
                <img src="\top\img\product_item_img.webp" alt="Iphone">
              </div>
              <div class="product-content-item-detail">
                <p class="product-content-item-detail__name">Iphone 11 Chinh Hang</p>
                <p class="product-content-item-detail__price">23.000.000 d<span>28.000.000 d</span></p>
                <p class="product-content-item-detail__txt">Thu cu doi moi | pro | max - gia thu tot nhat thi truong va <strong>1 km</strong> khac</p>
              </div>
              <div class="product-content-item-gift">
                <div class="js-productGiftButton product-content-item-gift__btn">
                  <i class="fas fa-gift"></i> Qua Tang
                </div>
                <div class="product-content-item-gift-detail">
                  <p class="product-content-item-gift-detail__ttl">Tra gop 0%:</p>
                  <p class="product-content-item-gift-detail__txt">Tra gop lai xuat 0%</p>
                  <p class="product-content-item-gift-detail__ttl">Chuyen trinh khuyen mai:</p>
                  <p class="product-content-item-gift-detail__txt">Giam 200.000 khi mua tai nghe Airpod</p>
                  <p class="product-content-item-gift-detail__txt">Thu cu doi moi Iphone 11</p>
                  <p class="product-content-item-gift-detail__ttl">Nham them khuyen mai sau:</p>
                  <p class="product-content-item-gift-detail__txt">Tu 1-30/11 Giam 500.000 khi tra gop 0% tai chinh HomeCredit</p>
                </div>
              </div>
              <div class="product-content-item-cart">
                <div class="js-productCartBtn product-content-item-cart__btn">
                  <i class="fas fa-cart-plus"></i> Them Vao Gio Hang
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- FOOTER -->
    <footer></footer>

    <?php insertJS('/top/js/script.js');  ?>

  </body>
</html>
