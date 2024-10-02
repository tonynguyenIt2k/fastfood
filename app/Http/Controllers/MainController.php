<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home',[
            'title'=>'Trang chủ',
        ]);
    }
    
    public function about()
    {
        return view('about',[
            'title'=>'Giới thiệu',
        ]);
    }

    public function service()
    {
        return view('tab_service',[
            'title'=>'Dịch vụ',
        ]);
    }

    public function menu()  {
        return view('menu',[
            'title'=>'Thực đơn',
        ]);
    }

    public function booking()  {
        return view('booking',[
            'title'=>'Đặt bàn',
        ]);
    }

    public function review()  {
        return view('tab_review',[
            'title'=>'Đánh giá',
        ]);
    }

    public function team()  {
        return view('tab_team',[
            'title'=>'Thành viên',
        ]);
    }

    public function contact()  {
        return view('contact',[
            'title'=>'Liên hệ',
        ]);
    }
}
