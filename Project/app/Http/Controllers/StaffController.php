<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffModel;
class StaffController extends Controller
{
    function staffAdd(Request $req){

        $staff = $req->input('staff');
        $firstName = $req->input('firstName');
        $lastName = $req->input('lastName');
        $card_type = $req->input('card_type');
        $id_card_no = $req->input('id_card_no');
        $contact_no = $req->input('contact_no');
        $address = $req->input('address');
        $salary = $req->input('salary');
        $shift_type = $req->input('shift_type');


            $result = StaffModel::insert([
                'staff_name' => $staff,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'card_type' => $card_type,
                'card_no' => $id_card_no,
                'contact_number' => $contact_no,
                'address' => $address,
                'salary' => $salary,
                'shift' => $shift_type

            ]);
            if ($result) {

                return 1;
            } else {

                return 0;
            }
        }


        function staffData(){
            $result = StaffModel::all();

            if($result){

                    return $result;
            }else{

                    return 0;
            }
        }
        function staffview(Request $req){

            $id = $req->input('id');
            $result = StaffModel::where('id','=',$id)->get();

            if($result){

                    return $result;
            }else{

                    return 0;
            }
        }
        function staffdel(Request $req){

            $id = $req->input('id');
            $result = StaffModel::where('id','=',$id)->delete();

            if($result){

                    return 1;
            }else{

                    return 0;
            }
        }

        function staffedit(Request $req){

            $id = $req->input('id');
            $staff = $req->input('staff');
            $firstName = $req->input('firstName');
            $lastName = $req->input('lastName');
            $card_type = $req->input('card_type');
            $id_card_no = $req->input('id_card_no');
            $contact_no = $req->input('contact_no');
            $address = $req->input('address');
            $salary = $req->input('salary');
            $shift_type = $req->input('shift_type');

           $result= StaffModel::where('id','=',$id)->update([
                'staff_name' => $staff,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'card_type' => $card_type,
                'card_no' => $id_card_no,
                'contact_number' => $contact_no,
                'address' => $address,
                'salary' => $salary,
                'shift' => $shift_type

            ]);


            //dd($customer);
            if($result){
                return 1;

            }else{

                return 0;
            }

        }
        function editstaffd(Request $req){

            $id = $req->input('id');

            $st = StaffModel::where('id','=',$id)->get();


            //dd($customer);
            if($st){
                return $st;

            }else{

                return 0;
            }

        }
    }

