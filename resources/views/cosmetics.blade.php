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
    <!-- End All Pages -->
    <!-- Start About -->

    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Косметика</h2>
                        <h1>Домашний уход-залог максимального эффекта от всех процедур.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    @foreach($cosmetics as $category => $products)--}}

{{--        <span>{{$category}}</span>--}}
{{--<br>--}}
{{--        @foreach($cosmetics[$category] as $product)--}}
{{--            @foreach($product as $key => $value)--}}
{{--                <span>{{$product['title']}}</span>--}}
{{--                <br>--}}
{{--                <span>{{$product['description'] ?? ""}}</span>--}}
{{--                <span>{{$product['usage'] ?? ""}}</span>--}}

{{--                <a href="/">--}}
{{--                    <img src="{{ asset('images/cosmetics/' . $product['img'] )}}" class="img-fluid" alt="Image">--}}
{{--                </a>--}}

{{--            @endforeach--}}
{{--        @endforeach--}}
{{--    @endforeach--}}


    <div class="container">
        <div class="row">
            @foreach(\Illuminate\Support\Facades\Config::get('beauty.categories') as $categoryData)
{{--                <div class="container text-center">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <h1>{{ $categoryData }}</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                @foreach($categoryData['products'] as $productIndex => $product)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="gallery-single fix">
                                <img src="{{ asset('/images/cosmetics/' . $product['img']) }}" class="img-fluid" alt="Image">
                                <div class="why-text">
                                    <h2>Сыворотка гидро-баланс</h2>
                                    <h5>{{ $product['engTittle']}}</h5>
                                    @foreach($product['shortDescription'] as $description => $short)
                                    <h3> {{ $short }}</h3>
                                    @endforeach
                                    <h3> {{ $product['volume']}}</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                <h2>{{ $product['title']}}</h2></p>
                                <p>Объем: 50 мл</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route('product', ['slug' => $categoryData['slug'] . '_' . $productIndex])}}">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            @endforeach
        </div>
    </div>
@endsection
