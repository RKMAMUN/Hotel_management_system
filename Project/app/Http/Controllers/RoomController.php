<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\StaffModel;
use Illuminate\Http\Request;
use App\Models\RoomModel;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    function Room(){

        return view('backend.manage_room');
    }
     function RoomAdd(Request $req){

         $RoomNo = $req->input('RoomNo');
         $RoomType = $req->input('RoomType');
         $RoomFree = $req->input('RoomFree');

         $BookingStatus = '0';
         $CheckInStatus = '0';
         $CheckOutStatus = '0';
         $count=RoomModel::where('room_no','=',$RoomNo)->count();

         if($count > 0){

         }else {


             $result = RoomModel::insert([
                 'room_no' => $RoomNo,
                 'room_type' => $RoomType,
                 'room_free' => $RoomFree,
                 'booking_status' => $BookingStatus,
                 'check_in_status' => $CheckInStatus,
                 'check_out_status' => $CheckOutStatus

             ]);
             if ($result) {

                 return 1;
             } else {

                 return 0;
             }
         }
     }

     function editroom(Request $req){

         $id = $req->input('id');
         $edit_room_type = $req->input('edit_room_type');
         $edit_room_no = $req->input('edit_room_no');
         $edit_room_fee = $req->input('edit_room_fee');

         $result= RoomModel::where('id','=',$id)->update(['room_type'=>$edit_room_type,'room_no'=>$edit_room_no,'room_free'=>$edit_room_fee]);

         if($result){
             return 1;
         }else{
             return 0;
         }
     }
    function roomdelete(Request $req){

        $id = $req->input('id');
        $room_no = $req->input('room');

        //$booking = RoomModel::where('id','=',$id)->get();
        //$booking = RoomModel::where('id','=',$id)->select('id');
        //$booking = RoomModel::where('id', $id)->value('id');;


        $booking= RoomModel::where('id','=',$id)->pluck('booking_status');
        //$result = RoomModel::where('id','=',$id)->delete();
        if($booking[0]){
            if($booking[0]==1){
                RoomModel::where('id','=',$id)->delete();
                CustomerModel::where('room_no','=',$room_no)->delete();
                return 1;
            }else{

            }
        }else{
            RoomModel::where('id','=',$id)->delete();
            return 1;
        }

    }
     function RoomDetails(){

         $result= RoomModel::get();

         if($result){
             return $result;
         }else{

             return 0;
         }

     }
     function CustomerShow(Request $req){

         $room_no = $req->input('id');

         $customer1 = RoomModel::where('room_no','=',$room_no)->get();
         $customer2 = CustomerModel::where('room_no','=',$room_no)->get();

         // decode json to array
         $array[] = json_decode($customer1, true);
         $array[] = json_decode($customer2, true);

         // encode array to json
         $customer = json_encode($array, JSON_PRETTY_PRINT);
         //dd($customer);
         if($customer){
             return $customer;

         }else{

             return 0;
         }

     }
    function room_type(Request $req){

        $room_type = $req->input('id');


        $customer = RoomModel::where('room_type','=',$room_type)->get();

        //dd($customer);
        if($customer){
            return $customer;

        }else{

            return 0;
        }

    }

    function checkout(Request $req){

        $room_no = $req->input('id');

        $customer1 = RoomModel::where('room_no','=',$room_no)->get();
        $customer2 = CustomerModel::where('room_no','=',$room_no)->get();

        // decode json to array
        $array[] = json_decode($customer1, true);
        $array[] = json_decode($customer2, true);

        // encode array to json
        $customer = json_encode($array, JSON_PRETTY_PRINT);
        //dd($customer);
        if($customer){
            return $customer;

        }else{

            return 0;
        }

    }
}
