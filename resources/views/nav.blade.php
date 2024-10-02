<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>FastFood</h1>
            <!-- <img src="template/img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{route('home')}}" class="nav-item nav-link active">Trang chủ</a>
                <a href="{{route('about')}}" class="nav-item nav-link">Giới  thiệu</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Dịch vụ</a>
                <a href="{{route('menu')}}" class="nav-item nav-link">Thực đơn</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Danh mục</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('booking')}}" class="dropdown-item">Đặt bàn</a>
                        <a href="{{route('team')}}" class="dropdown-item">Đầu bếp</a>
                        <a href="{{route('review')}}" class="dropdown-item">Đánh giá</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Liên hệ</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4">Đặt bàn</a>
        </div>
    </nav>
</div>    