<?php

namespace App\Http\Controllers;

use App\Models\ComplainModel;
use App\Models\CustomerListModel;
use App\Models\CustomerModel;
use App\Models\PaymentModel;
use App\Models\RoomModel;
use App\Models\StaffModel;
use App\Models\VisitorModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('home');

        $room_count = RoomModel::count();
        $visitors = VisitorModel::count();


        $available_room=RoomModel::where('booking_status','=',0)->count();
        $booking_room=RoomModel::where('booking_status','=',1)->count();

        $staff = StaffModel::count();

        $coustomerCount = CustomerListModel::count();
        $complain = ComplainModel::count();
        $payment = PaymentModel::count();

        return view('backend.dashboard',['room_count'=>$room_count,'room_available'=>$available_room,
            'booking_room'=>$booking_room,'staff'=>$staff,
            'coustomerCount'=>$coustomerCount,
            'complain'=>$complain,'payment'=>$payment,'visitors'=>$visitors]);
    }
}
