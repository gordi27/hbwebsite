<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotel - HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
        @media screen and (max-width: 575px) {
            .availabilty-form{
            margin-top: 55px;
            padding: 0 35px;
        }
        }

        .availabilty-form{
            margin-top: -10px;
            z-index: 2;
            position: relative;
        }

        .features {
            margin-top: 20px;
        }
    </style>
<body class='bg-light'>

    <?php require('inc\header.php'); ?>

    <!-- Перелистывание фотографий на Главной -->
    <div class="swiper swiper-container px-lg-4 mt-4">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/1.png" class='w-100'>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/2.png" class='w-100'>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/3.png" class='w-100'>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/4.png" class='w-100'>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/5.png" class='w-100'>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/6.png" class='w-100'>
            </div>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>

    <!-- Для брони на Главной -->
    <div class='container availabilty-form'>
        <div class='row justify-content-center'>
            <div class='col-lg-11 bg-white shadow p-4 rounded mx-auto'>
                <h4>
                    Хотите забронировать номер?
                </h4>
                <h5 class="mb-4">
                    Для начала выберите:
                </h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style='font-weight: 500;'>Дата въезда</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style='font-weight: 500;'>Дата выезда</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style='font-weight: 500;'>Взрослые</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style='font-weight: 500;'>Дети</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mb-2">
                            <div>
                                <button type="submit" class="btn btn-dark shadow-none" style="width: 150px;">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Номера -->
    <h2 class="'mt-5 pt-4 mb-4 text-center fw-bold" style="margin-top: 40px";>Можем предложить</h2>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Эконом</h5>
                      <h6 mb-3>2000₽/сутки</h6>
                      <div class="features mb-4">
                            <!-- <h6 class='mb-2'>Особенности</h6> -->
                            <span class='badge rounded-pill bg-light text-dark text-wrap '>1 спальня</span>
                            <span class='badge rounded-pill bg-light text-dark text-wrap'>1 ванная</span>
                      </div>
                      <!-- <p class="card-text">2 кровати и 1 раскладной диван</p> -->
                      <a href="#" class="btn btn btn-dark shadow-none mb-3">Забронировать</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/2.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Стандарт</h5>
                      <h6 mb-3>5000₽/сутки</h6>
                      <div class="features mb-4">
                            <!-- <h6 class='mb-2'>Особенности</h6> -->
                            <span class='badge rounded-pill bg-light text-dark text-wrap '>1 спальная</span>
                            <span class='badge rounded-pill bg-light text-dark text-wrap'>1 ванная</span>
                            <span class='badge rounded-pill bg-light text-dark text-wrap'>1 диван</span>
                      </div>
                      <!-- <p class="card-text">2 кровати и 1 раскладной диван</p> -->
                      <a href="#" class="btn btn btn-dark shadow-none mb-3">Забронировать</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/3.png" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Люкс</h5>
                      <h6 mb-3>8000₽/сутки</h6>
                      <div class="features mb-4">
                            <!-- <h6 class='mb-2'>Особенности</h6> -->
                            <span class='badge rounded-pill bg-light text-dark text-wrap '>2 спальни</span>
                            <span class='badge rounded-pill bg-light text-dark text-wrap'>2 ванные</span>
                            <span class='badge rounded-pill bg-light text-dark text-wrap'>1 диван</span>
                      </div>
                      <!-- <p class="card-text">2 кровати и 1 раскладной диван</p> -->
                      <a href="#" class="btn btn btn-dark shadow-none mb-3">Забронировать</a>
                    </div>
                  </div>
            </div>
            <!-- <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
                    Больше номеров
                </a>
            </div> -->
        </div>
    </div>

    <!-- Расположение -->
    <h2 class="'mt-5 pt-4 mb-4 text-center fw-bold" style="margin-top: 40px";>Наше расположение</h2>
    <div class="container mt-6">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center bg-white rounded">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9508.902949042478!2d37.6206825!3d55.6992352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b51ae5913a7%3A0x419ba30f5a29b661!2sPalmira%20Business%20Club!5e1!3m2!1sru!2sru!4v1742736350712!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-5 mt-4 text-center">
                <div class="bg-white rounded">
                    <h5>Адрес:</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark mb-4"> <i class="bi bi-geo-alt"></i> 117105, г. Москва, Россия, Ново******вская набережная, 6, к 2</a>
                    <h5>Связаться с нами:</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-telephone"></i> телефон: 8 (499) 216-81-**</a>
                    <br>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-envelope"></i> почта: info@pa***ra-bc.ru</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Связаться с нами -->

<br><br><br>
<br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Инициализация перелистывания -->
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // pagination: {
        //     el: ".swiper-pagination",
        // },
        });
    </script>
</body>
</html>