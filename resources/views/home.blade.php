@extends('main')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Thưởng Thức<br>Món Ngon Của Chúng Tôi</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Món ăn của chúng tôi được chế biến từ những đầu bếp hàng đầu thế giới</p>
                <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Đặt bàn</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="template/img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
        <!-- Service Start -->
        @include('service')
        <!-- Service End -->

        <!-- About Start -->
        @include('intro')
        <!-- About End -->
    
        <!-- Menu Start -->
        @include('foods')
        <!-- Menu End -->

        <!-- Reservation Start -->
        @include('reservation')
        <!-- Reservation Start -->
        
        <!-- Team Start -->
        @include('team')
        <!-- Team End -->

        <!-- Testimonial Start -->
        @include('testimonial')
@endsection