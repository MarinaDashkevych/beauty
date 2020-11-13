@extends('templete')

@section('content')
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>КОСМЕТИКА</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-column , text-center">
                        <h1><span>{{$productData['title']}}</span></h1>
                        <h1><span>{{$productData['engTittle']}}</span></h1>
                        <h2><span>{{$productData['description']}}</span></h2>
                        <h2>Обьем {{ $productData['volume'] .' Код: '. $productData['code']}}</h2>
                    </div>
                </div>
            </div>
    </div>

    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1><span>Действие:</span></h1>
                        @foreach($productData['shortDescription'] as $value =>$shortList)
                            <ul>
                                <li><h3>*{{$shortList}}</h3></li>
                            </ul>
                        @endforeach

                        <h1><span>Когда применять:</span></h1>
                        @foreach($productData['whoNeed'] as $value =>$need)
                            <ul>
                                <li><h3>*{{$need}}</h3></li>
                            </ul>
                        @endforeach

                        <h1><span>Активные компоненты:</span></h1>
                        @foreach($productData['active'] as $value =>$active)
                            <ul>
                                <li><h3>*{{$active}}</h3></li>
                            </ul>
                        @endforeach
                        <h1><span>Способ применения:</span></h1>
                        <h3> {{$productData['usage']}}</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('/images/cosmetics/' . $productData['img']) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
