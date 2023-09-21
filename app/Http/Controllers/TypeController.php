<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\ProductTypeImg;
use Illuminate\Http\Request;
use App\Services\FileService;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $FileService;
    public function __construct(FileService $FileService)
    {
        $this->FileService = $FileService;
    }


    public function index()
    {
        //
        $types = ProductType::all();

        return view('product_type.indextype', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('product_type.addtype');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = ProductType::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        foreach ($request->image ?? [] as $value) {
            ProductTypeImg::create([
                'img_path' => $this->FileService->imgUpload($value, 'type-img'),
                'product_type_id' => $path->id,
            ]);
        }
        return redirect(route('type.index'));
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

        $types = ProductType::find($id);
        return view('product_type.edittype', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $types = ProductType::find($id);
        $types->update([
            'name' => $request->name,
            'desc' => $request->desc,

        ]);

        if ($request->hasfile('image')) {
            foreach ($types->ProductTypeImg ?? [] as $value) {
                $this->FileService->deleteUpload($value->img_path);
                $value->delete();
            }
            foreach ($request->image ?? [] as $value) {
                ProductTypeImg::create([
                    'img_path' => $this->FileService->imgUpload($value, 'type_image'),
                    'product_type_id' => $id,
                ]);
            }
        }
        return redirect(route('type.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 寫法一
        // $types = ProductType::find($id);
        // foreach ($types->ProductTypeImg ?? [] as $value) {
        //     $this->FileService->deleteUpload($value->img_path);
        //     $value->delete();
        // }
        // $types->delete();

        // return redirect(route('type.index'));

        // 寫法二 (用laravel 寫刪除資料庫內的東西)

        $types = ProductType::find($id); // @model find with $id(var)
        $result = 'success'; //set new var success
        if($types){ //if find id then(certification)
            foreach($types->ProductTypeImg ?? [] as $value) { //first find every(foreach) related pic
                $this->FileService->deleteUpload($value->img_path); //use fileservice to deletep related img path
                $value->delete(); //then delete the related img
            }
            $types->delete(); // final step delete data in ProductType
        } else {
            $result = 'fail';
        }
        return $result;

    }
}
