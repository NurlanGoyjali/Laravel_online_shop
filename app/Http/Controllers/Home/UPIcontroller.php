<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use function App\Http\Controllers\Admin\ProductController;

class UPIcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $data = new Image;

            $data->title=$request->input('Title');
            $data->product_id=$id;
            $data->image=Storage::putFile('images',$request->file('Image') );
            $data->save();

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
    public function show($product_id)
    {
        $product = Product::find($product_id);
        $image = Image::where('product_id',$product_id)->get();

        return view('home.UserProductImages',['images'=>$image, 'product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
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
                return redirect()->route('user.image.show',[$realproduct->id]);
            }else{
                DB::table('images')->where('id',$id)->update([
                    'title'=>$request->input('Title'),
                    'image'=> Storage::putFile('images',$request->file('Image')),
                ]);
                return redirect()->route('user.image.show',[$realproduct->id]);

            }

        }
        return view('home.UserProductImagesUpdate',['product'=> $product]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageController $image,$id)
    {$newid = DB::table('images')->where('id',$id)->get()->first();
        DB::table('images')->where('id',$id)->delete();
        return $this->show($newid->product_id);
    }
}
