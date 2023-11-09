<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shape;

class MainService extends Controller
{
    public static function getAllShape() {
        return Shape::all();

    }
    public static function addShape(Request $request) {
        
        $shape = new Shape();
        $shape->name = $request->name;
        $shape->sides = $request->sides;
        
        $shape->save();

        return Shape::all();

    }
    public static function updateShape(Request $request) {

        $shape = Shape::find($request->id);

        $shape->name = $request->name;
        $shape->sides = $request->sides;
        
        $shape->save();

        return Shape::all();

    }
    public static function deleteShape(Request $request) {
        $shape = Shape::find($request->id);

        $shape->delete();

        return Shape::all();
    }


}
