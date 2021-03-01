<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
date_default_timezone_set('Europe/Istanbul');
class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $product_data = Product::all();
        $count = 1;

        return view('admin.product',['product' => $product_data ,'ct'=> $count] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        $data=date('Y-m-d H:i:s');
        if ($request->isMethod('POST')){

            DB::table('products')->insert([
                'category_id'=> $request->input('Category'),
                'title'=> $request->input('Title'),
                'keywords'=> $request->input('Keywords'),
                'quantity'=> $request->input('Quantity'),
                'user'=>Auth::user()->id,
                'slug'=> $request->input('Slug'),
                'price'=> $request->input('price'),
                'image'=> Storage::putFile('images',$request->file('Image') ),
                'status'=> $request->input('Status'),
                'detail'=> $request->input('detail'),
                'created_at' =>$data,
                'updated_at' =>$data,

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id)
    { $data=date('Y-m-d H:i:s');
        if ($request->isMethod('post')){

        DB::table('products')->where('id',$id)->update([

            'title'=> $request->input('Title'),
            'keywords'=> $request->input('Keywords'),
            'quantity'=> $request->input('Quantity'),
            'slug'=> $request->input('Slug'),
            'user_id'=>Auth::user()->id,
            'price'=> $request->input('Price'),
            //'image'=> Storage::putFile('images',$request->file('image') ),
            'status'=> $request->input('Status'),
            'detail'=> $request->input('Detail'),
            'updated_at' =>$data,

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
        return redirect()->route('admin.product');
    }


    public static function NumberOfProduct($id){
        $data=DB::table("products")->get()->all();
        $ct=0;
        foreach($data as $rs){
            if($rs->category_id == $id){
                $ct=$ct+1;
            }
        }
        if($ct==0)return 'Ürün Eklenmemiş';
        else return $ct;
    }


}
