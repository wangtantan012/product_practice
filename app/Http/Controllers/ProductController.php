<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $products = Product::query(); //first of all connect to model and wait
        $keyword = $request->keyword ?? '';
        if($request->filled('keyword')){ //if keyword had filled then
            $products->where('name','like','%'.$keyword.'%')->orWhere('desc','like',"%{$keyword}%"); //let $products have name:keyword
        }
        $products = $products->paginate(5); //get data if elseif
        // $products->withPath('/product/list?keyword=' . $keyword);
        $products->appends(compact('keyword'));

        return view('product.cartlist', compact('products' , 'keyword')); //demonstrate all the data (products and keyword) to the front
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //新增列表頁
        return view('product.addlist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->desc);
        // dd($request->all());

        $path = Storage::putFile('public/upload', $request->file('image'));

        Product::create([

            'name' => $request->name,
            'img_path' => str_replace('public', 'storage', $path),
            'price' => $request->price,
            'status' => $request->status,
            'desc' => $request->desc,
        ]);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //產品編輯頁
        $product = Product::find($id);

        return view('product.editlist', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $path = null;
        $product = Product::find($id);
        if ($request->file('image')) {
            $path = Storage::putFile('public/upload', $request->file('image'));
            Storage::delete(str_replace('storage', 'public', $product->img_path));

            $product->update([
                // dd($request->all()),
                'desc' => $request->desc,
                'name' => $request->name,
                'img_path' => str_replace('public', 'storage', $path),
                'price' => $request->price,
                'status' => $request->status,


            ]);
        } else {
            $product->update([

                'desc' => $request->desc,
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
            ]);
        }

        //產品新增頁



        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete(str_replace('storage', 'public', $product->img_path));
        $product->delete();
        //刪除資料頁

        return redirect(route('product.index'));
    }

}
