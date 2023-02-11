<?php

namespace App\Http\Controllers;

use App\Models\VisitorModel;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\RoomModel;
use App\Models\CustomerListModel;
use App\Models\CartTypeModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class CustomerController extends Controller
{
    function Reservation(){
        $room = RoomModel::all();
        $card_type = CartTypeModel::all();



     return view('backend.reservation',['room'=>$room,'room1'=>$room,'card_type'=>$card_type]);
        //return view('backend.reservation');
    }
    function from(){

        $ip_address = $_SERVER['REMOTE_ADDR'];
        $visit_time = date("h:i:sa");
        $visit_date = date("d-m-y");

        $country = date_default_timezone_get();
       //for hosting
//        $ipdat = @json_decode(file_get_contents(
//            "http://www.geoplugin.net/json.gp?ip=" . $ip_address));

        $ipdat = @json_decode(file_get_contents(
            "http://www.geoplugin.net/json.gp?ip"));


        $result = VisitorModel::insert([
            'ip' => $ip_address,
            'time' => $visit_time,
            'date' => $visit_date,
            'country' => $ipdat->geoplugin_countryName,
            'city' => $ipdat->geoplugin_city

        ]);

        $room = RoomModel::all();
        $card_type = CartTypeModel::all();
        return view('frontend.userFrom',['room'=>$room,'room1'=>$room,'card_type'=>$card_type]);
        //return view('backend.reservation');
    }
    function thank(){

        return view('frontend.thank');
    }
     function ReservationAdd(Request $req){



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
         $transaction = $req->input('transaction');
         $id_card_no = $req->input('id_card_no');
         $payment = $req->input('payment');

         $count=CustomerModel::where('room_no','=',$RoomNo)->count();
        // dd($count);
         if ($count==1){
             return -1;
         }
         else {
         $result= CustomerModel::insert([

            'room_no'=>$RoomNo,
            'room_type'=>$RoomType,
            'booking_date'=>$day,
            'check_in'=>$check_in_date,
            'check_out'=>$check_out_date,
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'customer_number'=>$contact_no,
            'email'=>$email,
            'id_card_type'=>$id_card_id,
            'id_card_number'=>$id_card_no,
            'transaction'=>$transaction,
             'address'=>$address,
             'advance_payment'=>$payment

         ]);
         if($result){
            CustomerListModel::insert([

                'room_no'=>$RoomNo,
                'room_type'=>$RoomType,
                'booking_date'=>$day,
                'check_in'=>$check_in_date,
                'check_out'=>$check_out_date,
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'customer_number'=>$contact_no,
                'email'=>$email,
                'id_card_type'=>$id_card_id,
                'id_card_number'=>$id_card_no,
                'transaction'=>$transaction,
                'address'=>$address,
                'advance_payment'=>$payment

             ]);

            RoomModel::where('room_no','=',$RoomNo)->update(['booking_status'=>1]);

             $room_no= RoomModel::where('room_no','=',$RoomNo)->pluck('room_free');
             $mailData = [
                 "name" => $first_name,
                 "room_no" => $RoomNo,
                 "room_type" => $RoomType,
                 "room_free" => $room_no[0],
                 "booking_date" => $check_in_date,
                 "payment" => $payment
             ];
             Mail::to($email)->send(new TestMail($mailData));
             return 1;

         }
         else {

             return 0;
         }
     }}

    function price(Request $req )
    {

        $room_no = $req->input('id');

        $customer = RoomModel::where('room_no', '=', $room_no)->get();


        //dd($customer);
        if ($customer) {
            return $customer;

        }
        else {
            return 0;
        }

    }



}
