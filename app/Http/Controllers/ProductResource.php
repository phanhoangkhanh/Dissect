<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResourceModel; //json hóa data respond lại
use App\Models\Product;
use App\Http\Resources\ProductResCollection;

// chay bằng lệnh php aartisan tao bo controller tiêu chuẩn 
//  php artisan make:controller Api/ProductController --api
class ProductResource extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * Mở Posman chay trên deskop Agent để test API . dán link vào và chon phuong thức phù hop
     * php artisan make:controller Product --resource 
     */
    public function index()
    {
        //truc tiep data chưa JSON hóa
        //return Product::all();
        // JSON hóa với resource + collection ( vì chưa nhiều phần tử )
        //return ProductResourceModel::collection(Product::paginate(2));
        // dùng qua collection 
        return new ProductResCollection(Product::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Requesrt was fetch in front-end to back
     */
    public function store(Request $request)
    {
        //kiểm tra validate 
        $check = $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        if($check->fails()){
            $arr = [ 
                'success' => false,
                'message' => 'something is wrong',
                'data' =>  $check->errors()
            ];
            return response()->json($arr,400);
        }
        // xem như data truyen ve chuẩn chỉnh với name tạo lun
        $new = Product::create($request->all());
        // tra ve data moi tạo thong qua class ProductR
        $arr = [
            'status' => true,
            'message' => 'ok done',
            'data'  => new ProductResourceModel($new ) // chuyển sang json + đinh dạng chuẩn theo ý mình
        ];
        return response()->json($arr,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        //
        //return Product::find($id);
        return new ProductResourceModel(Product::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //lấy ra data và chỉnh sửa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //the most simple way 
        Product::find($id)->update($request->all());
        return new ProductResourceModel(Product::find($id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Product::find($id)->delete();
        return new ProductResCollection(Product::all());
    }
}
