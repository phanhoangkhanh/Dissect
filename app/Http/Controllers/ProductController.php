<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function open()
    {
        return view('product/product-control');
    }

    public function get()
    {
        $products = \App\Models\Product::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách sản phẩm",
        'data'=>\App\Http\Resources\Product::collection($products)
        ];
        return response()->json($arr, 200);
    }

    public function store(Request $request) {
        $input = $request->all(); 
        $validator = Validator::make($input, [
            'name' => 'required', 'price' => 'required'
        ]);
        if($validator->fails()){
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $product = \App\Models\Product::create($input);
        $arr = ['status' => true,
            'message'=>"Sản phẩm đã lưu thành công",
            'data'=> new \App\Http\Resources\Product($product)
        ];
        return response()->json($arr, 201);
    }

}
