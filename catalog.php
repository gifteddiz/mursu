<?php include './header.php'; ?>
<div class="heading">
  <div class="container">
    <div class="heading__breadcrambs"><a href="#">Главная </a> / <a href="#">Каталог</a></div>
    <h1 class="heading__h1">Название категории</h1>
  </div>
</div>
<div class="catalog">
  <div class="container">
    <div class="catalog__wrapper">
      <div class="catalog__content">
        <div class="catalog__view">
          <div class="catalog__view-section">
            <div class="catalog__view-label">Сортировать по:</div>
            <div class="catalog__view-btns">
              <a href="#" class="catalog__view-btn --active">новизне</a>
              <a href="#" class="catalog__view-btn">цене</a>
            </div>
          </div>
          <div class="catalog__view-section">
            <div class="catalog__view-label">Товаров на странице:</div>
            <div class="catalog__view-btns">
              <a href="#" class="catalog__view-btn --active">по 30</a>
              <a href="#" class="catalog__view-btn">по 60</a>
              <a href="#" class="catalog__view-btn">по 120</a>
            </div>
          </div>
        </div>
        <div class="catalog__cards">
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>
          <?php include './card.php'; ?>

        </div>
      </div>
      <div class="catalog__sidebar">
        <div class="filter">
          <h2 class="filter__h2">Фильтры</h2>
          <div class="filter__section">
            <h3 class="filter__h3">Товары</h3>
            <div class="filter__checkboxes">
              <label class="filter__checkbox">
                <input type="checkbox" />
                <span>Новинки</span>
              </label>
              <label class="filter__checkbox">
                <input type="checkbox" />
                <span>Хиты</span>
              </label>
              <label class="filter__checkbox">
                <input type="checkbox" />
                <span>На складе</span>
              </label>
              <label class="filter__checkbox">
                <input type="checkbox" />
                <span>Акции и скидки</span>
              </label>
              <label class="filter__checkbox">
                <input type="checkbox" />
                <span>Модели прошлых сезонов</span>
              </label>
            </div>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">Категория</h3>
            <select>
              <option>Выберите категорию</option>
            </select>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">пол</h3>
            <div class="filter__checkboxes">
              <label class="filter__checkbox --half">
                <input type="checkbox" />
                <span>Все</span>
              </label>
              <label class="filter__checkbox --half">
                <input type="checkbox" />
                <span>Для мальчиков</span>
              </label>
              <label class="filter__checkbox">
                <input type="checkbox" />
                <span>Для девочек</span>
              </label>
            </div>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">Размер</h3>
            <select>
              <option>Выберите размер</option>
            </select>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">Цвет</h3>
            <select>
              <option>Выберите цвет</option>
            </select>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">Верх</h3>
            <select>
              <option>Выберите верх</option>
            </select>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">Подошва</h3>
            <select>
              <option>Выберите подошву</option>
            </select>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">материал подкладки</h3>
            <select>
              <option>Выберите подкладку</option>
            </select>
          </div>
          <div class="filter__section">
            <h3 class="filter__h3">Материал стельки</h3>
            <select>
              <option>Выберите стельку</option>
            </select>
          </div>
          <div class="filter__btns">
            <a href="#" class="filter__btn btn-1">Показать</a>
            <a href="#" class="filter__btn btn-2">Сбросить</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include './footer.php'; ?>