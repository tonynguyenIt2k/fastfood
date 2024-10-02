@extends('main')

@section('content')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">{{$title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{$title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        @include('intro')
        <!-- About End -->

        <!-- Team Start -->
        @include('team')
@endsection