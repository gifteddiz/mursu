<?php include './header.php'; ?>
<div class="heading">
  <div class="container">
    <div class="heading__breadcrambs"><a href="#">Главная </a> / <a href="#">Каталог</a></div>
    <h1 class="heading__h1">Дистрибьюторы</h1>
  </div>
</div>
<div class="distrib">
  <div class="container">
    <div class="distrib__item">
      <div class="distrib__img">
        <img src="images/distrib__01.jpg" />
      </div>
      <div class="distrib__cont">
        <h3 class="distrib__h3">Компания «Мила»</h3>
        <p>Город: Екатеринбург</p>
        <p>Адрес: Адрес: г. Екатеринбург, ул. Черняховского, д. 92</p>
        <p>Телефон: +7 (343) 264-09-98 / +7 (343) 264-09-99</p>
        <p>Сайт: <a href="http://www.2166340.ru">www.2166340.ru</a> <a href="http://www.mila.pro">www.mila.pro</a></p>
      </div>
      <div class="distrib__map">
        <div class="yandexmapa">
          <script type="text/javascript">
            function BX_SetPlacemarks_MAP_jqtKdA(map) {
              if (typeof window["BX_YMapAddPlacemark"] != "function") {
                /* If component's result was cached as html,
                 * script.js will not been loaded next time.
                 * let's do it manualy.
                 */

                (function(d, s, id) {
                  var js,
                    bx_ym = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s);
                  js.id = id;
                  js.src = "/bitrix/components/bitrix/map.yandex.view/templates/.default/script.js";
                  bx_ym.parentNode.insertBefore(js, bx_ym);
                })(document, "script", "bx-ya-map-js");

                var ymWaitIntervalId = setInterval(function() {
                  if (typeof window["BX_YMapAddPlacemark"] == "function") {
                    BX_SetPlacemarks_MAP_jqtKdA(map);
                    clearInterval(ymWaitIntervalId);
                  }
                }, 300);

                return;
              }

              var arObjects = {
                PLACEMARKS: [],
                POLYLINES: []
              };
              arObjects.PLACEMARKS[arObjects.PLACEMARKS.length] = BX_YMapAddPlacemark(map, {
                TEXT: "г. Москва, шоссе Энтузиастов, 56, стр.1, помещение 104-2, 1 этаж",
                LON: "37.766747",
                LAT: "55.760722"
              });
            }
          </script>
          <div class="bx-yandex-view-layout">
            <div class="bx-yandex-view-map">
              <script type="text/javascript">
                if (!window.GLOBAL_arMapObjects) window.GLOBAL_arMapObjects = {};

                function init_MAP_jqtKdA() {
                  if (!window.ymaps) return;

                  if (typeof window.GLOBAL_arMapObjects["MAP_jqtKdA"] !== "undefined") return;

                  var node = BX("BX_YMAP_MAP_jqtKdA");
                  node.innerHTML = "";

                  var map = (window.GLOBAL_arMapObjects["MAP_jqtKdA"] = new ymaps.Map(node, {
                    center: [55.760722, 37.766747],
                    zoom: 15,
                    type: "yandex#map",
                  }));

                  if (map.behaviors.isEnabled("scrollZoom")) map.behaviors.disable("scrollZoom");
                  map.behaviors.enable("dblClickZoom");
                  map.behaviors.enable("drag");
                  if (map.behaviors.isEnabled("rightMouseButtonMagnifier")) map.behaviors.disable("rightMouseButtonMagnifier");
                  map.controls.add("zoomControl");
                  map.controls.add("miniMap");
                  map.controls.add("typeSelector");
                  map.controls.add("scaleLine");
                  if (window.BX_SetPlacemarks_MAP_jqtKdA) {
                    window.BX_SetPlacemarks_MAP_jqtKdA(map);
                  }
                }

                (function bx_ymaps_waiter() {
                  if (typeof ymaps !== "undefined") ymaps.ready(init_MAP_jqtKdA);
                  else setTimeout(bx_ymaps_waiter, 100);
                })();

                /* if map inits in hidden block (display:none)
                 *  after the block showed
                 *  for properly showing map this function must be called
                 */
                function BXMapYandexAfterShow(mapId) {
                  if (window.GLOBAL_arMapObjects[mapId] !== undefined) window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
                }
              </script>
              <div id="BX_YMAP_MAP_jqtKdA" class="bx-yandex-map" style="height: 250px; width: 100%">загрузка карты...</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="distrib__item">
      <div class="distrib__img">
        <img src="images/distrib__02.jpg" />
      </div>
      <div class="distrib__cont">
        <h3 class="distrib__h3">Компания «Мила»</h3>
        <p>Город: Екатеринбург</p>
        <p>Адрес: Адрес: г. Екатеринбург, ул. Черняховского, д. 92</p>
        <p>Телефон: +7 (343) 264-09-98 / +7 (343) 264-09-99</p>
        <p>Сайт: <a href="http://www.2166340.ru">www.2166340.ru</a> <a href="http://www.mila.pro">www.mila.pro</a></p>
      </div>
      <div class="distrib__map">
        <div class="yandexmapa">
          <script type="text/javascript">
            function BX_SetPlacemarks_MAP_jqtKdA(map) {
              if (typeof window["BX_YMapAddPlacemark"] != "function") {
                /* If component's result was cached as html,
                 * script.js will not been loaded next time.
                 * let's do it manualy.
                 */

                (function(d, s, id) {
                  var js,
                    bx_ym = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s);
                  js.id = id;
                  js.src = "/bitrix/components/bitrix/map.yandex.view/templates/.default/script.js";
                  bx_ym.parentNode.insertBefore(js, bx_ym);
                })(document, "script", "bx-ya-map-js");

                var ymWaitIntervalId = setInterval(function() {
                  if (typeof window["BX_YMapAddPlacemark"] == "function") {
                    BX_SetPlacemarks_MAP_jqtKdA(map);
                    clearInterval(ymWaitIntervalId);
                  }
                }, 300);

                return;
              }

              var arObjects = {
                PLACEMARKS: [],
                POLYLINES: []
              };
              arObjects.PLACEMARKS[arObjects.PLACEMARKS.length] = BX_YMapAddPlacemark(map, {
                TEXT: "г. Москва, шоссе Энтузиастов, 56, стр.1, помещение 104-2, 1 этаж",
                LON: "37.766747",
                LAT: "55.760722"
              });
            }
          </script>
          <div class="bx-yandex-view-layout">
            <div class="bx-yandex-view-map">
              <script type="text/javascript">
                if (!window.GLOBAL_arMapObjects) window.GLOBAL_arMapObjects = {};

                function init_MAP_jqtKdA() {
                  if (!window.ymaps) return;

                  if (typeof window.GLOBAL_arMapObjects["MAP_jqtKdA"] !== "undefined") return;

                  var node = BX("BX_YMAP_MAP_jqtKdA");
                  node.innerHTML = "";

                  var map = (window.GLOBAL_arMapObjects["MAP_jqtKdA"] = new ymaps.Map(node, {
                    center: [55.760722, 37.766747],
                    zoom: 15,
                    type: "yandex#map",
                  }));

                  if (map.behaviors.isEnabled("scrollZoom")) map.behaviors.disable("scrollZoom");
                  map.behaviors.enable("dblClickZoom");
                  map.behaviors.enable("drag");
                  if (map.behaviors.isEnabled("rightMouseButtonMagnifier")) map.behaviors.disable("rightMouseButtonMagnifier");
                  map.controls.add("zoomControl");
                  map.controls.add("miniMap");
                  map.controls.add("typeSelector");
                  map.controls.add("scaleLine");
                  if (window.BX_SetPlacemarks_MAP_jqtKdA) {
                    window.BX_SetPlacemarks_MAP_jqtKdA(map);
                  }
                }

                (function bx_ymaps_waiter() {
                  if (typeof ymaps !== "undefined") ymaps.ready(init_MAP_jqtKdA);
                  else setTimeout(bx_ymaps_waiter, 100);
                })();

                /* if map inits in hidden block (display:none)
                 *  after the block showed
                 *  for properly showing map this function must be called
                 */
                function BXMapYandexAfterShow(mapId) {
                  if (window.GLOBAL_arMapObjects[mapId] !== undefined) window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
                }
              </script>
              <div id="BX_YMAP_MAP_jqtKdA" class="bx-yandex-map" style="height: 250px; width: 100%">загрузка карты...</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="distrib__item">
      <div class="distrib__img">
        <img src="images/distrib__03.jpg" />
      </div>
      <div class="distrib__cont">
        <h3 class="distrib__h3">Компания «Мила»</h3>
        <p>Город: Екатеринбург</p>
        <p>Адрес: Адрес: г. Екатеринбург, ул. Черняховского, д. 92</p>
        <p>Телефон: +7 (343) 264-09-98 / +7 (343) 264-09-99</p>
        <p>Сайт: <a href="http://www.2166340.ru">www.2166340.ru</a> <a href="http://www.mila.pro">www.mila.pro</a></p>
      </div>
      <div class="distrib__map">
        <div class="yandexmapa">
          <script type="text/javascript">
            function BX_SetPlacemarks_MAP_jqtKdA(map) {
              if (typeof window["BX_YMapAddPlacemark"] != "function") {
                /* If component's result was cached as html,
                 * script.js will not been loaded next time.
                 * let's do it manualy.
                 */

                (function(d, s, id) {
                  var js,
                    bx_ym = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s);
                  js.id = id;
                  js.src = "/bitrix/components/bitrix/map.yandex.view/templates/.default/script.js";
                  bx_ym.parentNode.insertBefore(js, bx_ym);
                })(document, "script", "bx-ya-map-js");

                var ymWaitIntervalId = setInterval(function() {
                  if (typeof window["BX_YMapAddPlacemark"] == "function") {
                    BX_SetPlacemarks_MAP_jqtKdA(map);
                    clearInterval(ymWaitIntervalId);
                  }
                }, 300);

                return;
              }

              var arObjects = {
                PLACEMARKS: [],
                POLYLINES: []
              };
              arObjects.PLACEMARKS[arObjects.PLACEMARKS.length] = BX_YMapAddPlacemark(map, {
                TEXT: "г. Москва, шоссе Энтузиастов, 56, стр.1, помещение 104-2, 1 этаж",
                LON: "37.766747",
                LAT: "55.760722"
              });
            }
          </script>
          <div class="bx-yandex-view-layout">
            <div class="bx-yandex-view-map">
              <script type="text/javascript">
                if (!window.GLOBAL_arMapObjects) window.GLOBAL_arMapObjects = {};

                function init_MAP_jqtKdA() {
                  if (!window.ymaps) return;

                  if (typeof window.GLOBAL_arMapObjects["MAP_jqtKdA"] !== "undefined") return;

                  var node = BX("BX_YMAP_MAP_jqtKdA");
                  node.innerHTML = "";

                  var map = (window.GLOBAL_arMapObjects["MAP_jqtKdA"] = new ymaps.Map(node, {
                    center: [55.760722, 37.766747],
                    zoom: 15,
                    type: "yandex#map",
                  }));

                  if (map.behaviors.isEnabled("scrollZoom")) map.behaviors.disable("scrollZoom");
                  map.behaviors.enable("dblClickZoom");
                  map.behaviors.enable("drag");
                  if (map.behaviors.isEnabled("rightMouseButtonMagnifier")) map.behaviors.disable("rightMouseButtonMagnifier");
                  map.controls.add("zoomControl");
                  map.controls.add("miniMap");
                  map.controls.add("typeSelector");
                  map.controls.add("scaleLine");
                  if (window.BX_SetPlacemarks_MAP_jqtKdA) {
                    window.BX_SetPlacemarks_MAP_jqtKdA(map);
                  }
                }

                (function bx_ymaps_waiter() {
                  if (typeof ymaps !== "undefined") ymaps.ready(init_MAP_jqtKdA);
                  else setTimeout(bx_ymaps_waiter, 100);
                })();

                /* if map inits in hidden block (display:none)
                 *  after the block showed
                 *  for properly showing map this function must be called
                 */
                function BXMapYandexAfterShow(mapId) {
                  if (window.GLOBAL_arMapObjects[mapId] !== undefined) window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
                }
              </script>
              <div id="BX_YMAP_MAP_jqtKdA" class="bx-yandex-map" style="height: 250px; width: 100%">загрузка карты...</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="distrib__item">
      <div class="distrib__img">
        <img src="images/distrib__04.jpg" />
      </div>
      <div class="distrib__cont">
        <h3 class="distrib__h3">Компания «Мила»</h3>
        <p>Город: Екатеринбург</p>
        <p>Адрес: Адрес: г. Екатеринбург, ул. Черняховского, д. 92</p>
        <p>Телефон: +7 (343) 264-09-98 / +7 (343) 264-09-99</p>
        <p>Сайт: <a href="http://www.2166340.ru">www.2166340.ru</a> <a href="http://www.mila.pro">www.mila.pro</a></p>
      </div>
      <div class="distrib__map">
        <div class="yandexmapa">
          <script type="text/javascript">
            function BX_SetPlacemarks_MAP_jqtKdA(map) {
              if (typeof window["BX_YMapAddPlacemark"] != "function") {
                /* If component's result was cached as html,
                 * script.js will not been loaded next time.
                 * let's do it manualy.
                 */

                (function(d, s, id) {
                  var js,
                    bx_ym = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s);
                  js.id = id;
                  js.src = "/bitrix/components/bitrix/map.yandex.view/templates/.default/script.js";
                  bx_ym.parentNode.insertBefore(js, bx_ym);
                })(document, "script", "bx-ya-map-js");

                var ymWaitIntervalId = setInterval(function() {
                  if (typeof window["BX_YMapAddPlacemark"] == "function") {
                    BX_SetPlacemarks_MAP_jqtKdA(map);
                    clearInterval(ymWaitIntervalId);
                  }
                }, 300);

                return;
              }

              var arObjects = {
                PLACEMARKS: [],
                POLYLINES: []
              };
              arObjects.PLACEMARKS[arObjects.PLACEMARKS.length] = BX_YMapAddPlacemark(map, {
                TEXT: "г. Москва, шоссе Энтузиастов, 56, стр.1, помещение 104-2, 1 этаж",
                LON: "37.766747",
                LAT: "55.760722"
              });
            }
          </script>
          <div class="bx-yandex-view-layout">
            <div class="bx-yandex-view-map">
              <script type="text/javascript">
                if (!window.GLOBAL_arMapObjects) window.GLOBAL_arMapObjects = {};

                function init_MAP_jqtKdA() {
                  if (!window.ymaps) return;

                  if (typeof window.GLOBAL_arMapObjects["MAP_jqtKdA"] !== "undefined") return;

                  var node = BX("BX_YMAP_MAP_jqtKdA");
                  node.innerHTML = "";

                  var map = (window.GLOBAL_arMapObjects["MAP_jqtKdA"] = new ymaps.Map(node, {
                    center: [55.760722, 37.766747],
                    zoom: 15,
                    type: "yandex#map",
                  }));

                  if (map.behaviors.isEnabled("scrollZoom")) map.behaviors.disable("scrollZoom");
                  map.behaviors.enable("dblClickZoom");
                  map.behaviors.enable("drag");
                  if (map.behaviors.isEnabled("rightMouseButtonMagnifier")) map.behaviors.disable("rightMouseButtonMagnifier");
                  map.controls.add("zoomControl");
                  map.controls.add("miniMap");
                  map.controls.add("typeSelector");
                  map.controls.add("scaleLine");
                  if (window.BX_SetPlacemarks_MAP_jqtKdA) {
                    window.BX_SetPlacemarks_MAP_jqtKdA(map);
                  }
                }

                (function bx_ymaps_waiter() {
                  if (typeof ymaps !== "undefined") ymaps.ready(init_MAP_jqtKdA);
                  else setTimeout(bx_ymaps_waiter, 100);
                })();

                /* if map inits in hidden block (display:none)
                 *  after the block showed
                 *  for properly showing map this function must be called
                 */
                function BXMapYandexAfterShow(mapId) {
                  if (window.GLOBAL_arMapObjects[mapId] !== undefined) window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
                }
              </script>
              <div id="BX_YMAP_MAP_jqtKdA" class="bx-yandex-map" style="height: 250px; width: 100%">загрузка карты...</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include './footer.php'; ?>