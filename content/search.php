
<!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <!-- Search Form -->
                        <form action="kvartiri.php" method="POST" id="advanceSearch">
                            <div class="row">


                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities" name="cities">
                                            <option  value="Все города">Все города</option>
                                          <option  value="Аликанте">Аликанте
                                            </option>
                                            <option  value="Торревьеха">Торревьеха
                                            </option>
                                            <option  value="Сан-Хуан">Сан Хуан</option>
                                            <option  value="Сан Висент дель Распейг">Сан Висент дель Распейг</option>
                                        <option  value="Санта Пола">Санта Пола</option>
                                         <option  value="Бенидорм">Бенидорм </option>
                                         <option value="Эльче">Эльче</option>
                                         <option  value="Новельда">Новельда</option>
                                         <option  value="Алтея">Алтея</option>
                                         <option  value="Кальпе">Кальпе </option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="categories" name="categories">
                                            <option value="Категории недвижимости">Категории недвижимости</option>
                                            <option value="Квартира">Квартира</option>
                                            <option value="Дом">Дом</option>
                                            <option value="Гараж">Гараж</option>
                                            <option value="Офис">Офис</option>
                                            <option value="Склад">Склад</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers" name="offers">
                                            <option value="Услуги">Услуги</option>
                                            <option value="Продажа">Продажа</option>
                                            <option value="Аренда">Аренда</option>

                                        </select>
                                    </div>

                                </div>

                               <!-- <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="listings">
                                            <option value="0">Этаж</option>
                                            <option  value="1"> 1</option>
                                            <option  value="2"> 2</option>
                                            <option  value="3"> 3</option>
                                            <option  value="4"> 4</option>
                                            <option  value="5"> 5</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms">
                                            <option  value="0">Количество комнат</option>
                                            <option  value="1">1</option>
                                            <option  value="2">2</option>
                                            <option  value="3">3</option>
                                            <option  value="4">4</option>
                                            <option  value="5">5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option  value="0">Количество ванных</option>
                                            <option  value="1">1</option>
                                            <option  value="2">2</option>
                                            <option  value="3">3</option>

                                        </select>
                                    </div>
                                </div>-->

                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div  name="area" data-min="10" data-max="1000" data-unit=" м. кв" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-value-step="10">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 кв.м - 1000 кв.м</div>
                                    </div>

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div  name="price" data-min="1000" data-max="1000000" data-unit=" евро" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="1000" data-value-max="1000000" data-value-step="100">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">1000 € - 1000000 €</div>
                                    </div>
                                </div>

                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="button" class="btn south-btn" id="sendForm" onclick="">Поиск</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$cities = $_POST['cities'];
$categories = $_POST['categories'];
$offers = $_POST['offers'];
// echo('cities');
// echo('categories');
// echo('offers');
?>
    <!-- ##### Advance Search Area End ##### -->
