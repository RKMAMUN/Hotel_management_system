<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\RoomModel;
use App\Models\CustomerListModel;
use App\Models\PaymentModel;
class CustomerListController extends Controller
{

    function payment_Ok1(){

        return view('backend.payment_ok');
    }
    function customer1(){

        return view('backend.customer_list');
    }
    function PaymentClear1(){

        $result= PaymentModel::get();

        if($result){
            return $result;
        }else{

            return 0;
        }
    }
    function customerList1(){

        $result= CustomerListModel::get();

        if($result){
            return $result;
        }else{

            return 0;
        }
    }
    function payment_Ok(Request $req){

        $RoomType = $req->input('RoomType');
        $RoomNo = $req->input('RoomNo');
        $day = $req->input('day');
        $check_in_date = $req->input('check_in_date');
        $check_out_date = $req->input('check_out_date');
        $email = $req->input('email');
        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $contact_no = $req->input('contact_no');
        $id_card_id = $req->input('id_card_id');
        $address = $req->input('address');

        $id_card_no = $req->input('id_card_no');
        $payment = $req->input('payment');
        $room_fee1 = $req->input('room_fee1');

            $result= PaymentModel::insert([

                'room_no'=>$RoomNo,
                'room_type'=>$RoomType,
                'room_free'=>$room_fee1,
                'day'=>$day,
                'check_in'=>$check_in_date,
                'check_out'=>$check_out_date,
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'customer_number'=>$contact_no,
                'email'=>$email,
                'id_card_type'=>$id_card_id,
                'id_card_number'=>$id_card_no,
                'address'=>$address,
                'payment'=>$payment

            ]);


        if($result) {
            RoomModel::where('room_no','=',$RoomNo)->update(['booking_status'=>0]);
            CustomerModel::where('room_no','=',$RoomNo)->delete();
            return 1;
        }
        else{

            return 0;
        }
    }
}
