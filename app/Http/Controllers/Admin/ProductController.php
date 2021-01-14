<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_data = DB::table('products')->get()->all();
        $count = 1;


        return view('admin.product',['product' => $product_data ,'ct'=> $count] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('POST')){

            DB::table('products')->insert([
                'category_id'=> $request->input('Category'),
                'title'=> $request->input('Title'),
                'keywords'=> $request->input('Keywords'),
                'quantity'=> $request->input('Quantity'),
                'slug'=> $request->input('Slug'),
                'price'=> $request->input('price'),
                'image'=> Storage::putFile('images',$request->file('Image') ),
                'status'=> $request->input('Status'),
                'detail'=> $request->input('detail'),
            ]);

            echo 'başariyla eklendi';
            return redirect(route('admin.product'));

        }else{
            $category = DB::table('categories')->get()->all();
            return view('admin.ProductCreate',['data'=>$category]);

        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        $data = DB::table("products")->where('id',$id)->get()->first();
        $catname = DB::table("categories")->where('id',$data->category_id)->get()->first();
        return view('admin.ProductShow',['rs'=>$data] , ['catname'=>$catname]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if ($request->isMethod('post')){

        DB::table('products')->where('id',$id)->update([

            'title'=> $request->input('Title'),
            //'keywords'=> $request->input('Keywords'),
            'quantity'=> $request->input('Quantity'),
            //'slug'=> $request->input('Slug'),
            'price'=> $request->input('Price'),
           // 'image'=> Storage::putFile('images',$request->file('image') ),
            //'status'=> $request->input('Status'),
            'detail'=> $request->input('Detail'),


        ]);


        }else{

            $data = DB::table('products')->where('id',$id)->get()->first();
            $category = DB::table('categories')->get()->all();
            $having = DB::table('categories')->where('id',$data->category_id)->get()->first();
            //echo $category->title;
            return view('admin.ProductUpdate',['rs'=>$data,'data'=>$category,'having'=>$having]);
        }

        return redirect()->route('admin.product.show',[$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        DB::table('products')->where('id',$id)->delete();
        echo 'başarılı silindi0';
        return redirect()->route('admin.product');
    }
}
