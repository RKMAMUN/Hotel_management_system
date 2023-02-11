<?php

namespace App\Http\Controllers;

use App\Models\CartTypeModel;
use App\Models\VisitorModel;
use Illuminate\Http\Request;

class VisitorsContriller extends Controller
{
    function  visitors(){

        $visitors = VisitorModel::all();
        return view('backend.visitors',['visitors'=>$visitors]);
    }
}
