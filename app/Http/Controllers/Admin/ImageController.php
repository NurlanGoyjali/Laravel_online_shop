<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {

        DB::table('images')->insert([
            'title'=>$request->input('Title'),
            'product_id'=>$id,
            'image'=>Storage::putFile('images',$request->file('Image') )
        ]);

        return $this->show($id);

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
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show( $product_id)
    {
        $product = DB::table('products')->where('id',$product_id)->get()->first();
        $image = DB::table('images')->where('product_id',$product_id)->get();

        $ct=1;
        return view('admin.ProductImages',['images'=>$image,'ct'=>$ct , 'product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageController $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ImageController $image, $id)
    {
        //means image
        $product = DB::table('images')->where('id',$id)->get()->first();
        $realproduct=DB::table('products')->where('id',$product->product_id)->get()->first();
        if ($request->isMethod('post')){

            if ( empty( $request->file('Image') ) ){
                DB::table('images')->where('id',$id)->update( ['title'=>$request->input('Title') ]);
                return redirect()->route('admin.image.show',[$realproduct->id]);
            }else{
                DB::table('images')->where('id',$id)->update([
                    'title'=>$request->input('Title'),
                    'image'=> Storage::putFile('images',$request->file('Image')),
                ]);
                return redirect()->route('admin.image.show',[$realproduct->id]);

            }

        }
       return view('admin.ProductImageUpdate',['product'=> $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageController $image,$id)
    {
        $newid = DB::table('images')->where('id',$id)->get()->first();
        DB::table('images')->where('id',$id)->delete();
        return $this->show($newid->product_id);
    }
}
