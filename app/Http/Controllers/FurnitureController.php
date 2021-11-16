<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function findAll(){
        $furniture = Furniture::all();
        return view('admin.list', ['furniture'=>$furniture]);
    }

    public function formSearch(){
        return view('admin.search-form');
    }

    public function search(Request $request){
        $name= $request->get('name');
        // 1. Kiểm tra sự tồn tại của sản phẩm.
        $furniture= Furniture::where ('name', '=', $name)->first();
        // nếu không tồn tại thì trả về 404.
        if ($furniture == null) {
            return 'Khong tim thay furniture';
        }
        return view('admin.found-furniture', [
            'name' =>$furniture->name,
            'price' =>$furniture->price,
            'thumbnail' =>$furniture->thubnail
        ]);
    }
}
