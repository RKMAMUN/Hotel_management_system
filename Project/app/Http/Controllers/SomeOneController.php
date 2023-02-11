<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartTypeModel;
use App\Models\SiftTypeModel;
use App\Models\StaffTypeModel;
use App\Models\StaffModel;
class SomeOneController extends Controller
{
    function Type(){

        $card_type = CartTypeModel::all();
        $shift_type = SiftTypeModel::all();
        $staff_type = StaffTypeModel::all();
        return view('backend.staff_section',['card_type'=>$card_type,'shift_type'=>$shift_type,'staff_type'=>$staff_type,
        'card_type1'=>$card_type,'shift_type1'=>$shift_type,'staff_type1'=>$staff_type]);


    }
}
