<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('status','=', 1)->get(); // where judgement  where('status','=', 1) or where('status', 1) or where('status','>', 500)
        return view('frontend.front', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function user_inform(Request $request)
    {
        // method(1)
        //$user = Auth::user();//gain user information (function of laravel )
        // method(2)
         $user = $request->user(); //一大包資料(各式各樣)在身上一直都帶使用者資訊

        return view('frontend.user_setting', compact('user'));
    }

    public function user_inform_update(Request $request)
    {
        //判斷邏輯 數值是否正確
        // 法一
        $request->validate([
            'name' => 'required|max:255',
        ],[
            'name.required' => '必填',
            'name.max' => '輸入的字數過多!',
        ]);
        //法二
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|max:255',
        // ]);
        // if ($validator->fails()) { //$validator如果超過255字元回傳false值 進入fails()後會使用route 內的withError
        //     return redirect(route('user.inform'))->withErrors(['nameError'=>'輸入的字數過多!']); //withErrors內存一個數值
        // }



         $user = $request->user();//裡面包含資料庫取用
         $user->update([
            'name' => $request->name,
         ]);

        return redirect(route('user.inform'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
