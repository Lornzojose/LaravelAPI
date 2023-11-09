<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\MainService;

class MainController extends Controller
{
    public function getAllShape(){
        return MainService::getAllShape();
    }
    public function addShape(Request $request){
        return MainService::addShape($request);

    }
    public function updateShape(Request $request){
        return MainService::updateShape($request);

    }
    public function deleteShape(Request $request){
        return MainService::deleteShape($request);

    }
}
