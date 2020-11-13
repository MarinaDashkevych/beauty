<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons проверить что это такое и зачем -->
    <link rel="shortcut icon" href="{{ asset("images/logo.png") }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset("images/apple-touch-icon.png") }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset("css/custom.css") }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Contact info -->

<!-- End Contact info -->
<!-- Start header -->
<!--<header>
<div class="contact-imfo-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 arrow-right">
                <i class="fa fa-envelope"></i>
                <div class="overflow-hidden">
                    <h4>Дерматолог-Косметолог доктор Екатерина Мацько</h4>
                    <p class="lead">
                        ekaterina.beauty@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-4 arrow-right">
                <i class="fa fa-volume-control-phone"></i>
                <div class="overflow-hidden">
                    <h4>Запись на прием</h4>
                    <p class="lead">+38068 434 70 50
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-marker"></i>
                <div class="overflow-hidden">
                    <h4>Адресс</h4>
                    <p class="lead">
                        Студия "Ekaterina Beauty"
                        ул Сахарова дом 34
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
-->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset("images/logo.png") }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item"><a class="nav-link" href="{{ route('aboutMe') }}">Обо мне</a></li>

                   <li class="nav-item  dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Услуги</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="{{route('procedure::clean')}}">Чистки</a>
                            <a class="dropdown-item" href="{{route('procedure::peel')}}">Пилинги</a>
                            <a class="dropdown-item" href="{{route('procedure::carry')}}">Уходовые процедуры</a>
                            <a class="dropdown-item" href="{{route('procedure::acne')}}">Лечение акне</a>
                            <a class="dropdown-item" href="{{route('procedure::mask')}}">Маски</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Иньекционные процедуры</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="{{ route('inject::mezo') }}">Мезотерапия</a>
                            <a class="dropdown-item" href="{{ route('inject::lips') }}">Увеличение губ</a>
                            <a class="dropdown-item" href="{{ route('inject::botox') }}">Ботуллинотерапия</a>
                        </div>
                    </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Массажи</a>
                       <div class="dropdown-menu" aria-labelledby="dropdown-a">
                           <a class="dropdown-item" href="{{ route('massage::classic') }}">Классический</a>
                           <a class="dropdown-item" href="{{ route('massage::dance') }}">Танец рук</a>
                           <a class="dropdown-item" href="{{ route('massage::jake') }}">По Жаке</a>
                           <a class="dropdown-item" href="{{ route('massage::plastic') }}">Пластический</a>
                       </div>
                   </li>
                   <li class="nav-item"><a class="nav-link" href="{{ route('cosmetics') }}">Косметика</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('prices') }}">Прайс</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reviews') }}">Отзывы</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
</header>
<!-- End header -->

@yield('content')


<!-- Start Footer -->
<footer class="footer-area bg-f">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <h3>Запишитесь на консультацию</h3>
                <div class="subscribe_form">
                    <form class="subscribe_form">
                        <input name="name" id="subs-name" class="form_input" placeholder="Ваше имя..." type="email">
                        <input name="phone" id="subs-phone" class="form_input" placeholder="Ваш номер телефона..." type="email">
                        <input name="procedure" id="subs-procedure" class="form_input" placeholder="Процедура..." type="email">
                        <button type="submit" class="submit">ЗАПИСАТСЯ</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Мы находимся по адрессу</h3>
                <p class="lead">Ул Сахарова дом 34</p>
                <p><a href="#"> info@admin.com</a></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Запись на прием по телефону:</h3>
                <p><span class="text-color">+38068 434 70 50 </span></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Мы в соцсетях и мессенджерах</h3>
                <ul class="list-inline f-social">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="company-name"> &copy; 2020 <a href="#">Doctor Ekaterina Beauty</a> Design By :
                        <a href="">Marina Dashkevych</a></p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset("js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("js/popper.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset("js/jquery.superslides.min.js") }}"></script>
<script src="{{ asset("js/images-loded.min.js") }}"></script>
<script src="{{ asset("js/isotope.min.js") }}"></script>
<script src="{{ asset("js/baguetteBox.min.js") }}"></script>
<script src="{{ asset("js/form-validator.min.js") }}"></script>
<script src="{{ asset("js/contact-form-script.js") }}"></script>
<script src="{{ asset("js/custom.js") }}"></script>
</body>
</html>
