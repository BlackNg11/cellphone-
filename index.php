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
  </head>
  <body>
    <header>
      <div class="Responsive">
        <div class="Menu">
          <div class="Menu-branch">
            <div class="Menu-branch__logo">
              <img src="/common/img/logo.webp" alt="">
            </div>
            <div class="Menu-branch-search">
              <div class="Menu-branch-search-location">
                <p class="Menu-branch-search-location_txt">Ha Noi</p>
              </div>
              <div class="Menu-branch-search-input">
                <input type="text" placeholder="tim kiem">
              </div>
              <div class="Menu-branch-search-btn">
                <i class="fa fa-search"></i>
              </div>
            </div>
          </div>
          <div class="Menu-list">
            <div class="Menu-list-item">
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="Menu-list-item-content__txt">Dien Thoai</div>
              </div>
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="Menu-list-item-content__txt">Tablet</div>
              </div>
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="Menu-list-item-content__txt">Dien Thoai</div>
              </div>
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="Menu-list-item-content__txt">Dien Thoai</div>
              </div>
              <div class="Menu-list-item-content">
                <div class="Menu-list-item-content__icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="Menu-list-item-content__txt">Dien Thoai</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>
  </body>
</html>
