<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Product::where('status','True')->where('user_id',Auth::id())->get();
            return view('home.UserProducts',['products'=>$data]);

    }

    public function sold($id)
    {
        $data = Product::find($id);
        $data->status ='False';
        $data->save();
        return redirect()->route('myprofile');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=Category::all();
        if ($request->isMethod('POST')){

            $create = new Product;
            $create->category_id= $request->input('Category');
            $create->title= $request->input('Title');
            $create->keywords= $request->input('Keyword');
            $create->quantity= $request->input('Quantity');
            $create->slug= $request->input('Slug');
            $create->description= $request->input('Description');
            $create->tax= $request->input('Tax');
            $create->price = $request->input('Price');
            $create->image= Storage::putFile('images',$request->file('Image') );
            $create->status= 'True';
            $create->detail= $request->input('detail');
            $create->user_id = Auth::id();
            $create->save();
            return redirect()->route('user.products');
        }else
            return view('home.UserProductCreate',['data'=>$data]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Category::all();
        $create = Product::find($id);
        if ($request->isMethod('POST')){

            $create->category_id= $request->input('Category');
            $create->title= $request->input('Title');
            $create->keywords= $request->input('Keyword');
            $create->quantity= $request->input('Quantity');
            $create->slug= $request->input('Slug');
            $create->price= $request->input('Price');
            $create->description= $request->input('Description');
            $create->tax= $request->input('Tax');
           /* if (empty(Storage::putFile('images',$request->file('Image') )))
                $create->image=$create->image;
            else
            $create->image= Storage::putFile('images',$request->file('Image') );*/
            $create->status= 'True';
            $create->detail= $request->input('detail');
            $create->user_id = Auth::id();
            $create->save();
            return redirect()->route('user.products');
        }else
            return view('home.UserProductsUpdate',['data'=>$data,'update'=>$create]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('user.products');
    }
}
