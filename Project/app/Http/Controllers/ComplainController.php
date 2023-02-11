<?php

namespace App\Http\Controllers;

use App\Models\ComplainModel;
use App\Models\RoomModel;
use DateTime;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ComplainController extends Controller
{

    function complain(){

        return view('backend.complain');
    }
    function getcomplain(){

        $result= ComplainModel::get();

        if($result){
            return $result;
        }else{

            return 0;
        }
    }
    function resolve(Request $req){

        $id= $req->input('id');
        $budget = $req->input('budget');

        $dt = new DateTime();
        $date = Carbon::parse($dt->format('Y-m-d'),)->locale('asia');

        $d= $date->format('l jS F Y');

        $result=  ComplainModel::where('id','=',$id)->update(['budget'=>$budget,'resolve_date'=>$d]);

        if($result){
            return 1;
        }else{

            return 0;
        }
    }
    function complainAdd(Request $req){


        $complainName = $req->input('complainName');
        $complainType = $req->input('complainType');
        $complain = $req->input('complain');

        $dt = new DateTime();
         $date = Carbon::parse($dt->format('Y-m-d'),)->locale('asia');

       $d= $date->format('l jS F Y');
        //$dt->format('Y-m-d H:i:s');
        $created_at = $d;
        $resolve_status = '0';
        $resolve_date = '0';
        $budget = '0';
       // $date = Carbon::parse('2018-03-16 15:45')->locale('ja');

        //echo $date->format('g:i a l jS F Y');

            $result = ComplainModel::insert([
                'complainant_name' => $complainName,
                'complaint_type' => $complainType,
                'complaint' => $complain,
                'created_at' => $created_at,
                'resolve_status' => $resolve_status,
                'resolve_date' => $resolve_date,
                'budget' => $budget

            ]);
            if ($result) {

                return 1;
            } else {

                return 0;
            }
        }

}
