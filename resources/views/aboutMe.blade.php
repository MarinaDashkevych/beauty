@extends('templete')
@section('content')
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Обо мне</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="inner-column">
                        <h1>Добро пожаловать в студию <span>Ekaterina Beauty</span></h1>
                        <p>Приятно познакомится, я, Екатерина Мацько, доктор Дерматолог-Косметолог.
                            Высшее медицинское образование - ????????.
                        </p>
                        <p>Приглашаю в свой частный кабинет пройти косметологические процедуры.
                            Работаю стерильными приборами и с одноразовыми материалами.
                        </p>
                        <p>Я понимаю, что сложно найти своего специалиста, которому вы смогли бы довериться.
                            Поэтому всегда развиваю свои профессиональные и социальные навыки, чтобы вы могли
                            чувствовать себя уверено и комфортно во время консультации и процедур. </p>
                        <p>Руководствуясь особым подходом, я забочусь о здоровье каждого своего клиента,
                            применяю только те средства и методы, которые будут соответствовать его индивидуальным
                            особенностям.</p>
                        <p>Прием на консультацию - бесплатно!</p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="{{ route('contacts') }}">Запись</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="images/about-img.jpg" alt="" class="img-fluid">
                </div>
                <!-- End About -->


                <div class="menu-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-title text-center">
                                    <h2>Образование</h2>
                                    <p>Рада предоставить Вам документы, подстверждающие мою акредитацию.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 special-grid drinks">
                                            <div class="gallery-single fix">
                                                <img src="images/img-01.jpg" class="img-fluid" alt="Image">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 special-grid drinks">
                                            <div class="gallery-single fix">
                                                <img src="images/img-01.jpg" class="img-fluid" alt="Image">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 special-grid drinks">
                                            <div class="gallery-single fix">
                                                <img src="images/img-01.jpg" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
