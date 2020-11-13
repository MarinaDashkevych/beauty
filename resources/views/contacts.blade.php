@extends('templete')
@section('content')


    <!-- Start Contact -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Рада Вас видеть по адрессу:</h1>
                    <h2><span>Студия "Ekaterina Beauty" ул Сахарова дом 34</span></h2>
                    <h3>Запись на прием +38068 434 70 50</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Мы на карте</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.2651770211705!2d30.810802896309063!3d46.58199491022421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDbCsDM0JzUzLjEiTiAzMMKwNDgnMzkuMiJF!5e0!3m2!1sru!2sua!4v1603658588656!5m2!1sru!2sua"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Задайте свой вопрос</h2>
                        <p>Буду рада ответить</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Ваше имя " required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Ваш телефон" id="email" class="form-control"
                                           name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Задайте свой вопрос"
                                              rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Отправить сообщение
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->


@endsection
