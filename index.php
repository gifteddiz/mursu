<?php include './header.php'; ?>
<div class="banners">
  <div class="container">
    <div class="banners__slider">
      <div class="banners__slide">
        <img src="images/banners__1.jpg" />
      </div>
      <div class="banners__slide">
        <img src="images/banners__1.jpg" />
      </div>
    </div>
    <div class="banners__row">
      <div class="banners__el-2">
        <a href="#" class="banners__item">
          <img src="images/banners__2.jpg" />
        </a>
      </div>
      <div class="banners__el-2">
        <a href="#" class="banners__item">
          <img src="images/banners__3.jpg" />
        </a>
      </div>
    </div>
    <div class="banners__row">
      <div class="banners__el-4">
        <a href="#" class="banners__item">
          <img src="images/banners__empty.jpg" />
        </a>
      </div>
      <div class="banners__el-4">
        <a href="#" class="banners__item">
          <img src="images/banners__empty.jpg" />
        </a>
      </div>
      <div class="banners__el-4">
        <a href="#" class="banners__item">
          <img src="images/banners__4.jpg" />
          <div class="banners__overlay">
            Специальные<br />
            предложения
          </div>
        </a>
      </div>
      <div class="banners__el-4">
        <a href="#" class="banners__item">
          <img src="images/banners__5.jpg" />
          <div class="banners__overlay">
            Станьте<br />
            партнером
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="products-slider">
  <div class="container">
    <div class="products-slider__header">
      <h2 class="products-slider__header-h2">Новые поступления</h2>
      <a href="#" class="products-slider__header-all">Смотреть все</a>
    </div>
    <div class="products-slider__slider">
      <div class="products-slider__slide">
        <?php include './card.php'; ?>
      </div>
      <div class="products-slider__slide">
        <?php include './card.php'; ?>
      </div>
      <div class="products-slider__slide">
        <?php include './card.php'; ?>
      </div>
      <div class="products-slider__slide">
        <?php include './card.php'; ?>
      </div>
      <div class="products-slider__slide">
        <?php include './card.php'; ?>
      </div>
      <div class="products-slider__slide">
        <?php include './card.php'; ?>
      </div>
    </div>
  </div>
</div>
<div class="news">
  <div class="container">
    <div class="news__header">
      <h2 class="news__h2">Новости</h2>
      <a href="#" class="news__all">Смотреть все</a>
    </div>
    <div class="news__items">
      <div class="news__item">
        <a href="" class="news__title" data-mh="news__title">Международная выставка обуви и кожгалантереи «SHOESSTAR- ASIA»</a>
        <div class="news__cont" data-mh="news__cont">Международная выставка обуви и кожгалантереи «SHOESSTAR- ASIA» пройдет с 16 по 18 марта 2020 года.</div>
        <div class="news__footer">
          <div class="news__date">11.02.2020</div>
          <a href="#" class="news__more btn-1">Подробнее</a>
        </div>
      </div>
      <div class="news__item">
        <a href="" class="news__title" data-mh="news__title">Международная выставка "Детская и юношеская мода. Одежда для будущих мам</a>
        <div class="news__cont" data-mh="news__cont">Специализированная выставка «РОСЛЕГПРОМ»</div>
        <div class="news__footer">
          <div class="news__date">11.02.2020</div>
          <a href="#" class="news__more btn-1">Подробнее</a>
        </div>
      </div>
      <div class="news__item">
        <a href="" class="news__title" data-mh="news__title">«РОСЛЕГПРОМ» Кожа-Обувь-Меха Технология</a>
        <div class="news__cont" data-mh="news__cont">Международная выставка обуви и кожгалантереи «SHOESSTAR- ASIA» пройдет с 16 по 18 марта 2020 года.</div>
        <div class="news__footer">
          <div class="news__date">11.02.2020</div>
          <a href="#" class="news__more btn-1">Подробнее</a>
        </div>
      </div>
      <div class="news__item">
        <a href="" class="news__title" data-mh="news__title">Специализированная выставка обуви «ИЗМАЙЛОВО SHOES»</a>
        <div class="news__cont" data-mh="news__cont">Специализированная выставка обуви «ИЗМАЙЛОВО SHOES» c 10 по 28 февраля 2020 г.</div>
        <div class="news__footer">
          <div class="news__date">11.02.2020</div>
          <a href="#" class="news__more btn-1">Подробнее</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include './footer.php'; ?>